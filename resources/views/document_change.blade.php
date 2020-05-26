@extends('layouts.form')

@section('title','資料変更画面')

@section('content')
{{--TOP画面へボタン--}}
  <button type="button" name="search_button" onclick="location.href='./after_login_top'">TOP画面</button>

{{--変更する資料テーブル--}}
<form action="document_change_confirming" method="post">
@csrf
<input type="hidden" name="catalog_number" value="{{$register_data->catalog_number}}">
<!-- //バリデーション追記部分 -->
<table>
  <tr>
    <th>資料ID</th>
    <td><input type="text" name="catalog_id" value="{{old('catalog_id')}}">
    @if($errors->has('catalog_id'))
    {{$errors->first('catalog_id')}}
    @endif</td>
  </tr>
    <th>資料名</th>
    <td><input type="text" name="catalog_name" value="{{old('catalog_name')}}">
    @if($errors->has('catalog_name'))
    {{$errors->first('catalog_name')}}
    @endif</td>
  </tr>
  <tr>
    <th>廃棄年月日</th>
    <td><input type="text" name="disposal_date" value="{{old('disposal_date')}}">
    @if($errors->has('disposal_date'))
    {{$errors->first('disposal_date')}}
    @endif</td>
  </tr>
  <tr>
    <th>備考</th>
    <td><input type="text" name="catalog_remark" value="{{old('catalog_remark')}}">
    @if($errors->has('catalog_remark'))
    {{$errors->first('catalog_remark')}}
    @endif</td>
  </tr>
</table>

{{--変更ボタン--}}
<input type="submit" value="変更">
</form>

{{--検索画面へ戻るボタン--}}
  <button type="button" name="search_button" onclick="location.href='./document_search'">検索画面へ</button>

@endsection
