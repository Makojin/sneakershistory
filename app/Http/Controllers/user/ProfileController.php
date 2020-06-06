<?php

namespace App\Http\Controllers\user;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    //
    public function add()
    {
        return view('user.profile.mypage');
    }
    public function create()
    {
        return view('user.profile.create');
    }
    public function edit()
    {
        return view('user.profile.edit');
    }
    public function update()
    {
        return view('user.profile.create');
    }
}
