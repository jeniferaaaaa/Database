<?php

namespace App\Http\Controllers\Arbi\category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Model\Category;

class DeleteController extends Controller
{
    public function __invoke (Request $request)
    {
        $category_id = $request->input('category_id');
        $categoryData = Category::findOrFail($category_id);
        $categoryData->delete();

        return redirect('/category/list');
    }
}
