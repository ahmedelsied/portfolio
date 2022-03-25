@if(Session::has('success'))
<script>
    document.addEventListener("DOMContentLoaded",function(){
        document.querySelector('#show-send-modal').click();
    });
</script>
<button style="display: none" id="show-send-modal" data-toggle="modal" data-target="#send-Modal"></button>
<!-- Modal -->
<div  class="modal fade" id="send-Modal" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            {{-- Thank you, your message has been sent successfully.  --}}
            <div class="modal-body text-center">
                <img class="img-model my-4" src="{{asset('frontend/images/check.png')}}">
                <p class="modal-pragraph" id="send-Modal">{{ Session::get('success') }}</p>
            </div>
            <div class="modal-footer" style="justify-content: center">
                <button type="submit" data-dismiss="modal" class="btn btn-primary">{{ __('Ok') }}</button>
            </div>
        </div>
    </div>
</div>
@endif
