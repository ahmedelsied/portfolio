<x-form.model route="dashboard.blog.blog" :name="__('Blogs')">
    <x-form.input type="text" name="title" :label="__('Title')"/>
    <x-form.input type="textarea" name="description" :label="__('Description')"/>
    <x-form.input type="textarea" class="summernote" name="body" :label="__('Body')"/>
    <x-form.image name="image" :value="$model?->getFirstMediaUrl('blog','optimized')" :label="__('Article Image')"/>
    <x-form.select :options="$categories" :value="$model?->category_id" name="category_id" :label="__('Categories')"/>
    <x-slot name="styles">
        <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    </x-slot>
    <x-slot name="footer">
        <script
            src="//cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
        <script>
            $(document).ready(function () {
                $('.summernote').summernote();
            });
        </script>
    </x-slot>
</x-form.model>
