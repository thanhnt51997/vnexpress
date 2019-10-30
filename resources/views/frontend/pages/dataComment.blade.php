<div>Có {{count($comments)}} bình luận</div>
@foreach($comments as $comment)
    <div class="content-comment p-2 border-bottom bg-light">
        <div class="comment-item">
            <p class="full-content p-2">{!! $comment->content !!}</p>
            <div class="user-comment d-flex justify-content-around">
                <h6 class="font-weight-bold float-left"><i class="fa fa-user"></i> {{ $comment->user->name }}</h6>
                <span>{{ \Carbon\Carbon::parse($comment->created_at)->format('H:i d/m/Y') }}</span>
                @if(Auth::user()->id == $comment->user->id)
                    <a href="javascript:;"
                       comment-id="{{ $comment->id }}"
                       onclick="showDeleteCommentModal({{ $comment->id }})"
                       class="m-portlet__nav-link btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill delete-comment"
                       title="Delete">
                        <i class="la la-trash"></i>
                    </a>
                @endif
            </div>
        </div>
    </div>
@endforeach

