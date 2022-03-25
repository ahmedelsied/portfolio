<x-form.model route="dashboard.personal.skills" :name="__('Skills')">
    <x-form.input name="title" :label="__('Title')"/>
    <x-form.input type="number" min="0" max="100" name="experience_level" :label="__('Experience Level %')"/>
    <x-form.color name="color" :value="$model?->color" :label="__('Color')"/>

</x-form.model>
