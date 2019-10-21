<?php

namespace App\Http\Controllers\Admin;

use App\Model\User;
use http\Env\Response;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\User\CreateUserRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::paginate(config('app.paginate'));
        $data = [
            'users' => $users
        ];
        return view('backend.users.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.users.create');
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
        $data = $request->all();
        $validation = $this->validateData($data);
        if (!empty($validation)) {
            return Response()->json([
                'message' => $validation
            ]);
        }
        User::create($data);
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
        if (empty($data['phone'])) {
            $message = 'Vui lòng chọn status cho user';
        }
        $email = User::where('email', $data['email'])->first();
        if (!empty($email)) {
            $message = 'Email đã tồn tại. Vui lòng kiểm tra lại';
        }
        $phone = User::where('phone', $data['phone'])->first();
        if (!empty($phone)) {
            $message = 'Số điện thoại đã tồn tại. Vui lòng kiểm tra lại';
        }
        $userName = User::where('name', $data['name'])->first();
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
        $user = User::findOrFail($id);
        $data = [
            'user' => $user,
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
        $user_info = User::find($id);
        if (empty($user_info)) {
            $error = 'Người dùng không tồn tại!';
            return $error;

        }
        $request['password'] = Hash::make($request->password);
        $input = $request->all();
        $validation = $this->validateUpdate($user_info, $input);
        if (!empty($validation)) {
            return Response()->json([
                'message' => $validation
            ]);
        }
        $user_info->update($input);
        return Response()->json([
            'status' => 1,
            'message' => 'Cập nhật thông tin user thành công!'
        ]);
    }

    public function validateUpdate($user_info, $input)
    {
        $message = null;
        $this->validateData($input);
        if (!empty($email)) {
            $message = 'Email đã tồn tại. Vui lòng kiểm tra lại';
        }
        $email = User::where('email', $input['email'])->where('id', '<>', $user_info->id)->first();
        if (!empty($email)) {
            $message = 'Email đã tồn tại. Vui lòng kiểm tra lại';
        }
        $name = User::where('name', $input['name'])->where('id', '<>', $user_info->id)->first();
        if (!empty($name)) {
            $message = 'Tên người dùng đã tồn tại. Vui lòng kiểm tra lại';
        }
        $phone = User::where('phone', $input['phone'])->where('id', '<>', $user_info->id)->first();
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
        $user = User::find($id);
        $userLogin = Auth::user()->id;
        if ($userLogin == $id) {
            return Response()->json([
                'status' => 0,
                'message' => 'Bạn không thể xóa chính mình!'
            ]);
        }
        $user->delete();
        return Response()->json([
            'status' => 1,
            'message' => 'Xóa user thành công!'
        ]);
    }
}
