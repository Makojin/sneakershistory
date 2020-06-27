<?php

namespace App\Http\Controllers\user;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\history;

class HistoryController extends Controller
{
    //
    public function add()
    {
        return view('/home');
    }
    
    public function create()
    {  //投稿画面
    
    return view('user/history/post');
        
        $this->validate($request, History::$rules);

        $history = new History;
        $form = $request->all();

       // フォームから画像が送信されてきたら、保存して、$news->image_path に画像のパスを保存する
        if (isset($form['image'])) {
        $path = $request->file('image')->store('public/image');
        $history->image_path = basename($path);
      } else {
        $history->image_path = null;
      }

        // フォームから送信されてきた_tokenを削除する
        unset($form['_token']);
        // フォームから送信されてきたimageを削除する
        unset($form['image']);

        // データベースに保存する
        $history->fill($form);
        $history->save();
        return redirect('user/history/index');
    }
        
    
    public function index()
    {//投稿一覧画面
        return  view('user/history/index');
    }
    
    
    
    public function edit()
    {//投稿編集画面
        return view('user/history/edit');
    }
    
    public function detaile()
    {
        return view('user/history/detaile');
    }
    
    
   

    
    
    
}