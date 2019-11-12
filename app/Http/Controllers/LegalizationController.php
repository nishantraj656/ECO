<?php

namespace App\Http\Controllers;

use App\Legalization;
use Illuminate\Http\Request;

class LegalizationController extends Controller
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
    public function create(LegelRequest $request)
    {
        $legel = new Legalization();
        try{
            
            $name = array('fname'=> $request->fname,
                            'mname'=> $request->mname,
                            'lname'=> $request->lname);
            
            $legel->name = json_encode($name);
            $legel->gender = $request->sex;
            $legel->dob = $request->dob;
            $legel->placeOfBirth = $request->bplace;
            $legel->nasality = $request->nationality;
            $legel->passportnumber = $request->passport;
            $legel->email = $request->email;
            $legel->marital = $request->mststus;
            $legel->userID = Auth::User()->id;

            $address = array('base'=>$request->address,
                             'city'=> $request->City,
                              'state' => $request->State,
                              'country'=>$request->Country
                            );
            
            $legel->address = json_encode($address);
            $legel->document = "";
            $legel->paymentID = 0;
            $legel->status = "Open";

            $legel->save();
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
     * @param  \App\Legalization  $legalization
     * @return \Illuminate\Http\Response
     */
    public function show(Legalization $legalization)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Legalization  $legalization
     * @return \Illuminate\Http\Response
     */
    public function edit(Legalization $legalization)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Legalization  $legalization
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Legalization $legalization)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Legalization  $legalization
     * @return \Illuminate\Http\Response
     */
    public function destroy(Legalization $legalization)
    {
        //
    }
}
