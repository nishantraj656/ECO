<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class passport extends Model
{
    protected $table = "passports";
    public $fillable=['id',
     'name',
     'gender',
     'dob',
     'height',
     'eyeColor',
     'hireColor',
     'occupation',
     'previousPassport',
     'placeOfIssue',
     'marital',
     'address',
     'pic',
     'purpose',
     'userID',
     'paymentID',
     'status',
     'created_at',
     'updated_at'];
}
