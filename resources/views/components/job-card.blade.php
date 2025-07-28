@props(['job'])

<x-panel class="flex flex-col text-center">
    <div class="self-start">{{$job->employer->name}}</div>
    <div class="py-8 font-bold">
        <h3 class="group-hover:text-blue-900 transition-colors duration-300 text-xl">{{$job->title}}</h3>
        <p class="mt-3 text-sm">Full Time - from {{$job->salary}}</p>
    </div>

    <div class="flex justify-between items-center mt-auto">
        {{--Tags--}}
        <div class="space-x-1">
{{--            <x-tag size="small">tiny Tag</x-tag>--}}
            @foreach($job->tags as $tag)
                <x-tag :$tag size="small">tiny Tag</x-tag>
            @endforeach
        </div>
        <div class="">
            <x-employer-logo/>
        </div>
    </div>
</x-panel>

