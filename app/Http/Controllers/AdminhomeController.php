<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminhomeController extends Controller
{
    //
    public function payment()
    {
        return view('Admin.users.Payment');
    }
}
