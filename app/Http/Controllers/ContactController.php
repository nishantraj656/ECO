<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use APP\contact;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Contect_Us;
use Illuminate\Support\Facades\Redirect;
class ContactController extends Controller
{
    // echo
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {

        return view('Admin.users.contect_us');
        //$arr['Listall_mailboxs']= Contact::all();
        // return view ('Admin.users.contact')->with($arr);
        // return contact.blade.php
        //return view('contact_index');
    }

    public function create(Request $request){
        $data  = new Contect_Us();

        try{
            $data->name = $request->name;
            $data->email = $request->email;
            $data->message = $request->msg;
            $data->subject = $request->subject;
            
            $data->save();

            return Redirect::to('/services');
        }
        catch(Exception $e)
        {
            return Redirect::to('/services');
        }
    }
}

