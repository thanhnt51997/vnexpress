<div class="container">
    <div class="row">
        <div class="col-sm-12 col-12">
            <h5>Có {{ count($comments) }} bình luận bài viết này!</h5>
        </div>
    </div>
    @foreach($comments as $comment)
        <div class="row">
            <div class="col-sm-2 col-lg-2 col-2">
                <div class="thumbnail">
                    <img class="img-fluid user-photo" src="https://ssl.gstatic.com/accounts/ui/avatar_2x.png">
                </div>
            </div>
            <div class="col-sm-5 col-lg-10 col-10">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <strong>{{ $comment->user->name }}</strong> <span
                            class="text-muted">{{ ($comment->created_at)->diffForHumans($now) }}</span>
                    </div>
                    <div class="panel-body border-bottom">
                        {!! $comment->content !!}
                    </div>
                    @if(Auth::user())
                        @if((Auth::user()->id == $comment->user->id) || Auth::user()->superAdmin())
                            <a href="javascript:;"
                               comment-id="{{ $comment->id }}"
                               onclick="showDeleteCommentModal({{ $comment->id }})"
                               class="m-portlet__nav-link m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill delete-comment"
                               title="Delete">
                                <i class="la la-trash"></i>
                            </a>
                        @endif
                            @if((Auth::user()->id == $comment->user->id))
                                <a href="javascript:;"
                                   comment-id="{{ $comment->id }}"
                                   onclick="showEditCommentModal({{ $comment->id }})"
                                   class="m-portlet__nav-link m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill edit-comment border-left"
                                   title="Delete">
                                    <i class="la la-edit"></i>
                                </a>
                            @endif
                    @endif
                </div>
            </div>
        </div>
    @endforeach
</div>


