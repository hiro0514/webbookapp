<?php

namespace App\Http\Controllers;

use App\Catalog;
use App\Register;
use Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RegisterCatalogController extends Controller

{
  //資料検索機能
  public function search_document(){
    return view('document_search');
  }

  public function find_document(Request $request){

  ////catalogsテーブルから検索する
  ///キーワード検索機能
  $catalog=Catalog::where("catalog_name",'LIKE',"%".$request->catalog_name."%")->get();
  return view('document_search_result',['catalog_name'=>$catalog,'search_count'=>count($catalog)]);
  }

  //資料変更機能
  public function edit_document(Request $request){
    $change=$request->all();
    $request->session()->put($change);
    return view('document_change',['document_data',$change]);
  }

  // //資料変更確認機能
  public function edit_document_check(Request $request){
  //   ここにバリデーションを追記
    $this->validate($request,Catalog::$document_change_rules,Catalog::$document_change_messages);
    //資料ID、資料名、廃棄年月日、備考のバリデーション追記
    $param = ['catalog_id'=>$request->catalog_id,'catalog_name'=>$request->catalog_name,'disposal_date'=>$request->disposal_date,'catalog_remark'=>$request->catalog_remark,];
    $data = DB::table('registers')->where('catalog_id', $request->catalog_id)->update($param);
    return view('document_change_complete');

    return view('document_change_confirming',['register_data'=>$request]);
  }
 ///栗山先生追記部分
  public function document_change(Request $request){
    return view('document_change',['register_data'=>$request]);
  }

  public function document_change_complete(Request $request){
    Catalog::where('catalog_number',$request->catalog_number)->update(['catalog_name'=>$request->catalog_name]);
    Register::where('catalog_id',$request->catalog_id)->update(['catalog_id'=>$request->catalog_id,'disposal_date'=>$request->disposal_date,'catalog_remark'=>$request->catalog_remark]);
    return view('document_change_complete');
  }

}
