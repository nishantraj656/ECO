<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Schedule;
use Auth;
use Illuminate\Support\Facades\Redirect;

class SheduleController extends Controller
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
        return view('Admin.users.shrdule');
    }


    public function create(Request $request)
    {
        $shedule = new Schedule();
        try{
            
            $name = array('fname'=> $request->fname,
                            'lname'=> $request->lname);
            
            $shedule->name = json_encode($name);
            $shedule->DeparturefromUSA = $request->DFU;
            $shedule->email = $request->email;
            $shedule->address = json_encode(array('0'=>$request->email));
            $shedule->comment = "No Comment";
            $shedule->time = $request->time;
            
            $shedule->phonenumber = $request->phone;
            $shedule->typeofService = $request->TOS;
            $shedule->userID = Auth::User()->id;
            $shedule->status = "Open";
            $shedule->save();

            return Redirect::to('\home');
        }
        catch(Exception $e){
            
            return Redirect::to('\home');
        }
    }
}
