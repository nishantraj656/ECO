<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\passport;
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
        return view('Admin.users.Passport');
    }

    /**This function is use to create new passport form*/

    public function create(PassportRequest $request)
    {
        $passport = new passport();
        try{
            
            $name = array('fname'=> $request->fname,
                            'mname'=> $request->mname,
                            'lname'=> $request->lname);
            
            $passport->name = json_encode($name);
            $passport->gender = $request->sex;
            $passport->dob = $request->dob;
            $passport->height = $request->height;
            $passport->eyeColor = $request->ecolor;
            $passport->hireColor = $request->hcolor;
            $passport->marital = $request->mststus;
            $passport->occupation = $request->occupation;
            $passport->placeOfIssue = $request->poissue;
            $passport->previousPassport = $request->ppn;
            $passport->userID = Auth::User()->id;
            $passport->purpose = $request->POT;

            $address = array('base'=>$request->address,
                             'city'=> $request->City,
                              'state' => $request->State,
                              'country'=>$request->Country
                            );
            
            $passport->address = json_encode($address);
            $passport->pic = "";
            $passport->paymentID = 0;
            $passport->status = "Open";

            $passport->save();
        }
        catch(Exception $e){

        }
    }
}
