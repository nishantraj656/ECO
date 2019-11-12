<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Schedule;

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
        return view('admin.users.shrdule');
    }


    public function create(SheduleRequest $request)
    {
        $shedule = new Schedule();
        try{
            
            $name = array('fname'=> $request->fname,
                            'lname'=> $request->lname);
            
            $shedule->name = json_encode($name);
            $shedule->DeparturefromUSA = $request->DFU;
            $shedule->email = $request->email;
            $shedule->phonenumber = $request->phone;
            $shedule->typeofService = $request->TOS;
            $shedule->status = "Open";
            $shedule->save();
        }
        catch(Exception $e){

        }
    }
}
