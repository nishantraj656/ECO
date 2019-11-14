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
            $ethiopian = Ethiopian::where('status','Open')
                                    ->where('UserID',$id)
                                    ->get();
            $passport = passport::where('status','Open')
                                    ->where('UserID',$id)
                                    ->get();
            $Legalzation = Legalization::where('status','Open')
                                    ->where('UserID',$id)
                                    ->get();
            $Visa = Visa::where('status','Open')
                            ->where('UserID',$id)
                            ->get();
            $Schedule = Schedule::where('status','Open')
                                    ->where('UserID',$id)
                                    ->get();
        }
        else{
            $ethiopian = Ethiopian::where('status','Open')->get();
            $passport = passport::where('status','Open')->get();
            $Legalzation = Legalization::where('status','Open')->get();
            $Visa = Visa::where('status','Open')->get();
            $Schedule = Schedule::where('status','Open')->get();
        }

        

        $data = array('ethiopian'=>$ethiopian,
                      'passport'=>$passport,
                      'legalization'=>$Legalzation ,
                      'visa'=>$Visa,
                      'shedule'=>$Schedule
                );

        // echo "Fatched Data";
        // var_dump($ethiopian);

        if( Auth::User()->user_type == "User"){
            return view('Admin.dashboard')->with($data);
        }
        else{
            return view('Admin.users.index')->with($data);
        }
        
    
    }


    public function SetteledApplication(Request $request){


        $ethiopian = Ethiopian::where('status','<>','Open')->get();
        $passport = passport::where('status','<>','Open')->get();
        $Legalzation = Legalization::where('status','<>','Open')->get();
        $Visa = Visa::where('status','<>','Open')->get();
        $Schedule = Schedule::where('status','<>','Open')->get();

        $data = array('ethiopian'=>$ethiopian,
                      'passport'=>$passport,
                      'legalization'=>$Legalzation ,
                      'visa'=>$Visa,
                      'shedule'=>$Schedule
                );

        return view('Admin.SetteledApplication')->with($data);

    }
    
}
