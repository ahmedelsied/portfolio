<x-pages.layout :title="__('Site Settings')">
    @if($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li class="text-danger">{{ $error }}</li>
            @endforeach
        </ul>
    @endif
    <form action="{{ route('dashboard.core.settings.update') }}" style="padding-bottom:10px"
          class="card" enctype="multipart/form-data" method="post">
        @method('PUT')
        @csrf
        <ul class="nav nav-tabs nav-tabs-highlight">
            <li class="nav-item"><a href="#highlight-tab1" class="nav-link active" data-toggle="tab">Home</a></li>
            <li class="nav-item"><a href="#highlight-tab2" class="nav-link active-danger" data-toggle="tab">Personal</a></li>
            <li class="nav-item"><a href="#highlight-tab3" class="nav-link" data-toggle="tab">Contact Info</a></li>
            <li class="nav-item"><a href="#highlight-tab4" class="nav-link" data-toggle="tab">Social</a></li>
            <li class="nav-item"><a href="#highlight-tab5" class="nav-link" data-toggle="tab">Sections</a></li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane fade show active" id="highlight-tab1">
                <div class="col-sm-12">
                    <label><h4>Home Settings</h4></label>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <x-form.input name='header_text' label="{{__('Header Text')}}" :value="$homeSettings->header_text"/>
                    </div>
                    <div class="col-md-12">
                        <x-form.input type="textarea" name='about_text' label="{{__('About Text')}}" :value="$homeSettings->about_text"/>
                    </div>
                </div>
            </div>
            <div class="tab-pane" id="highlight-tab2">
                <div class="col-sm-12">
                    <label><h4>Personal Settings</h4></label>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-sm-12">
                            <x-form.image name="avatar" :value="$personalSettings->avatar" :label="__('Avatar')"/>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <x-form.input name='name' label="{{__('Name')}}" :value="$personalSettings->name"/>
                    </div>
                </div>
            </div>
            <div class="tab-pane" id="highlight-tab3">
                <div class="col-sm-12">
                    <label><h4>Contact Info Settings</h4></label>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <x-form.input name='email' label="{{__('Email')}}" :value="$contactInfoSettings->email"/>
                    </div>
                    <div class="col-md-12">
                        <x-form.input name='phone' label="{{__('Phone')}}" :value="$contactInfoSettings->phone"/>
                    </div>
                    <div class="col-md-12">
                        <x-form.input name='address' label="{{__('Address')}}" :value="$contactInfoSettings->address"/>
                    </div>
                </div>
            </div>
            <div class="tab-pane" id="highlight-tab4">
                <div class="col-sm-12">
                    <label><h4>Social Settings</h4></label>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <x-form.input name='facebook' label="{{__('Facebook')}}" :value="$socialSettings->facebook"/>
                    </div>
                    <div class="col-md-12">
                        <x-form.input name='linkedin' label="{{__('Linkedin')}}" :value="$socialSettings->linkedin"/>
                    </div>
                    <div class="col-md-12">
                        <x-form.input name='github' label="{{__('Github')}}" :value="$socialSettings->github"/>
                    </div>
                    <div class="col-md-12">
                        <x-form.input name='behance' label="{{__('Behance')}}" :value="$socialSettings->behance"/>
                    </div>
                </div>
            </div>
            <div class="tab-pane" id="highlight-tab5">
                <div class="col-sm-12">
                    <label><h4>Sections Settings</h4></label>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-sm-12">
                            <x-form.toggle name='services' label="{{__('Services Section')}}" :value="$sectionsSettings->services"/>
                        </div>
                        <div class="col-sm-12">
                            <x-form.toggle name='team_members' label="{{__('My Team Section')}}" :value="$sectionsSettings->team_members"/>
                        </div>
                        <div class="col-sm-12">
                            <x-form.toggle name='testimonials' label="{{__('Testimonials Section')}}" :value="$sectionsSettings->testimonials"/>
                        </div>
                        <div class="col-sm-12">
                            <x-form.toggle name='clients' label="{{__('Clients Section')}}" :value="$sectionsSettings->clients"/>
                        </div>
                        <div class="col-sm-12">
                            <x-form.toggle name='blog' label="{{__('Blog Section')}}" :value="$sectionsSettings->blog"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-12 text-center">
            <button class="btn btn-primary" type="submit">{{ __('Submit') }}</button>
        </div>

    </form>

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
</x-pages.layout>
