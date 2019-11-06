<?php

namespace App\Http\Controllers\Frontend;

use App\Model\User;
use http\Env\Response;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function __construct()

    {
        $this->middleware(['checkStatus'])->except('logout');

    }

    public function getLogin()
    {
        return Response()->json([
            'status' => 1,
            'modal_html' => view('frontend.auth.login')->render()
        ]);
    }

    protected function validator($input)
    {
        $message = null;
        if (empty($input['email'])) {
            $message = 'Vui lòng nhập Email';
        }

        if (empty($input['password'])) {
            $message = 'Vui lòng nhập password';
        }
        return $message;
    }

    public function login(Request $request)
    {
        $input = $request->all();
        $validation = $this->validator($input);
        if (!empty($validation)) {
            return Response()->json([
                'message' => $validation
            ]);
        }
//        $user = User::find($input);

        $auth = Auth::attempt(['email' => $input['email'], 'password' => $input['password']]);
        if ($auth) {
//            Auth::login($auth);
            return Response()->json([
                'status' => 1,
                'message' => 'Đăng nhập thành công!'
            ]);
        }
        else{
            return Response()->json(([
                'status' == 0,
                'message' => 'Email hoặc mật khẩu không chính xác!'
            ]));
        }

    }
}
