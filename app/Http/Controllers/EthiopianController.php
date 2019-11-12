<?php

namespace App\Http\Controllers;

use App\Ethiopian;
use Illuminate\Http\Request;

class EthiopianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(EthiopianIdRequest $request)
    {
        $ethiopim = new Ethiopian();
        try{
            
            $name = array('fname'=> $request->fname,
                            'mname'=> $request->mname,
                            'lname'=> $request->lname);
            
            $ethiopian->name = json_encode($name);
            $ethiopian->gender = $request->sex;
            $ethiopian->dob = $request->dob;
            $ethiopian->placeOfBirth = $request->bplace;
            $ethiopian->nasality = $request->nationality;
            $ethiopian->passportnumber = $request->passport;
            $ethiopian->marital = $request->mststus;
            $ethiopian->userID = Auth::User()->id;

            $address = array('base'=>$request->address,
                             'city'=> $request->City,
                              'state' => $request->State,
                              'country'=>$request->Country
                            );
            
            $ethiopian->address = json_encode($address);
            $ethiopian->pic = "";
            $ethiopian->paymentID = 0;
            $ethiopian->status = "Open";

            $ethiopian->save();
        }
        catch(Exception $e){

        
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Ethiopian  $ethiopian
     * @return \Illuminate\Http\Response
     */
    public function show(Ethiopian $ethiopian)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ethiopian  $ethiopian
     * @return \Illuminate\Http\Response
     */
    public function edit(Ethiopian $ethiopian)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ethiopian  $ethiopian
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ethiopian $ethiopian)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ethiopian  $ethiopian
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ethiopian $ethiopian)
    {
        //
    }
}
