<?php

namespace App\Http\Controllers\Admin;

use App\Model\Permission;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PermissionController extends Controller
{
    protected $permission;

    public function __construct(Permission $permission)
    {
        $this->permission = $permission;
    }

    public function index(Request $request)
    {
        $permissions = $this->permission->latest('created_at')->paginate(config('app.paginate'));
        if ($request->ajax()) {
            return view('backend.permissions.dataTable', ['permissions' => $permissions])->render();
        }

        return view('backend.permissions.index', compact('permissions'));
    }

    public function getCreateModal()
    {
        return Response()->json([
            'status' => 1,
            'modal_html' => view('backend.permissions.create')->render()
        ]);
    }

    public function validateData($input)
    {
        $message = null;
        if (empty($input['name'])) {
            $message = 'Vui lòng nhập tên permission';
        }
        if (!isset($input['display_name'])) {
            $message = 'Vui lòng nhập dữ liệu';
        }
        $nameCreate = Permission::where('name', $input['name'])->first();
        if (!empty($nameCreate)) {
            $message = 'Permission này đã tồn tại! Vui lòng kiểm tra lại';
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
        Permission::create($input);
        return Response()->json([
            'status' => 1,
            'message' => 'Tạo Permisson thành công!'
        ]);
    }

    public function getEditModal($id)
    {
        $permission = Permission::find($id);
        if (empty($permission)) {
            return Response()->json([
                'status' => 0,
                'message' => 'Permission không tồn tại'
            ]);
        }
        return Response()->json([
            'status' => 1,
            'modal_html' => view('backend.permissions.edit', compact('permission'))->render()
        ]);
    }

    public function validateUpdate($input, $id)
    {
        $message = null;
        $this->validateData($input);
        $name = Permission::where('name', $input['name'])->where('id', '<>', $id)->first();
        if (!empty($name)) {
            $message = 'Permission này đã tồn tại! Vui lòng kiểm tra lại';
        }
        return $message;
    }

    public function update(Request $request, $id)
    {
        $permission = Permission::find($id);
        if (empty($permission)) {
            return Response()->json([
                'status' => 0,
                'message' => 'Quyền hạn này không tồn tại'
            ]);
        }
        $input = $request->all();
        $validation = $this->validateUpdate($input, $id);
        if (!empty($validation)) {
            return Response()->json([
                'message' => $validation
            ]);
        }
        $permission->update($input);
        return Response()->json([
            'status' => 1,
            'message' => 'Cập nhật permission thành công!'
        ]);
    }

    public function destroy($id)
    {
        $permisson = Permission::findOrFail($id);
        $permisson->delete();
        return Response()->json([
            'status' => 1,
            'message' => 'Xóa danh mục thành công!'
        ]);
    }
}
