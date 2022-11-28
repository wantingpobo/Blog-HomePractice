<?php

namespace App\Http\Controllers;

class Usercontroller extends Controller
{
    // public function show()
    // {
    //     return view('picshow');
    // }

    public function inc()
    {$text = 'test1126';
        return view('picshow', compact('text'));
    }

}
