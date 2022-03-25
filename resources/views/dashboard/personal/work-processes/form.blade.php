<x-form.model route="dashboard.personal.work-processes" :name="__('Work Processes')">
    <x-form.image name="image" :value="$model?->getFirstMediaUrl('work_process.image','optimized')" :label="__('Image')"/>
    <x-form.input name="title" :label="__('Title')"/>
    <x-form.input name="description" :label="__('Description')"/>
</x-form.model>
