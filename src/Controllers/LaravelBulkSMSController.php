<?php

namespace TechnoHiveKenya\LaravelBulkSMS\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use TechnoHiveKenya\LaravelBulkSMS\Services\BulkSMS;

class LaravelBulkSMSController extends Controller
{

    public function __construct()
    {
    }
    public function dashboard(){
        return view('laravel-bulk-sms::dashboard');

    }
    public  function sms(){

        return view('laravel-bulk-sms::sendsms');
    }
    public  function sendSMS(){
        BulkSMS::sendSMS("+254713727937","Hey Mr dered");


    }
    public  function add($num,$num1){
        return $num + $num1;
    }

}
