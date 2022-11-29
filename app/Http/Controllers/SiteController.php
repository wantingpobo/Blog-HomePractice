<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function test(Request $request)
    {
        //取得用戶所有資料
        dd($request->all());

        //確認欄位是否有填寫>顯示ture或false
        // dd($request->filled('title'));

        //直接用欄位來取值
        //dd($request->x);

        //取得除了age以外的資料
        //dd($request->except('age'));

        //只取某些值,可用陣列擺多值
        //dd($request->only(['x','y']));

        // -----------------------------------

        //第一種:把值傳入視圖的$name和$age變數
        //return view('example.1120demo')->with(['name' => 'tom', 'age' => '18']);

        //第二種:準備陣列和值
        // $date=[];
        // $date['name'] = 'tom';
        // $date['age'] = '18';
        // return view('example.1120demo',$date);

        //第三種:第二種的變形 > 直接把值放進去
        $name = 'tom';
        $age = '18';
        return view('example.1120demo', compact('name', 'age'));

    }

}