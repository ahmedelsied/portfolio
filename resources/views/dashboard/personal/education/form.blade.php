<x-form.model route="dashboard.personal.education" :name="__('Education')">
    <x-form.input name="title" :label="__('Title')"/>
    <x-form.input name="location" :label="__('Location')"/>
    <x-form.input name="year" :value="$model?->year->format('Y-m')" type="month" :label="__('Year')"/>
</x-form.model>
