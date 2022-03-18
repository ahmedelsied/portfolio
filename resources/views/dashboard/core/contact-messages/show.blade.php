<x-pages.layout :title="__('Show Message')">
    <div class="row">

        <div class="col-md-12 my-3">
            <div class="p-4 bg-white">

                <h3 class="border-bottom">
                    {{__('Message')}}
                </h3>
                <div class="row">
                    <div class="col-md-12 d-flex">
                        <h5 class="default-color d-inline-block w-md-25">{{__('Received At')}}:</h5>
                        <h5 class="d-inline-block w-md-75 w-100">{{ $message->created_at?->format('d F, Y') }}</h5>
                    </div>
                    <div class="col-md-12 d-flex">
                        <h5 class="default-color d-inline-block w-md-25">{{__('Full Name')}}:</h5>
                        <h5 class="d-inline-block w-md-75 w-100">{{ $message->full_name }}</h5>
                    </div>
                    <div class="col-md-12 d-flex">
                        <h5 class="default-color d-inline-block w-md-25">{{__('Email')}}:</h5>
                        <h5 class="d-inline-block w-md-75 w-100"><a href="mailto:{{ $message->email }}">{{ $message->email }}</a></h5>
                    </div>
                    <div class="col-md-12 d-flex">
                        <h5 class="default-color d-inline-block w-md-25">{{__('Message Content')}}:</h5>
                        <h5 class="d-inline-block w-md-75 w-100"><p>{{ $message->body }}</p></h5>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-pages.layout>
