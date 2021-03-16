<?php

namespace App\Http\Controllers;

use App\Models\Result;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ResultController extends Controller
{
    public function index()
    {
        return view('post');
    }

    public function submit(Request $request)
    {
        $user = $request->name;
        $point = $request->point;
        $bitten = $request->bitten;
        $store = $request->store;
        $result = new Result();
        $result->fill($request->all());
        $result->user_id = 4;
        
        DB::transaction(function () use($result) {
            $result->saveOrFail();
        });
        
        return redirect(route('ranking'));
    }
}
