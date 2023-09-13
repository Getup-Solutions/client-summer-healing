<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookedeventController extends Controller
{
    public function index(){
        return view('frontend.pages.booked-events');
    }
}
