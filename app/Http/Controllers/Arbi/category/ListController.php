<?php

namespace App\Http\Controllers\Arbi\category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class ListController extends Controller
{
    public function index ()
    {
        $categoryData = Auth::user()->category;
        var_dump($categoryData);
        return view ('arbi.category.list');
    }
}
