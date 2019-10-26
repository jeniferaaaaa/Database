<?php

namespace App\Http\Controllers\Arbi\pass;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class EditController extends Controller
{
    /**
     * 画面表示
     * 
     */
    public function __invoke () 
    {
        return view ('arbi.pass.edit');
    }
}
