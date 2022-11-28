<?php

namespace App\Http\Controllers;

class SiteController extends Controller
{
    public function test()
    {
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