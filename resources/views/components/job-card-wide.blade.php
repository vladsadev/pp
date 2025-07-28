@props(['job'])

<x-panel class="flex gap-x-6">
    <div class="">
        <x-employer-logo :width="80"/>
    </div>

    <div class="flex-1 flex flex-col text-sm text-gray-400">
        <a class="">{{$job->employer->name}}</a>
        <h3 class="mt-2 font-bold text-xl text-gray-100 group-hover:text-blue-800 transition-colors duration-300 ">
            {{$job->title}}</h3>
        <p class="mt-auto">Full Time - from {{$job->salary}}</p>
    </div>

    {{--Tags--}}
    <div class="space-x-1 ">
        {{--        <x-tag>Tag</x-tag>--}}

        @foreach($job->tags as $tag)
            <x-tag :$tag></x-tag>
        @endforeach

    </div>
</x-panel>

