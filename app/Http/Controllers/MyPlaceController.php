<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyPlaceController extends Controller
{
    public function index(){
        return 'this is my page';
    }

    public function state(){
        return ' my state is'.' variable';
    }
}
