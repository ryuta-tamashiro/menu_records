@extends('layouts.layout')
@section('title', 'Tutrial for beginner')
@section('content')
<div class="page-header" style="margin-top:-30px;padding-bottom:0px;">
  <h1><small>メニュー新規登録</small></h1>
</div>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form class="contact-form" action="{{ route('menus.create') }}" method="post">
  @csrf
  <!-- メニュー名 -->
  <div class="item">
    <label class="label" for="name" name="name">メニュー名</label>
    <input id="name" type="text" name="name" required>
  </div>
  <!-- 種別 -->
  <div class="item">
    <label class="label" for="menu_type" name="menu_type">種別</label>
    <select class="form-select" name="menu_type" require>
      @foreach($menu_types as $key => $value)
        <option value="{{ $key }}">{{ $value }}</option>
      @endforeach
    </select>
  </div>
  <!-- 詳細 -->
  <div class="item">
    <label class="label" for="description" name="description">詳細</label>
    <input id="description" type="text" name="description">
  </div>
  <!-- URL -->
  <div class="item">
    <label class="label" for="url" name="url">URL</label>
    <input id="url" type="text" name="url">
  </div>
  <div class="item no-label">
    <input type="submit">
  </div>
</form>

<style>
.contact-form {
  border: 1px solid #ccc;
  padding: 10px;
  font-size: 13px;
  font-family: sans-serif;
}
.contact-form .item {
  display: block;
  overflow: hidden;
  margin-bottom: 10px;
}
.contact-form .item.no-label {
  padding: 5px 0px 5px 60px;
}
.contact-form .item .label {
  float: left;
  padding: 5px;
  margin: 0;
  color: black;
}
.contact-form .item input[type=text],
.contact-form .item input[type=email],
.contact-form .item select,
.contact-form .item input[type=password] {
  display: block;
  margin-left: 60px;
  width: 200px;
  padding: 5px;
  border: 1px solid #ccc;
  box-sizing: border-box;
  font-size: 13px;
}
input[type=submit] {
  border: none;
  outline: none;
  display: block;
  line-height: 30px;
  width: 160px;
  text-align: center;
  font-size: 13px;
  color: #fff;
  background-color: #696;
  border-bottom: 4px solid #464;
  cursor:pointer;

  box-sizing: content-box;
  transition:0.3s ease all
}
input[type=submit]:hover{
  border-bottom-width:0;
  transform:translateY(4px)
}
</style>
@endsection