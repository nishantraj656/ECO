<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PassportController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin.users.Passport');
    }

    /**This function is use to create new passport form*/

    public function create()
    {
        
    }
}
