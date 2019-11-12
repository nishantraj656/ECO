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
        }
    }
}
