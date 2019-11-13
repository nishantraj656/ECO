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
                break;

            case 'Passport':
                $Data = passport::find($id);
                break;

            case 'ethiopian':
                $Data = Ethiopian::find($id);
                break;

            case 'Auth&legel':
                $Data = Legalization::find($id);
                break;
            case 'Shedule':
                $Data = Schedule::find($id);
                break;
        }

        //print_r($Data);

        return view('Admin.view',["data"=>$Data,"type"=>$request->type]);
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
