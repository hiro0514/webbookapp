@extends('layouts.form')

@section('title','資料変更完了画面')

@section('content')
<p>変更が完了しました</p>

{{--TOP画面へボタン--}}
  <button type="button" name="search_button" onclick="location.href='./after_login_top'">TOP画面</button>
@endsection
