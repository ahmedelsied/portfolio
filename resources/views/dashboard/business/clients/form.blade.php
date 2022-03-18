<x-form.model route="dashboard.business.clients" :name="__('Clients')">
    <x-form.input name="name" :label="__('Name')"/>
    <x-form.input name="link" :label="__('Link')"/>
    <x-form.image name="client_logo" :value="$model?->getFirstMediaUrl('client_logo')" :label="__('Client Logo')"/>
</x-form.model>
