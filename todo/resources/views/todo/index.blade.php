@extends('layouts.todo')

@section('menu')
<table>
  <form method="post" action="#">
    @csrf
    <tr>
      <th>
        <input type="radio" name="status" value="all">すべて<br>
      </th>
      <th>
        <input type="radio" name="status" value="false">作業中<br>
      </th>
      <th>
        <input type="radio" name="status" value="true">完了<br>
      </th>
    </tr>
  </form>
</table>
@endsection

@section('content')
<table>
  <tr>
    <th>ID</th>
    <th>コメント</th>
    <th>状態</th>
  </tr>
  @foreach($items as $item)
  <tr>
    <td>
      {{$item->id}}
    </td>
    <td>
      {{$item->title}}
    </td>
    @if($item->is_status === 0)
    <td><button>作業中</button></td>
    @else($item->is_status === 0)
    <td><button>完了</button></td>
    @endif
    </td>
    <td><button href="#">削除</button></td>

  </tr>
  @endforeach
</table>

<h1>新規タスク追加</h1>
<form method="post" action="/create">
  @csrf
  <p>タスク:<input type="text" name="title"></p><br>
  <input type="submit" value="追加する">
</form>
@endsection