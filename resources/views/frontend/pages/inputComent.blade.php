<div class="input-comment form-group m-form__group">
    <form class="form-horizontal p-2" id="form_comment_user">
        @if(isset(Auth::user()->id))
        <input type="hidden" id="user-id" name="user_id" value="{{ Auth::user()->id }}">
        @endif
        <input type="hidden" id="post-id" name="post_id" value="{{ $post->id }}">
            <textarea onclick="{{ (!Auth::user()) ? 'showLoginModal()' : ''}}"
                  placeholder="Ý kiến của bạn..."
                  class="form-control m-input form-control-label" name="content" id="input-comment" cols="10"
                  rows="5"></textarea>
        <p class="font-weight-bold text-danger">{{ $errors->first('name') }}</p>
        <div class="alert alert-danger d-none" id="msg_div">
            <span id="res_message"></span>
        </div>
        <div class="bottom-comment">
            @if(!Auth::user())
                <div class="text-left">
                    <p>Hãy đăng nhập để comment</p>
                </div>
            @endif
            <div class="text-right">
                <button type="submit" class="btn btn-success">Gửi</button>
            </div>
        </div>
    </form>
</div>
{{--@section('script')--}}
{{--    <script src="{{ asset('assets/vendors/base/vendors.bundle.js') }}" type="text/javascript"></script>--}}
{{--    <script src="{{ asset('assets/demo/default/base/scripts.bundle.js') }}" type="text/javascript"></script>--}}
{{--    @include('frontend.pages.indexScript')--}}
{{--    @include('frontend.comments.commentScript')--}}
{{--@endsection--}}
