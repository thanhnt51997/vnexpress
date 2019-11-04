<?php

namespace App\Http\Controllers\Admin;

use App\Model\Role;
use App\Repository\Role\RoleRepositoryInterface;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RoleController extends Controller
{
    protected $role;
    protected $roleRepo;

    public function __construct(Role $role, RoleRepositoryInterface $roleRepo)
    {
        $this->role = $role;
        $this->roleRepo = $roleRepo;
    }

    public function index(Request $request)
    {
        $roles = $this->roleRepo->getListData(null, true);
        if ($request->ajax()) {
            return view('backend.roles.dataTable', ['roles' => $roles])->render();
        }

        return view('backend.roles.index', compact('roles'));
    }

    public function getCreateModal()
    {
        $list_permission = $this->getPermissionList();
        return Response()->json([
            'status' => 1,
            'modal_html' => view('backend.roles.create', compact('list_permission'))->render()
        ]);
    }

    public function validateData($input)
    {
        $message = null;
        if (empty($input['name'])) {
            $message = 'Vui lòng nhập tên quyền hạn';
        }
        if (!isset($input['display_name'])) {
            $message = 'Vui lòng nhập dữ liệu';
        }
        if (empty($input['permissions'])) {
            $message = 'Vui lòng chọn chức năng cho quyền này!';
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

        $permissions = $this->getPermissionList();
        $permission_arr = [];
        foreach (array_keys($permissions) as $permission) {
            $permission_arr[$permission] = in_array($permission, $input['permissions']) ? true : false;
        }
        $input['permissions'] = json_encode($permission_arr);
        Role::create($input);
        $roles = $this->role->latest('created_at')->paginate(config('app.paginate'));
        return Response()->json([
            'status' => 1,
            'message' => 'Tạo quyền hạn thành công!',
            'list_html' => view('backend.roles.dataTable', compact('roles'))->render()
        ]);
    }

    public function getEditModal($id)
    {
        $role = $this->roleRepo->findById($id);
        $oldPermission = json_decode($role->permissions, true);
        $checked = array_filter($oldPermission, function ($value) {
            return $value == 'true';
        });
        $check_permisson_arr = array_keys($checked);
        $list_permission = $this->getPermissionList();

        if (empty($role)) {
            return Response()->json([
                'status' => 0,
                'message' => 'Quyền hạn không tồn tại'
            ]);
        }

        return Response()->json([
            'status' => 1,
            'modal_html' => view('backend.roles.edit', compact('role', 'list_permission', 'check_permisson_arr'))->render()
        ]);
    }

    public function validateUpdate($input, $id)
    {
        $message = null;
        $this->validateData($input);
        $name = $this->roleRepo->getDataValidate($input['name'], $id);
        if (!empty($name)) {
            $message = 'Quyền hạn này đã tồn tại! Vui lòng kiểm tra lại';
        }
        return $message;
    }

    public function update(Request $request, $id)
    {
        $role =$this->roleRepo->findById($id);
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
        $permissions = $this->getPermissionList();
        $permission_arr = [];
        foreach (array_keys($permissions) as $permission) {
            $permission_arr[$permission] = in_array($permission, $input['permissions']) ? true : false;
        }
        $input['permissions'] = json_encode($permission_arr);
        $role->update($input);
        $roles = $this->roleRepo->getListData(null, true);
        return Response()->json([
            'status' => 1,
            'message' => 'Cập nhật quyền hạn thành công!',
            'list_html' => view('backend.roles.dataTable', compact('roles'))->render()

        ]);
    }

    public function getDeleteModal(Request $request)
    {
        $input = $request->all();
        $role =  $this->roleRepo->findById($input['role_id']);
        return Response()->json([
            'status' => 1,
            'modal_html' => view('backend.roles.modal_delete_role', compact('role'))->render()
        ]);
    }

    public function destroy(Request $request)
    {
        $id = $request->role_id;
        $role = $this->roleRepo->findById($id);
        $role->delete();
        $roles = $this->roleRepo->getListData(null, true);
        return Response()->json([
            'status' => 1,
            'message' => 'Xóa quyền hạn thành công!',
            'list_html' => view('backend.roles.dataTable', compact('roles'))->render()
        ]);
    }

    public function getPermissionList()
    {
        return [
            'user' => 'Quản lý người dùng',
            'post.create' => 'Viết bài',
            'post.update' => 'Sửa bài viết',
            'post.delete' => 'Xóa bài viết',
            'post.view' => 'Xem bài viết',
        ];
    }
}
