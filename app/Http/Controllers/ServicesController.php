<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function checkType(Request $request)
    {
        switch($request->services)
        {
            case 'passport':
                return view('Admin.users.Passport');

            case 'visa':
                return view('Admin.users.visa');
            case 'legalization&Authentication':
                return view('Admin.users.legel');
            case 'ScheduleAppointement':
                return view('Admin.users.shrdule');
            case 'ethiopian':
                return view('Admin.users.ethiopian');        }
    }
}
