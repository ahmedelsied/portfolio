<x-form.model route="dashboard.portfolio.work" :name="__('Work')">
    <x-form.select :options="$categories" :value="$model?->category_id" name="category_id" :label="__('Categories')"/>
    <x-form.input type="text" name="title" :label="__('Work Title')"/>
    <x-form.image name="image" :value="$model?->getFirstMediaUrl('work')" :label="__('Work Image')"/>
    <x-form.input type="url" name="link" :label="__('Work Link')"/>
</x-form.model>
