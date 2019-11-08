<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use APP\data;

class dataController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $arr['datas']= data::all();
        
        return view ('data')->with($arr);
    }
}
