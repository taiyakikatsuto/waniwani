<?php

namespace App\Http\Controllers;

use App\Models\Result;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ResultController extends Controller
{
    public function index()
    {
        return view('post');
    }

    public function submit(Request $request)
    {
        if (Auth::user() === null) {
            $user = new User();
            $user->fill($request->all());
            $user->password = Hash::make($request->password);    

            DB::transaction(function () use ($user) {
                $user->saveOrFail();
            });

            $user_id = DB::table('users')
                ->where('email', '=', $user->email)
                ->first()
                ->id;
            $route = redirect()->route('login_backend')->with('request', $request->all());
        } else {
            $user_id = Auth::id();
            $route = redirect()->route('ranking');
        }

        $result = new Result();
        $result->fill($request->all());
        $result->user_id = $user_id;
        DB::transaction(function () use ($result) {
            $result->saveOrFail();
        });
        
        return $route;
    }
}
