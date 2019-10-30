<?php

namespace App\Http\Controllers\Frontend;

use App\Model\Comment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
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
        $comments = Comment::where('post_id', $input['post_id'])->with('user')->orderBy('created_at', 'desc')->get();
        return Response()->json([
            'status' => 1,
            'message' => 'Bình luận bài viết thành công!',
            'list_html' => view('frontend.pages.dataComment', compact('comments'))->render()
        ]);
    }

    public function getDeleteModal(Request $request)
    {
        $input = $request->all();
        $post = Comment::find($input['post_id']);
        if(empty($post)){
            return Response()->json([
                'status' => 0,
                'message' => 'Bài viết không tồn tại!',
            ]);
        }

        $comment = Comment::find($input['comment_id']);
        if(empty($comment)){
            return Response()->json([
                'status' => 0,
                'message' => 'Bình luận không tồn tại!',
            ]);
        }
        if ($comment->user_id != Auth::user()->id)
        {
            return Response()->json([
                'status' => 0,
                'message' => 'Bạn không có quyền xóa bình luận này',
            ]);
        }
        return Response()->json([
            'status' => 1,
            'modal_html' => view('frontend.pages.modal_delete_comment',compact('comment'))->render()
        ]);
    }

    public function destroy(Request $request)
    {
        $input = $request->all();
        $post = Comment::find($input['post_id']);
        if(empty($post)){
            return Response()->json([
                'status' => 0,
                'message' => 'Bài viết không tồn tại!',
            ]);
        }

        $comment = Comment::find($input['comment_id']);
        if(empty($comment)){
            return Response()->json([
                'status' => 0,
                'message' => 'Bình luận không tồn tại!',
            ]);
        }
        if ($comment->user_id != Auth::user()->id)
        {
            return Response()->json([
                'status' => 0,
                'message' => 'Bạn không có quyền xóa bình luận này',
            ]);
        }
        $comment->delete();
        $comments = Comment::where('post_id', $input['post_id'])->with('user')->orderBy('created_at', 'desc')->get();
        return Response()->json([
            'status' => 1,
            'message' => 'Xóa bình luận thành công!',
            'list_html' => view('frontend.pages.dataComment', compact('comments'))->render()
        ]);
    }
}
