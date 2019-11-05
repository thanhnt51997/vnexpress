<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Post\CreatePostRequest;
use App\Model\Category;
use App\Model\Post;
use App\Model\User;
use App\Repository\Category\CategoryRepositoryInterface;
use http\Env\Response;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Repository\Post\FrontendRepository;
use App\Repository\Post\PostRepositoryInterface;

class PostController extends Controller
{
    protected $post;
    private $postRepository;
    private $categoryRepository;

    public function __construct(CategoryRepositoryInterface $categoryRepository, PostRepositoryInterface $postRepository, Post $post)
    {
        $this->postRepository = $postRepository;
        $this->categoryRepository = $categoryRepository;
        $this->post = $post;
    }

    public function index(Request $request)
    {
        $posts = $this->postRepository->getListData(null, null,'1', false, null, true);
//        $posts = $this->post->with('category', 'user')->latest('created_at')->paginate(config('app.paginate'));
        $isAdmin = Auth::user()->superAdmin();
        $user_id = Auth::user()->id;
        if ($request->ajax()) {
            return view('backend.posts.dataTable', ['posts' => $posts, 'user_id' => $user_id, 'isAdmin' => $isAdmin])->render();
        }
        return view('backend.posts.index', compact('posts', 'user_id', 'isAdmin'));
    }

    public function create()
    {
        $categories = $this->categoryRepository->getModelAll('Category');
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

//    public function edit($id)
//    {
//        $post = Post::findOrFail($id);
//        $categories = Category::all();
//        $data = [
//            'post' => $post,
//            'categories' => $categories,
//        ];
//        return view('backend.posts.edit', $data);
//    }

    public function getEditModal($id)
    {
        $post = $this->postRepository->findById($id);
        $categories = $this->categoryRepository->getModelAll();
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
        $post = $this->postRepository->findById($id);
        $input = $request->except('content', 'avatar');
        $input['content'] = $input['content_edit'];

        $validation = $this->validateData($input);
        if (!empty($validation)) {
            return Response()->json([
                'message' => $validation
            ]);
        }
        if ($request->hasFile('avatar')) {
            $storagePath = $request->avatar->store('avatar', ['disk' => 'public']);
            $input['avatar'] = $storagePath;

        }

        $post->update($input);
        $posts = $this->postRepository->getListData(null, null,'1', false, null, true);
        $user_id = Auth::user()->id;
        $isAdmin = Auth::user()->superAdmin();
        return Response()->json([
            'status' => 1,
            'message' => 'Cập nhật bài viết thành công thành công!',
            'list_html' => view('backend.posts.dataTable', compact('posts', 'user_id', 'isAdmin'))->render()
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
        $post = $this->postRepository->findById($id);
        $post->delete();
        return Response()->json([
            'status' => 1,
            'message' => 'Xóa bài viết thành công!'
        ]);
    }

}
