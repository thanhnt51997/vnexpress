<?php

namespace App\Http\Controllers\Frontend;

use App\Model\Role;
use App\Model\User;
use http\Env\Response;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegistrationController extends Controller
{
    public function create()
    {
        return Response()->json([
            'status' => 1,
            'modal_html' => view('frontend.auth.register')->render()
        ]);
    }

    protected function validator($input)
    {
        $message = null;
        if (empty($input['email'])) {
            $message = 'Vui lòng nhập Email';
        }
        if (empty($input['name'])) {
            $message = 'Vui lòng nhập Tên hiển thị';
        }
        if (empty($input['password'])) {
            $message = 'Vui lòng nhập password';
        }
        if (empty($input['phone'])) {
            $message = 'Vui lòng nhập số điện thoại';
        }
        if (empty($input['phone'])) {
            $message = 'Vui lòng chọn status cho user';
        }
        $email = User::where('email', $input['email'])->first();
        if (!empty($email)) {
            $message = 'Email đã tồn tại. Vui lòng kiểm tra lại';
        }
        $phone = User::where('phone', $input['phone'])->first();
        if (!empty($phone)) {
            $message = 'Số điện thoại đã tồn tại. Vui lòng kiểm tra lại';
        }
        $userName = User::where('name', $input['name'])->first();
        if (!empty($userName)) {
            $message = 'Tên người dùng đã tồn tại. Vui lòng kiểm tra lại';
        }
        return $message;
    }

    public function store(Request $request)
    {
        $input = $request->all();
        $validation = $this->validator($input);
        if (!empty($validation)) {
            return Response()->json([
                'message' => $validation
            ]);
        }
        $user = User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'phone' => $input['phone'],
            'status' => 1,
            'password' => Hash::make($input['password']),
        ]);
        $user->roles()->attach(['role_id' => 3]);
        Auth::login($user);
        return Response()->json([
            'status' => 1,
            'message' => 'Tạo tài khoản thành công!'
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect()->route('frontend');
    }
}
