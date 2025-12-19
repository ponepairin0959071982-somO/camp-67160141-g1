<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    //
    private $myvalue ;
    protected $myvalue2 ;
    public $myval = "";
    // Constructor
    // MyController()
    function __construct(){

    }

    function index(){
        return view('myview.index');
    }

    function info(Request $req){
        return view('myview.info');
    }

    function calculate(Request $req){
        echo $req->input('mynumber');
        $data['num'] = $reg->input('mynumber');
        return view('myview.calculate', $data);
    }

}
