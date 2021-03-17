<?php

namespace App\Http\Controllers;

use App\Models\Result;
use App\Models\User;
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
        $user = new User();
        $user_id = 1;
        $user->fill($request->all());
        $result = new Result();
        $result->fill($request->all());

        DB::transaction(function () use ($user) {
            $user->saveOrFail();
        });

        $user_id = DB::table('users')
            ->where('email', '=', $user->email)
            ->first()
            ->id;
        $result->user_id = $user_id;

        DB::transaction(function () use ($result) {
            $result->saveOrFail();
        });
        
        return redirect(route('ranking'));
    }
}
