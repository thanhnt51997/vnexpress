<?php

namespace App\Http\Controllers;

use App\Model\PasswordReset;
use App\Model\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Notifications\ResetPasswordRequest;
use phpDocumentor\Reflection\Types\Null_;


class ResetPasswordController extends Controller
{
    public function sendMail(Request $request)
    {
        $data = $request->all();
        if (empty($data['email'])) {
            return Response()->json([
                'status' => 2,
                'message' => 'Vui lòng nhập Email',
            ]);
        }
        $user = User::where('email', $request->email)->first();
        if (!isset($user)) {
            return Response()->json([
                'status' => 2,
                'message' => 'Email không tồn tại trên hệ thống! Vui lòng kiểm tra lại',
            ]);
        }
        $passwordReset = PasswordReset::create([
            'email' => $user->email,
            'token' => Str::random(60),
        ]);
        if ($passwordReset) {
            $user->notify(new ResetPasswordRequest($passwordReset->token));
        }
        return response()->json([
            'status' => 1,
            'message' => 'Link khôi phục mật khẩu đã được gửi tới email của bạn! Vui lòng kiểm tra email'
        ]);
    }

    public function getReset($token)
    {
        $user = PasswordReset::where('token', $token)->first();
        if (empty($user)){
            return view('frontend.users.error_reset', ['message' => 'Token đã hết hạn!']);
        }
        $email = $user->email;
        return view('frontend.users.reset', compact('token', 'email'));
    }


    public function validateData($data)
    {
        $message = null;
        if (empty($data['email'])) {
            $message = 'Vui lòng nhập Email';
        }
        if (empty($data['password'])) {
            $message = 'Vui lòng nhập password';
        }

        return $message;
    }

    public function reset(Request $request, $token)
    {
        $data = $request->all();
        $validation = $this->validateData($data);
        if (!empty($validation)) {
            return Response()->json([
                'message' => $validation
            ]);
        }
        $this->validate($request, [
            'password' => 'min:6',
            'password_confirmation' => 'same:password'
        ],
            [
                'password.min' => 'Mật khẩu phải nhiều hơn 6 ký hơn',
                'password_confirmation.same' => 'Mật khẩu không khớp'
            ]);
        $passwordReset = PasswordReset::where('token', $token)->firstOrFail();
        if (Carbon::parse($passwordReset->updated_at)->addMinutes(720)->isPast()) {
            $passwordReset->delete();

            return response()->json([
                'status' => 422,
                'message' => 'This password reset token is invalid.',
            ]);
        }
        $user = User::where('email', $passwordReset->email)->firstOrFail();
        if ($user->email != $data['email']) {
            return Response()->json([
                'status' => 2,
                'message' => 'Email bạn nhập không phải email cần khôi phục mật khẩu!',
            ]);
        }
        $input = $request->only('password');
        if ($input['password']) {
            $input['password'] = Hash::make($request->password);
        }
        $updatePasswordUser = $user->update($input);
        $passwordReset->delete();

        return response()->json([
            'status' => 1,
            'message' => 'Khôi phục mật khẩu thành công! Vui lòng đăng nhập lại',
        ]);
    }
}
