<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function about() {
        $param = [
            'one'=>1,
            'two'=>'twice',
            'three'=>true
        ];
        return view('about', ['param'=>$param]);
    }
}
