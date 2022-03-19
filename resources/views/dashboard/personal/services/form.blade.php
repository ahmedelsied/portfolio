<x-form.model route="dashboard.personal.services" :name="__('Services')">
    <x-form.input name="title" :label="__('Title')"/>
    <div class="col-sm-12">
        <div class="form-group row no-gutters">
            <label
                class="col-sm-12 col-form-label text-left {{ $errors->has('icon') ? 'text-danger' : '' }}">
                {{ __('Icon') }}
            </label>
            <div class="col-sm-12">
                <select name="icon" class="custom-select2 @if($errors->has('icon')) is-invalid @endif">
                    <option value="" disabled selected>{{ __('Select an icon') }}</option>
                    @foreach ($icons as $icon)
                        <option @if($icon->icon == $model?->icon) selected @endif value="{{ $icon->icon }}">{{ $icon->icon_name }} <i class="ti-mobile icon d-inline-block"></i></option>
                    @endforeach
                </select>
                @error(dotted_string('icon'))
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
    </div>
    <x-form.input name="description" :label="__('Description')"/>
    @slot('footer')
    <script>
        $(document).ready(function () {
            function iformat(icon) {
                var originalOption = icon.element;
                return $('<span><i class="'+$(originalOption).attr('value')+' d-inline-block"></i>'+icon.text+'</span>');
            }
            $('.custom-select2').select2({
                width: "100%",
                templateSelection: iformat,
                templateResult: iformat,
                    allowHtml: true
                })
            });
    </script>
    @endslot
</x-form.model>
