<x-layout>
    <div class="space-y-10">

        <section class=" mt-4 text-center">
            <h1 class="text-4xl font-bold">Let's find Your Next Job</h1>

            <form action="" class="mt-8">
                <input
                    type="text"
                    placeholder="Web Developer..."
                    class="py-2 px-3 border border-white/20 rounded-xl bg-white/10 w-full max-w-2xl">
            </form>
        </section>

        <section class="pt-6">
            <x-section-heading>Features Jobs</x-section-heading>
            {{--     cards container--}}
            <div class="grid md:grid-col-3 sm:grid-cols-2 gap-8 mt-6">
                {{--card--}}
                @foreach($jobs as $job)
                    <x-job-card :$job/>
                @endforeach
            </div>

        </section>

        <section>
            <x-section-heading>Tags</x-section-heading>
            <div class="mt-6 space-x-1">
                <x-tag size="small">Tiny Tag</x-tag>
                @foreach($tags as $tag)
                    <x-tag :$tag/>
                @endforeach
            </div>
        </section>

        <section>
            <x-section-heading class="">Recent Jobs</x-section-heading>
            <div class="mt-6 space-y-6">
                @foreach($jobs as $job)
                    <x-job-card-wide :$job/>
                @endforeach
            </div>
        </section>
    </div>

</x-layout>
