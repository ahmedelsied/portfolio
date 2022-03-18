<x-form.model route="dashboard.personal.experiences" :name="__('Experiences')">
    <x-form.input name="position_title" :label="__('Position Title')"/>
    <x-form.input name="company_name" :label="__('Company Name')"/>
    <x-form.input type="month" :value="$model?->from" name="from" :label="__('From')"/>
    <x-form.input type="month" :value="$model?->to" name="to" :label="__('To')"/>
</x-form.model>
