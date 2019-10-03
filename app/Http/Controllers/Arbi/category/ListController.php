<?php

namespace App\Http\ControllersArbi\category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class ListController extends Controller
{
    public function index ()
    {
        return view ('arbi.category.list');
    }
}
