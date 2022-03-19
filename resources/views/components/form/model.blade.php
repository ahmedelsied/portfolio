@props(['model','route','name','id','parameters'=>[]])
@extends('dashboard.layouts.default')
@php($routesList = is_array($route) ? $route : null)
@php($model = Form::getModel())
@if($model)
    @section('title',__("Edit :name",['name'=>$name]))
@else
    @section('title',__('Create :name',['name'=>$name]))
@endif
@push('styles')
    {{ $styles ?? '' }}
@endpush
@section('actions')
    <button form="crud-modal-form" type="submit" class="btn btn-success mx-2 px-5">
        {{ __('Save Data') }}
    </button>
    <a href="{{ route($routesList['index'] ?? $route.'.index',$parameters)}}"
       class="btn btn-secondary">
        {{ __('Go Back') }} <i class="icon-arrow-left7"></i>
    </a>
@endsection
@section('content')
    <div class="card">
        <div class="col-span-12">
            <div id="{{ $id ?? $name.'-form' }}" class=" card-body ">
                @if($model)
                    {!! Form::model(
                    $model,
                        [
                            'id'=>'crud-modal-form',
                            'route' => $routesList['update'] ?? [$route.'.update', $model->{$model->getKeyName()}],
                            'method'=>'PUT','files'=>true
                        ]
                     )!!}
                @else
                    {!! Form::open([ 'id'=>'crud-modal-form','route' => $routesList['create']?? $route.'.store',
                    'files'=>true])!!}
                @endif
                <div class="">
                    {{ $slot }}
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script
        src="{{ asset('admin/global_assets/js/plugins/forms/selects/select2.min.js') }}"></script>

    {{ $footer ?? '' }}
@endpush
