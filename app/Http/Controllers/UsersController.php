<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{
    //
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    public function index()
    {
        $arr['listall_users']= User::all();
        return view ('admin.users.index')->with($arr);
    }
}
