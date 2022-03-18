@props([ 'name', 'type'=>'text', 'value'=>null, 'label'=>'', 'class'=>'', ])
@php
    $invalidClass =$errors->has(dotted_string($name)) ? 'is-invalid' : '';
    $splitAttributes = explode(' ',$attributes);
    $defaultPlaceHolder = __('Enter :name',['name'=>$label]);
    $properties = [
    'class'=>"{$invalidClass} form-control {$class}" ,
    ];
@endphp
@once
    <style>
        input[type="color"]{
            -webkit-appearance: none;
            position: relative;
            border-radius: 50%;
            width: 35px;
            height: 35px;
            border: none;
        }
        input[type="color"]::-webkit-color-swatch{
            border-radius: 50%;
            box-sizing: border-box;
            border: none;
            position:absolute;
            top:0px;
            left:0px;
            right:0px;
            bottom:0px;
        }
    </style>
@endonce
<div class="col-sm-12">
    <div class="form-group row no-gutters">
        <label
            class="col-sm-12 col-form-label text-left {{ $errors->has(dotted_string($name)) ? 'text-danger' : '' }}">
            {{ $label }}
        </label>
        <div class="col-sm-12">
            <input type="color" value="{{ old($name)??$value }}" name="{{ $name }}" class="custom-input-colot {{ $properties['class'] }}"/>
            @error(dotted_string($name))
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

    </div>
</div>
