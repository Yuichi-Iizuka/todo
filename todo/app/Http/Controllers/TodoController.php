<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Todo;
use App\Http\Requests\TodoRequest;

class TodoController extends Controller
{
    // テーブルを全表示するメソッド
    
    public function index(Request $request){

    $items = Todo::all();
    return view('todo.index',compact('items'));

    }

    public function store(TodoRequest $request){
    
    $todo = new Todo;
    $form = $request->all();
    unset($form['_token']);
    $todo->fill($form)->save();
    return redirect('/todo');
    }

    public function destroy(Todo $todo){
        $todo->delete();
        return redirect('/todo');
    }

    public function update(Request $request,Todo $todo){
        $todo->is_status = $request->is_status;
        $todo->save();
        return redirect('/todo');
    }
}
