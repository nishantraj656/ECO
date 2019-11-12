<?php

namespace App\Http\Controllers;
use App\Visa;
use Illuminate\Http\Request;

class VisaController extends Controller
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
        return view('admin.users.visa');
    }

    public function create(VisaRequest $request){
        
        $visa = new Visa();
        try{
            
            $name = array('fname'=> $request->fname,
                            'mname'=> $request->mname,
                            'lname'=> $request->lname);
            
            $visa->name = json_encode($name);
            $visa->gender = $request->sex;
            $visa->dob = $request->dob;
            $visa->nasality = $request->nationality;
            $visa->phone = $request->phone;
            $visa->email = $request->email;
            $visa->marital = $request->mststus;
            $visa->departure = $request->DFU;
            $visa->arrivalInEthiopia = $request->AIE;
            $visa->stayInEthiopia = $request->DSE;
            $visa->passport = $request->passportnumber;
            $visa->userID = Auth::User()->id;
            $visa->purpose = $request->pot;

            $address = array('base'=>$request->address,
                             'city'=> $request->City,
                              'state' => $request->State,
                              'country'=>$request->Country
                            );
            
            $visa->address = json_encode($address);
            $visa->paymentID = 0;
            $visa->status = "Open";

            $visa->save();
        }
        catch(Exception $e){

        }
    }
}
