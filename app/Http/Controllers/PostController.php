<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use Illuminate\Http\Request;

// use Dotenv\Validator;

class PostController extends Controller
{
    //建構值
    public function __construct()
    {
        //$this指的是目前所在的PostController
        //->呼叫middleware,寫入auth這個中介層

        //一次對這個控制器的所有的方法做控管
        // $this->middleware('auth');

        //只對index做控管
        // $this->middleware('auth')->only('index');

        //除了index,其他都控管
        // $this->middleware('auth')->except('index');

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return "所有文章";

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostRequest $request)
    {
        //驗證用戶提交的資料
        // $Validator = Validator::make($request->all(), [
        //     'title' => 'required | max:10',
        //     'desc' => 'required',

        // ]);

        // if ($Validator->fails()) {
        //     // dd($Validator);
        //     return $Validator;
        // }
        return 'ok';

        // return $request->all();

        //儲存所有資料後返回index
        // return redirect(url('posts/' . 1));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    //route規則寫在api.php裡的
    //Route::resource('posts', 'App\Http\Controllers\PostController');
    public function show($id)
    {
        return "文章 $id";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function doany(Request $request)
    {
        return $request->all();

    }

}
