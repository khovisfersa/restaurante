<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class restAdminController extends Controller
{
    //

    /*public function __construct()
    {
        $this->middleware('auth');
    }*/

    public function display() {

		return view('restaurante'); 
    }

    public function addPrato () {

    	
    }
}
