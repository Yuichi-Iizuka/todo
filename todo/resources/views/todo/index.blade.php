@extends('layouts.todo')

@section('content')



<table>
  <form name="RadioForm">
    @csrf
    <tr>
      <th>
        <input type="radio" name="status" id="all" value="all" onClick="Btn()" checked>すべて
      </th>
      <th>
        <input type="radio" name="status" id="work" value="work" onClick="Btn()">作業中
      </th>
      <th>
        <input type="radio" name="status" id="complete" value="complete" onClick="Btn()">完了
      </th>
    </tr>
  </form>
</table>

<table>
  <tr>
    <th>ID</th>
    <th>コメント</th>
    <th>状態</th>
  </tr>
  @foreach($items as $item)
  <tr class="all">
    <td>
      {{$loop->iteration}}
    </td>
    <td>
      {{$item->title}}
    </td>
    @if($item->is_status === 0)
    <form action="{{url('/todo',$item->id)}}" method="post">
    {{csrf_field()}}
    {{method_field('put')}}
    <input type="hidden" name="is_status" value="1">
    <td><input type="submit" class="work" value="作業中"></td>
    </form>
    
    @else($item->is_status === 1)
    <form action="{{url('/todo',$item->id)}}" method="post">
    {{csrf_field()}}
    {{method_field('put')}}
    <input type="hidden" name="is_status" value="0">
    <td><input type="submit" class="complete" value="完了"></td>
    </form>
    @endif
    </td>
    <td><form action="{{url('/todo',$item->id)}}" method="post">
    {{csrf_field()}}
    {{method_field('delete')}}
    <button type="submit">削除</button></td>
    </form>
  </tr>
  @endforeach
</table>

<h1>新規タスク追加</h1>
<form method="post" action="/todo">
  <table>
    @csrf
    @if($errors->has('title'))
    <tr>
      <th>ERROR</th>
      <td>{{$errors->first('title')}}</td>
    </tr>
    @endif
    <tr>
      <th>タスク:<input type="text" name="title"></th>
      <td><input type="submit" value="追加する"></td>
    </tr>
  </table>
</form>
@endsection