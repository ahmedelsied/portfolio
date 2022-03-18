<x-form.model route="dashboard.business.testimonials" :name="__('Testimonials')">
    <x-form.input name="client_name" :label="__('Client Name')"/>
    <x-form.image name="client_image" :value="$model?->getFirstMediaUrl('client_image')" :label="__('Client Image')"/>
    <x-form.input name="client_position" :label="__('Client Position')"/>
    <x-form.input type="textarea" name="review" :label="__('Review')"/>
</x-form.model>
