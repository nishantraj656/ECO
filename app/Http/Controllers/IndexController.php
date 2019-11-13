<?php

namespace App\Http\Controllers;

use App\Ethiopian;
use App\Legalization;
use App\Visa;
use App\Passport;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    //
    public function index()
    {
        return view('index');
    }

    public function currentApplicationList(Request $request)
    {
        $passport = Passport::all();
        $visa = Visa::all();
        $legalization = Legalization::all();
        $ethip = Ethiopian::all();
    }
}
