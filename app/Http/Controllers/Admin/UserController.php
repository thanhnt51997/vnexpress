<?php

namespace App\Http\Controllers\Admin;

use App\Model\Role;
use App\Model\User;
use App\Repository\Role\RoleRepositoryInterface;
use App\Repository\User\UserRepositoryInterface;
use http\Env\Response;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\User\CreateUserRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    protected $user;
    protected $userRepo;
    protected $roleRepo;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(User $user, UserRepositoryInterface $userRepo, RoleRepositoryInterface $roleRepo)
    {
        $this->user = $user;
        $this->userRepo = $userRepo;
        $this->roleRepo = $roleRepo;
    }

    public function index(Request $request)
    {
        $users = $this->userRepo->getListData(null, true);
        if ($request->ajax()) {
            return view('backend.users.dataTable', ['users' => $users])->render();
        }

        return view('backend.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = $this->roleRepo->getModelAll();
        return view('backend.users.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request['password'] = Hash::make($request->password);
        $data = $request->except(['role_id']);
        $validation = $this->validateData($data);
        if (!empty($validation)) {
            return Response()->json([
                'message' => $validation
            ]);
        }
        $user = User::create($data);
        $user->roles()->attach($request->role_id);
        return Response()->json([
            'status' => 1,
            'message' => 'Tạo user thành công!'
        ]);

    }

    public function validateData($data)
    {
        $message = null;
        if (empty($data['email'])) {
            $message = 'Vui lòng nhập Email';
        }
        if (empty($data['name'])) {
            $message = 'Vui lòng nhập Tên hiển thị';
        }
        if (empty($data['password'])) {
            $message = 'Vui lòng nhập password';
        }
        if (empty($data['phone'])) {
            $message = 'Vui lòng nhập số điện thoại';
        }
        if (empty($data['status'])) {
            $message = 'Vui lòng chọn status cho user';
        }
        $email = $this->userRepo->getDataValidate(null, $data['email'], null, null);
        if (!empty($email)) {
            $message = 'Email đã tồn tại. Vui lòng kiểm tra lại';
        }
        $phone = $this->userRepo->getDataValidate(null, null, $data['phone'], null);
        if (!empty($phone)) {
            $message = 'Số điện thoại đã tồn tại. Vui lòng kiểm tra lại';
        }
        $userName = $this->userRepo->getDataValidate($data['name'], null, null, null);
        if (!empty($userName)) {
            $message = 'Tên người dùng đã tồn tại. Vui lòng kiểm tra lại';
        }
        return $message;
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user= $this->userRepo->findById($id, 'roles');
        $roles = $this->roleRepo->getModelAll();
        $data = [
            'user' => $user,
            'roles' => $roles,
        ];
        return view('backend.users.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user_info =  $this->userRepo->findById($id, null);
        if (empty($user_info)) {
            $error = 'Người dùng không tồn tại!';
            return $error;
        }
        $input = $request->except('password');
        if ($request->has('password')) {
            $request['password'] = Hash::make($request->password);
        }

        $validation = $this->validateUpdate($user_info, $input);
        if (!empty($validation)) {
            return Response()->json([
                'message' => $validation
            ]);
        }
        $this->userRepo->findById($id, null)->roles()->sync($request->role_id);
        $user_info->update($input);
        return Response()->json([
            'status' => 1,
            'message' => 'Cập nhật thông tin user thành công!',
        ]);
    }

    public function validateUpdate($user_info, $input)
    {
        $message = null;
        $this->validateData($input);
        $email = $this->userRepo->getDataValidate(null,$input['email'],  null, $user_info->id);
        if (!empty($email)) {
            $message = 'Email đã tồn tại. Vui lòng kiểm tra lại';
        }
        $name = $this->userRepo->getDataValidate($input['name'],null,  null, $user_info->id);
        if (!empty($name)) {
            $message = 'Tên người dùng đã tồn tại. Vui lòng kiểm tra lại';
        }
        $phone = $this->userRepo->getDataValidate(null, null, $input['phone'], $user_info->id);
        if (!empty($phone)) {
            $message = 'Số điện thoại đã tồn tại. Vui lòng kiểm tra lại';
        }
        return $message;
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = $this->userRepo->findById($id,null);
        $userLogin = Auth::user()->id;
        if ($userLogin == $id) {
            return Response()->json([
                'status' => 0,
                'message' => 'Bạn không thể xóa chính mình!'
            ]);
        }
        $user->delete();
        $user->roles()->detach();
        return Response()->json([
            'status' => 1,
            'message' => 'Xóa user thành công!'
        ]);
    }

}
