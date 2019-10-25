<?php

namespace App\Http\Controllers\Admin;

use App\Model\Role;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RoleController extends Controller
{
    protected $role;

    public function __construct(Role $role)
    {
        $this->role = $role;
    }

    public function index(Request $request)
    {
        $roles = $this->role->latest('created_at')->paginate(config('app.paginate'));
        if ($request->ajax()) {
            return view('backend.roles.dataTable', ['roles' => $roles])->render();
        }

        return view('backend.roles.index', compact('roles'));
    }

    public function getCreateModal()
    {
        return Response()->json([
            'status' => 1,
            'modal_html' => view('backend.roles.create')->render()
        ]);
    }

    public function validateData($input)
    {
        $message = null;
        if (empty($input['name'])) {
            $message = 'Vui lòng nhập tên quyền hạn';
        }
        if (!isset($input['status'])) {
            $message = 'Vui lòng chọn status';
        }
        if (!isset($input['display_name'])) {
            $message = 'Vui lòng nhập dữ liệu';
        }
        $nameCreate = Role::where('name', $input['name'])->first();
        if (!empty($nameCreate)) {
            $message = 'Quyền hạn này đã tồn tại! Vui lòng kiểm tra lại';
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
        Role::create($input);
        return Response()->json([
            'status' => 1,
            'message' => 'Tạo quyền hạn thành công!'
        ]);
    }

    public function getEditModal($id)
    {
        $role = Role::find($id);
        if (empty($role)) {
            return Response()->json([
                'status' => 0,
                'message' => 'Quyền hạn không tồn tại'
            ]);
        }
        return Response()->json([
            'status' => 1,
            'modal_html' => view('backend.roles.edit', compact('role'))->render()
        ]);
    }

    public function validateUpdate($input, $id)
    {
        $message = null;
        $this->validateData($input);
        $name = Role::where('name', $input['name'])->where('id', '<>', $id)->first();
        if (!empty($name)) {
            $message = 'Quyền hạn này đã tồn tại! Vui lòng kiểm tra lại';
        }
        return $message;
    }

    public function update(Request $request, $id)
    {
        $role = Role::find($id);
        if (empty($role)) {
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
        $role->update($input);
        return Response()->json([
            'status' => 1,
            'message' => 'Cập nhật quyền hạn thành công!'
        ]);
    }

    public function destroy($id)
    {
        $role = Role::findOrFail($id);
        if ($id == 1) {
            return Response()->json([
                'status' => 0,
                'message' => 'Bạn không thể xóa quyền quản trị!'
            ]);
        }
        $role->delete();
        return Response()->json([
            'status' => 1,
            'message' => 'Xóa danh mục thành công!'
        ]);
    }
}
