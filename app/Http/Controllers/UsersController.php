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
        // return view ('Admin.users.index')->with($arr);
        return view('Admin.users.index',["data"=>User::all()]);

    } 

    public function update(Request $request)
    {
        $user = User::find($request->id);

        $user->active = 0;
        if($request->active == 0){
            $user->active = 1;
        }
        $user->save();
        // dd($request->active,$request->id);
        // // dd();
        

        return view('Admin.users.index',["data"=>User::all()]);
    }
}
