<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Trip;
class PageController extends Controller
{
    //
    public function index() {
        return view('home');
    }
    public function viaggi() {
        $trips = Trip::all();
        //dd($trips);
        return view('viaggi.index', compact('trips'));
    }
}
