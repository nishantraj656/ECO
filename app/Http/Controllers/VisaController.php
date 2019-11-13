<?php

namespace App\Http\Controllers;
use App\Visa;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

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
        return view('Admin.users.visa');
    }

    public function create(Request $request){
        
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
            $visa->placeOfBirth = "";
            $visa->marital = $request->mststus;
            $visa->departure = $request->DFU;
            $visa->arrivalInEthiopia = $request->AIE;
            $visa->stayInEthiopia = $request->DSE;
            $visa->passportnumber = $request->passport;
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

            return Redirect::to('/home');
        }
        catch(Exception $e){

            return Redirect::to('/home');

        }
    }
}
