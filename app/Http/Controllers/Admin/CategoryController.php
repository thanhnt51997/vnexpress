<?php

namespace App\Http\Controllers\Admin;

use App\Model\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    protected $category;

    public function __construct(Category $category)
    {
        $this->category = $category;
    }

    public function index(Request $request)
    {
        $categories = $this->category->latest('created_at')->paginate(config('app.paginate'));
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

    public function validateData($input)
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
        return $message;
    }

    public function store(Request $request)
    {
        $input = $request->all();
        $validation = $this->validateData($input);
        if (!empty($validation)) {
            return Response()->json([
                'message' => $validation
            ]);
        }
        Category::create($input);
        return Response()->json([
            'status' => 1,
            'message' => 'Tạo danh mục bài viết thành công!'
        ]);
    }

    public function getEditModal($id)
    {
        $category = Category::find($id);
        if (empty($category)) {
            return Response()->json([
                'status' => 0,
                'message' => 'Danh mục không tồn tại'
            ]);
        }
        return Response()->json([
            'status' => 1,
            'modal_html' => view('backend.categories.edit', compact('category'))->render()
        ]);
    }

    public function validateUpdate($input, $id)
    {
        $message = null;
        $this->validateData($input);
        $name = Category::where('name', $input['name'])->where('id', '<>',$id)->first();
        if (!empty($name)) {
            $message = 'Danh mục đã tồn tại! Vui lòng kiểm tra lại';
        }
        $slug = Category::where('name', $input['slug'])->where('id', '<>',$id)->first();
        if (!empty($slug)) {
            $message = 'Slug của danh mục đã tồn tại! Vui lòng kiểm tra lại';
        }
        return $message;
    }

    public function update(Request $request, $id)
    {
        $category = Category::find($id);
        if (empty($category)) {
            return Response()->json([
                'status' => 0,
                'message' => 'Danh mục không tồn tại'
            ]);
        }
        $input = $request->all();
        $validation = $this->validateUpdate($input, $id);
        if (!empty($validation)) {
            return Response()->json([
                'message' => $validation
            ]);
        }
        $category->update($input);
        return Response()->json([
            'status' => 1,
            'message' => 'Cập nhật danh mục thành công!'
        ]);
    }

    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();
        return Response()->json([
            'status' => 1,
            'message' => 'Xóa danh mục thành công!'
        ]);
    }
}
