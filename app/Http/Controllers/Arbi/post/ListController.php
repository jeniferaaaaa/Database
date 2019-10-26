<?php

namespace App\Http\Controllers\Arbi\post;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class ListController extends Controller
{
    public function __invoke ()
    {
        $categoryData = Auth::user()->category;
        var_dump($categoryData);
        return view ('arbi.post.list');
    }
}
