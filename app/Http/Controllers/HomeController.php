<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Ethiopian;
use App\passport;
use App\Legalization;
use App\Visa;
use App\Schedule;
use Auth;

class HomeController extends Controller
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
        $id = Auth::User()->id;

        if( Auth::User()->user_type == "User")
        {
            $ethiopian = Ethiopian::where('status',0)
                                    ->where('UserID',$id);
            $passport = passport::where('status',0)
                                    ->where('UserID',$id);
            $Legalzation = Legalization::where('status',0)
                                    ->where('UserID',$id);
            $Visa = Visa::where('status',0)
                                    ->where('UserID',$id);
            $Schedule = Schedule::where('status',0)
                                    ->where('UserID',$id);
        }
        else{
            $ethiopian = Ethiopian::where('status',0);
            $passport = passport::where('status',0);
            $Legalzation = Legalization::where('status',0);
            $Visa = Visa::where('status',0);
            $Schedule = Schedule::where('status',0);
        }

        $data = array('ethiopian'=>$ethiopian,
                      'passport'=>$passport,
                      'legalization'=>$Legalzation ,
                      'visa'=>$Visa,
                      'shedule'=>$Schedule
                );

        return view('admin.dashboard')->with($data);
    
    }
    
}
