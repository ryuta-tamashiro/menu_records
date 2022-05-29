@extends('layouts.layout')
@section('title', 'Tutrial for beginner')
@section('content')
<div class="page-header" style="margin-top:-30px;padding-bottom:0px;">
  <h1><small>メニュー一覧</small></h1>
  <a href="{{ route('menus.new') }}" class="btn btn-primary btn-sm new_menu">新規登録</a>
</div>
@if (session('success_message'))
  <div class="alert alert-success text-center">
    {{ session('success_message') }}
  </div>
@endif

<table class="table table-striped table-hover">
  <thead>
    <tr>
      <th>No</th>
      <th>メニュー</th>
      <th>メニュー種別</th>
      <th>操作</th>
    </tr>
  </thead>
  <tbody>
    @foreach($menus as $menu)
    <tr>
      <td>{{ $menu->id }}</td>
      <td>{{ $menu->name }}</td>
      <td>
        @if ($menu->menu_type == 1)
          主食
        @elseif ($menu->menu_type == 2)
          主菜
        @elseif ($menu->menu_type == 2)
          副菜
        @endif
      </td>
      <td>
        <a href="" class="btn btn-primary btn-sm">詳細</a>
        <a href="" class="btn btn-primary btn-sm">編集</a>
        <a href="" class="btn btn-danger btn-sm">削除</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>

<style>
  .page-header {
    display: flex;
    margin-top: -30px;
    padding-bottom: 0px;
  }
  .page-header h1 {
    display: inline-block;
  }
  .new_menu {
    margin-left: auto;
    margin-top: 25px;
    height: 30px;

  }
</style>
@endsection