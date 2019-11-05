<?php

namespace App\Http\Controllers\Frontend;

use App\Model\Comment;
use App\Model\Post;
use App\Repository\Comment\CommentRepositoryInterface;
use App\Repository\Post\PostRepositoryInterface;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    protected $commentRepo;
    protected $postRepo;
    public function __construct(CommentRepositoryInterface $commentRepo, PostRepositoryInterface $postRepo)
    {
        $this->commentRepo = $commentRepo;
        $this->postRepo = $postRepo;
    }
    public function validateData($input)
    {
        $message = null;
        if (empty($input['content'])) {
            $message = 'Vui lòng nhập nội dung';
        }
        return $message;
    }

    public function postComment(Request $request)
    {
        $input = $request->all();
        if (!empty($validation)) {
            return Response()->json([
                'message' => $validation
            ]);
        }
        Comment::create($input);
//        $comments = Comment::where('post_id', $input['post_id'])->with('user')->orderBy('created_at', 'desc')->get();
        $comments = $this->commentRepo->getListData(true, $input['post_id'], false);
        $now = Carbon::now();
        return Response()->json([
            'status' => 1,
            'message' => 'Bình luận bài viết thành công!',
            'list_html' => view('frontend.pages.dataComment', compact('comments','now'))->render()
        ]);
    }

    public function validateComment($input)
    {
//        $post = Post::find($input['post_id']);
        $post = $this->postRepo->findById($input['post_id']);
        if (empty($post)) {
            return Response()->json([
                'status' => 0,
                'message' => 'Bài viết không tồn tại!',
            ]);
        }
        $comment = $this->commentRepo->findById($input['comment_id']);
        if (empty($comment)) {
            return Response()->json([
                'status' => 0,
                'message' => 'Bình luận không tồn tại!',
            ]);
        }
        if ($comment->user_id != Auth::user()->id && !Auth::user()->superAdmin()) {
            return Response()->json([
                'status' => 0,
                'message' => 'Bạn không có quyền xóa bình luận này',
            ]);
        }
    }

    public function getDeleteModal(Request $request)
    {
        $input = $request->all();
        $this->validateComment($input);
        $comment = $this->commentRepo->findById($input['comment_id']);
        return Response()->json([
            'status' => 1,
            'modal_html' => view('frontend.pages.modal_delete_comment', compact('comment'))->render()
        ]);
    }

    public function destroy(Request $request)
    {
        $input = $request->all();
        $comment = $this->commentRepo->findById($input['comment_id']);
        $comment->delete();
//        $comments = Comment::where('post_id', $input['post_id'])->with('user')->orderBy('created_at', 'desc')->get();
        $comments = $this->commentRepo->getListData(true, $input['post_id'], false);
        $now = Carbon::now();
        return Response()->json([
            'status' => 1,
            'message' => 'Xóa bình luận thành công!',
            'list_html' => view('frontend.pages.dataComment', compact('comments','now'))->render()
        ]);
    }


    public function getEditModal(Request $request)
    {
        $input = $request->all();
        $this->validateComment($input);
        $comment = $this->commentRepo->findById($input['comment_id']);
        return Response()->json([
            'status' => 1,
            'modal_html' => view('frontend.pages.modal_edit_comment', compact('comment'))->render()
        ]);
    }

    public function update(Request $request)
    {
        $input = $request->all();
        $this->validateComment($input);
        $comment = $this->commentRepo->findById($input['comment_id']);
        $comment->update($input);
        $comments = $this->commentRepo->getListData(true, $input['post_id'], false);
        $now = Carbon::now();
        return Response()->json([
            'status' => 1,
            'message' => 'Sửa bình luận thành công!',
            'list_html' => view('frontend.pages.dataComment', compact('comments','now'))->render()
        ]);
    }
}
