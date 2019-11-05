<?php

namespace App\Http\Controllers\Admin;

use App\Model\Category;
use App\Model\Post;
use App\Repository\Category\CategoryRepositoryInterface;
use App\Repository\Post\PostRepositoryInterface;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    protected $category;
    protected $categoryRepo;
    protected $postRepo;
    public function __construct(Category $category, CategoryRepositoryInterface $categoryRepo, PostRepositoryInterface $postRepo)
    {
        $this->categoryRepo = $categoryRepo;
        $this->category = $category;
        $this->postRepo = $postRepo;
    }

    public function index(Request $request)
    {
        $categories = $this->categoryRepo->getListData('1', false, null, true);
        if ($request->ajax()) {
            return view('backend.categories.dataTable', ['categories' => $categories])->render();
        }

        return view('backend.categories.index', compact('categories'));
    }

    public function getCreateModal()
    {
        return Response()->json([
            'status' => 1,
            'modal_html' => view('backend.categories.create')->render()
        ]);
    }

    public function validateData($input, $id)
    {
        $message = null;
        if (empty($input['name'])) {
            $message = 'Vui lòng nhập tên danh mục';
        }
        if (empty($input['slug'])) {
            $message = 'Vui lòng nhập slug';
        }
        if (!isset($input['status'])) {
            $message = 'Vui lòng chọn status';
        }
        $name = $this->categoryRepo->getDataValidate($input['name'], null, $id);
        if (!empty($name)) {
            $message = 'Danh mục đã tồn tại! Vui lòng kiểm tra lại';
        }
        $slug = $this->categoryRepo->getDataValidate(null, $input['slug'], $id);
        if (!empty($slug)) {
            $message = 'Slug của danh mục đã tồn tại! Vui lòng kiểm tra lại';
        }
        return $message;
    }

    public function store(Request $request)
    {
        $input = $request->all();
        $validation = $this->validateData($input, null);
        if (!empty($validation)) {
            return Response()->json([
                'message' => $validation
            ]);
        }
        Category::create($input);
        $categories = $this->categoryRepo->getListData('1', true, null, true);
        return Response()->json([
            'status' => 1,
            'message' => 'Tạo danh mục bài viết thành công!',
            'list_html' => view('backend.categories.dataTable', compact('categories'))->render()
        ]);
    }

    public function getEditModal($id)
    {
        $category = $this->categoryRepo->findById($id);
        return Response()->json([
            'status' => 1,
            'modal_html' => view('backend.categories.edit', compact('category'))->render()
        ]);
    }

//    public function validateCategory($input, $id)
//    {
//        $message = null;
//        $this->validateData($input);
//
//        return $message;
//    }

    public function update(Request $request, $id)
    {
        $category = $this->categoryRepo->findById($id);
        if (empty($category)) {
            return Response()->json([
                'status' => 0,
                'message' => 'Danh mục không tồn tại'
            ]);
        }
        $input = $request->all();
        $validation = $this->validateData($input, $id);
        if (!empty($validation)) {
            return Response()->json([
                'message' => $validation
            ]);
        }
        $category->update($input);
        $categories = $this->categoryRepo->getListData('1', true, null, true);
        return Response()->json([
            'status' => 1,
            'message' => 'Cập nhật danh mục thành công!',
            'list_html' => view('backend.categories.dataTable', compact('categories'))->render()
        ]);
    }

    public function getDeleteModal(Request $request)
    {
        $input = $request->all();
        $category = $this->categoryRepo->findById($input['category_id']);
        return Response()->json([
            'status' => 1,
            'modal_html' => view('backend.categories.modal_delete_category', compact('category'))->render()
        ]);
    }

    public function destroy(Request $request)
    {
        $id = $request->category_id;
        $category = $this->categoryRepo->findById($id);
        $category->delete();
        $categories = $this->categoryRepo->getListData('1', true, null, true);
        $posts = $this->postRepo->getListData(null, null,'1', false, null, true);
        if (count($posts) > 0) {
            foreach ($posts as $post) {
                $post->update(['category_id' => null]);
            }
        }
        return Response()->json([
            'status' => 1,
            'message' => 'Xóa danh mục thành công!',
            'list_html' => view('backend.categories.dataTable', compact('categories'))->render()
        ]);
    }
}
