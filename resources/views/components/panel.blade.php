{{-- ## $atributes contiene lo que llega al componente ## --}}
{{--<div {{$attributes->merge(['class'=>'bg-white/5 p-4 flex rounded-xl--}}
{{--group border-2 border-transparent hover:border-blue-800/50 transition-colors duration-300 '])}}>--}}

{{--FORMA ABREVIADA: combina lo que llega MÁS LO valores por defecto posee --}}
<div {{$attributes(['class'=>' bg-white/5 p-4 flex rounded-xl
group border-2 border-transparent hover:border-blue-800/50 transition-colors duration-300 '] )}}>


    {{$slot}}

</div>
