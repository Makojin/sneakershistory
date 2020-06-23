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
    public function create(Request $request)
    {
        return view('user.profile.create');
        $this->validate($request, Profile::$rules);

      $news = new Profile;
      $form = $request->all();

      // フォームから送信されてきた_tokenを削除する
      unset($form['_token']);
      // フォームから送信されてきたimageを削除する
      unset($form['image']);

      // データベースに保存する
      $profile->fill($form);
      $profile->save();
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
