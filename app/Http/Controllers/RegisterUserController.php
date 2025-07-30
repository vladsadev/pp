<?php

namespace App\Http\Controllers;

use App\Models\User;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\File;
use Illuminate\Validation\Rules\Password;

class RegisterUserController extends Controller
{

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validatedUserAttributes = $request->validate([
            'name' => ['required'],
            'email' => ['required', 'email', 'max:254', 'unique:users,email'],
            'password' => ['required', 'confirmed', Password::min(6)],
        ]);

        $validatedEmployerAttributes = $request->validate([
            'employer' => ['required'],
            'logo' => ['required', File::types(['png', 'jpg', 'webp'])],
        ]);

        // accedermos a las propiedades de la instancia 'logo' de Laravel
        // para almacenar la imágen donde deseamos, en este caso en la
        //carpeta "logos"
        $logoPath = $request->logo->store('logos');


//        Make persistence
        $user = User::create($validatedUserAttributes);

//        haciendo uso de la relación, asignamos automáticamente el "id" a la
        // Tabla employer
        $user->employer()->create([
            'name' => $validatedEmployerAttributes['employer'],
            'logo' => $logoPath
        ]);

        // Log in the new user
        Auth::login($user);

        return redirect('/');


    }

    public function create()
    {
        return view('auth.register');
    }

}
