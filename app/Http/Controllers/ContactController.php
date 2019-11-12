<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use APP\contact;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
class ContactController extends Controller
{
    // echo
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $data = DB::select('select * from contect_us');
        return view('contact',['data'=>$data]);
        //$arr['Listall_mailboxs']= Contact::all();
        // return view ('admin.users.contact')->with($arr);
        // return contact.blade.php
        //return view('contact_index');
    }
}

