<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\payment;
use App\Ethiopian;
use App\passport;
use App\Legalization;
use App\Visa;
use App\Schedule;
use Illuminate\Support\Facades\Redirect;

class ViewController extends Controller
{
    public function index(Request $request){

        $id = $request->id;
        $Data = array();
        switch ($request->type) {
            case 'Visa':
                $Data = Visa::find($id);
                $ViewData = array(
                    "Application No  :" => $Data->id,
                    "id" => $Data->id,
                    "Name            :" => $Data->name,
                    "Gender          :" => $Data->gender,
                    "Martial Status  :" => $Data->marital,
                    "Address         :" =>$Data->address,
                    "Passport        :" => $Data->passportnumber,
                    "Purpose         :" => $Data->purpose,
                    "Status          :" => $Data->status,
                    "Payment         :" => ($Data->paymentID) ? "Dome" : "Pending",
                );
                break;

            case 'Passport':
                $Data = passport::find($id);
                $ViewData = array(
                    "Application No  :" => $Data->id,
                    "id" => $Data->id,
                    "Name            :" => $Data->name,
                    "Gender          :" => $Data->gender,
                    "Martial Status  :" => $Data->marital,
                    "Address         :" =>$Data->address,
                    "Passport        :" => $Data->previousPassport,
                    "Purpose         :" => $Data->purpose,
                    "Status          :" => $Data->status,
                    "Payment         :" => ($Data->paymentID) ? "Dome" : "Pending",
                );
                break;

            case 'ethiopian':
                $Data = Ethiopian::find($id);
                $ViewData = array(
                    "Application No  :" => $Data->id,
                    "id" => $Data->id,
                    "Name            :" => $Data->name,
                    "Gender          :" => $Data->gender,
                    "Martial Status  :" => $Data->marital,
                    "Address         :" =>$Data->address,
                    "Passport        :" => $Data->passportnumber,
                    "Nationality     :" => $Data->nasality,
                    "Status          :" => $Data->status,
                    "Payment         :" => ($Data->paymentID) ? "Dome" : "Pending",
                );
                break;

            case 'Auth&legel':
                $Data = Legalization::find($id);
                $ViewData = array(
                    "Application No :" => $Data->id,
                    "id" => $Data->id,
                    "Name           :" => $Data->name,
                    "Gender         :" => $Data->gender,
                    "Date Of Birth  :" => $Data->marital,
                    "Address        :" =>$Data->address,
                    "Passport       :" => $Data->passportnumber,
                    "Nationality    :" => $Data->nasality,
                    "Status         :" => $Data->status,
                    "Payment        :" => ($Data->paymentID) ? "Dome" : "Pending",
                );
                break;
            case 'Shedule':
                $Data = Schedule::find($id);
                $ViewData = array(
                    "Application No     :" => $Data->id,
                    "id" => $Data->id,
                    "Name               :" => $Data->name,
                    "Departure From USA : " => $Data->DeparturefromUSA,
                    "Email ID           :" => $Data->email,
                    "Address            :" =>$Data->address,
                    "Phone Number       :" => $Data->phonenumber,
                    "Nationality        :" => $Data->nasality,
                    "Status             :" => $Data->status,
                    "Dime               :" => $Data->time
                );
                break;
        }
        

        //var_dump($ViewData);
        return view('Admin.view',["data"=>$ViewData,"type"=>$request->type]);
    }

    public function update(Request $request){
        
        $id = $request->id;
        switch ($request->type) {
            case 'Visa':
                $Data = Visa::find($id);

                $Data->status = $request->status;
                $Data->save();
                break;

            case 'Passport':
                $Data = passport::find($id);
                $Data->status = $request->status;
                $Data->save();
                break;

            case 'ethiopian':
                $Data = Ethiopian::find($id);
                $Data->status = $request->status;
                $Data->save();
                break;

            case 'Auth&legel':
                $Data = Legalization::find($id);
                $Data->status = $request->status;
                $Data->save();
                break;
            case 'Shedule':
                $Data = Schedule::find($id);
                $Data->status = $request->status;
                $Data->save();
                break;
        }

        return Redirect::to('/home');
    }
}
