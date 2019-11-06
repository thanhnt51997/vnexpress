<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ForgotPasswordController extends Controller
{
    public function requestForm()
    {
        return view('frontend.users.email');
    }
}
