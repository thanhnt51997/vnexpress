<?php

namespace App\Http\Controllers\Frontend;

use App\Mail\VerifyMail;
use App\Model\Role;
use App\Model\User;
use App\VerifyUser;
use http\Env\Response;
use Illuminate\Foundation\Auth\RegistersUsers;
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

    public function __construct()
    {
//        $this->middleware('guest');
    }

    protected function validateData($input)
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


    protected function store(Request $request)
    {
        $input = $request->all();
        $validation = $this->validateData($input);
        if (!empty($validation)) {
            return Response()->json([
                'status' => 0,
                'message' => $validation,
            ]);
        }
        $user = User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'phone' => $input['phone'],
            'status' => 0,
            'password' => Hash::make($input['password']),
        ]);
        $user->roles()->attach(['role_id' => 3]);
        $verifyUser = VerifyUser::create([
            'user_id' => $user->id,
            'token' => sha1(time())
        ]);
        \Mail::to($user->email)->send(new VerifyMail($user));
        return Response()->json([
            'status' => 1,
            'message' => 'Đăng ký tài ưkhoản thành công! Vui lòng kiểm tra email để kích hoạt!',
            'data' => $user
        ]);
    }

    public function verifyUser($token)
    {
        $verifyUser = VerifyUser::where('token', $token)->first();
        if (isset($verifyUser)) {
            $user_id = $verifyUser->user_id;
            $user = User::where('id', $user_id)->first();
            if (!$user->status) {
                $verifyUser->user->status = 1;
                $verifyUser->user->save();
                $status = 'Chúc mừng tài khoản của bạn đã được kích hoạt! Vui lòng ';
            } else {
                $status = "Tài khoản của bạn đã được kích hoạt! Vui lòng";
            }
        } else {
            return view('emails.notification_verify')->with('warning', "Sorry your email cannot be identified.");
        }
        return view('emails.notification_verify')->with(['status' => $status, 'user' => $user]);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect()->route('frontend');
    }
}
