<?php

namespace App\Http\Controllers\Arbi\post;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Model\Data;

class DeleteController extends Controller
{
    public function __invoke (Request $request)
    {
        $data_id = $request->pull('data_id');
        $dataDetail = Data::findOrFail($data_id);
        $dataDetail->delete();

        return redirect('/post/list');
    }
}
