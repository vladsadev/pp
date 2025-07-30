<x-layout>
    <x-page-heading>New Job</x-page-heading>

    <x-forms.form method="POST" action="/jobs">
        <x-forms.input label="Title" name="title" placeholder="CEO"/>
        <x-forms.input label="salary" name="salary" placeholder="$45.000"/>
        <x-forms.input label="Location" name="location" placeholder="Obrajes, La Paz - Bolivia"/>

        <x-forms.select label="Schedule" name="schedule">
            <option>Part Time</option>
            <option>Full Time</option>
        </x-forms.select>

        <x-forms.input label="URL" name="url" placeholder="https://ppsolutions.com/jobs/ceo-wanted"/>

        <x-forms.checkbox label="Feature (Costs Extra)" name="featured"/>

        <x-forms.divider/>

        <x-forms.input label="Tags(comma separated)" name="tags" placeholder="whatswey, video, laracast"/>

        <x-forms.button>Publish</x-forms.button>
    </x-forms.form>
</x-layout>
