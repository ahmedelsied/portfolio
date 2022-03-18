<x-form.model route="dashboard.personal.team-members" :name="__('Team Members')">
    <x-form.image name="avatar" :value="$model?->getFirstMediaUrl('team.avatar')" :label="__('Avatar')"/>
    <x-form.input name="name" :label="__('Name')"/>
    <x-form.input name="position" :label="__('Position')"/>
</x-form.model>
