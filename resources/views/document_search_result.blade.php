@extends('layouts.form')

@section('title','資料検索結果画面')

@section('content')

{{--検索結果フォーム--}}
<p>　＜資料検索結果＞　</p>
@csrf
<!-- <input type="text" name="catalog_name"> -->
<!-- <input type="submit" name="submit" value="検索"> -->

{{--資料検索結果--}}
<p>{{$search_count}}件の検索結果</p>
<table border="1">
  <tr>
    <th nowrap>ISBN番号</th>
    <th nowrap>資料名</th>
    <th nowrap>分類コード</th>
    <th nowrap>著者</th>
    <th nowrap>出版社</th>
    <th nowrap>出版日</th>
    <th nowrap>資料ID</th>
    <th nowrap>変更</th>
    <th nowrap>削除</th>
  </tr>
  @foreach($catalog_name as $item)
  @if(!$item->registers->isEmpty())
  @foreach($item->registers as $register)
  <tr>
    <td nowrap>{{ $item->catalog_number }}</td>
    <td nowrap>{{ $item->catalog_name }}</td>
    <td nowrap>{{ $item->catalog_code }}</td>
    <td nowrap>{{ $item->catalog_author }}</td>
    <td nowrap>{{ $item->catalog_publishername }}</td>
    <td nowrap>{{ $item->catalog_publication }}</td>
    <td nowrap>{{ $register->catalog_id }}</td>

<!-- バリデーション追記 -->
<td nowrap><form class="" action="document_change" method="post">
  @csrf
  <input type="hidden" name="catalog_id" value="{{$register->catalog_id}}">
  <input type="hidden" name="catalog_number" value="{{$register->catalog_number}}">
  <input type="hidden" name="catalog_name" value="{{$item->catalog_name}}">
  <input type="hidden" name="catalog_remark" value="{{$register->catalog_remark}}">
  <input type="hidden" name="disposal_date" value="{{$register->disposal_date}}">
  <input type="submit" class="next_button" value="変更">
</form></td>
    <td><a href="./document_change">削除</td>
  </tr>
  @endforeach
  @endif
  @endforeach
</table>

{{--戻るボタン--}}
  <button type="button" name="return_button" onclick="location.href='./document_search'">戻る</button>
@endsection
