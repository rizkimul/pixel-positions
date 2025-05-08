<x-layout>
    <x-page-heading>Create Job</x-page-heading>
    
    <x-forms.form method="POST" action="/jobs">
    <x-forms.input label="Title" name="title" placeholder="Manager" />
    <x-forms.input label="Salary" name="salary" placeholder="$50,000" />
    <x-forms.input label="Location" name="location" placeholder="Jakarta, Indonesia" />

    <x-forms.select label="Schedule" name="schedule">
        <option>Part Time</option>
        <option>Full Time</option>
    </x-forms.select>

    <x-forms.input label="URL" name="url" placeholer="https://acme.com/jobs/manager-wanted" />
    <x-forms.checkbox label="Featured (Cost Extra)" name="featured" />
    
    <x-forms.divider />

    <x-forms.input label="Tags (comma separated)" name="tags" placeholder="manager, company, hiring" />

    <x-forms.button>Publish</x-forms.button>
    </x-forms.form>
</x-layout>