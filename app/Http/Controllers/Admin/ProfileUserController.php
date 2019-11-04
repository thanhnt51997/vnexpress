<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfileUserController extends Controller
{
    public function index()
    {
        return view('backend.users.profile');
    }
}
