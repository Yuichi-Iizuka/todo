<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TodoController extends Controller
{
    // テーブルを全表示するメソッド
    
    public function index(Request $request){

    $items = DB::table('todo')->get();
    return view('todo.index',['items' => $items]);

    }

    public function create(Request $request){

    $param = [
        'title' => $request->title,

    ];
    DB::table('todo')->insert($param);

    return redirect('/home');
    }
}
