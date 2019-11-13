<?php

namespace App\Http\Controllers;

use App\payment;
use App\Ethiopian;
use App\passport;
use App\Legalization;
use App\Visa;
use App\Schedule;
use Auth;
use Illuminate\Http\Request;

class PaymentController extends Controller
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
    public function create(Request $request)
    {
        $payment = new payment();
        try{
            
            $payment->cardNumber = $request->card_number;
            $payment->appNo = $request->App_num;
            $payment->expDate = $request->exp_date;
            $payment->code = $request->scode;
            $payment->name = $request->chname;

            $payment->status = "Done";

            $payment->save();
        }
        catch(Exception $e){
        
        }

        $id = payment::max('id');
        switch ($request->TOS) {
            case 'Visa':
                $Data = Visa::find(Auth::User()->id);
                $Data->paymentID = $id;
                $Data->save();
                break;

            case 'Passport':
                $Data = passport::find(Auth::User()->id);
                $Data->paymentID = $id;
                $Data->save();
                break;

            case 'EOI':
                $Data = Ethiopian::find(Auth::User()->id);
                $Data->paymentID = $id;
                $Data->save();
                break;

            case 'Auth&legel':
                $Data = Legalization::find(Auth::User()->id);
                $Data->paymentID = $id;
                $Data->save();
                break;
        }

        return Redirect::to('/home');

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
     * @param  \App\payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function show(payment $payment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function edit(payment $payment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, payment $payment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function destroy(payment $payment)
    {
        //
    }
}
