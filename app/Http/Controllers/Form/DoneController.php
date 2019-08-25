<?php

namespace App\Http\Controllers\Form;

use Illuminate\Http\Request;

class DoneController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

}
