<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Post\CreatePostRequest;
use App\Model\Category;
use App\Model\Post;
use http\Env\Response;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    protected $post;

    public function __construct(Post $post)
    {
        $this->post = $post;
    }

    public function index(Request $request)
    {
        $posts = $this->post->with('category','user')->latest('created_at')->paginate(config('app.paginate'));
        if ($request->ajax()) {
            return view('backend.posts.dataTable', ['posts' => $posts])->render();
        }

        return view('backend.posts.index', compact('posts'));
    }

    public function create()
    {
        $categories = Category::all();
        $data = [
            'categories' => $categories
        ];
        return view('backend.posts.create', $data);
    }

    public function store(CreatePostRequest $request)
    {
        $input = $request->except(['avatar']);
        if ($request->hasFile('avatar')) {
            $storagePath = $request->avatar->store('avatar', ['disk' => 'public']);
            $input['avatar'] = $storagePath;
        }
        Post::create([
            'title' => request('title'),
            'status' => request('status'),
            'avatar' => $storagePath,
            'category_id' => request('category_id'),
            'content' => request('content'),
            'user_id' => Auth::user()->id
        ]);
        return redirect()->route('posts.index')->with('success', 'Tạo bài viết thành công!  ');
    }

    public function edit($id)
    {
        $post = Post::findOrFail($id);
        $categories = Category::all();
        $data = [
            'post' => $post,
            'categories' => $categories,
        ];
        return view('backend.posts.edit', $data);
    }

    public function getEditModal($id)
    {
        $post = Post::with('category')->find($id);
        $categories = Category::all();
        if (empty($post)) {
            return Response()->json([
                'status' => 0,
                'message' => 'Bài viết không tồn tại'
            ]);
        }
        return Response()->json([
            'status' => 1,
            'modal_html' => view('backend.posts.edit', compact('post', 'categories'))->render()
        ]);
    }

    public function update(Request $request, $id)
    {
        $post = Post::findOrFail($id);
        $input = $request->except('content');
        $input['content'] = $input['content_edit'];
        if ($request->hasFile('avatar')) {
            $storagePath = $request->avatar->store('avatar', ['disk' => 'public']);
            $input['avatar'] = $storagePath;
            $post->update($input);

        } else {
            $post->update($input);
        }
        $validation = $this->validateData($input);
        if (!empty($validation)) {
            return Response()->json([
                'message' => $validation
            ]);
        }
        $post->update($input);
        return Response()->json([
            'status' => 1,
            'message' => 'Cập nhật bài viết thành công thành công!'
        ]);
    }

    public function validateData($input)
    {
        $message = null;
        if (empty($input['title'])) {
            $message = 'Vui lòng nhập tiêu đề';
        }
        if (empty($input['status'])) {
            $message = 'Vui lòng chọn status';
        }
        if (empty($input['category_id'])) {
            $message = 'Vui lòng chọn danh mục';
        }
        if (empty($input['content'])) {
            $message = 'Vui lòng viết gì đó';
        }
        return $message;
    }

    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();
        return Response()->json([
            'status' => 1,
            'message' => 'Xóa bài viết thành công!'
        ]);
    }

}
