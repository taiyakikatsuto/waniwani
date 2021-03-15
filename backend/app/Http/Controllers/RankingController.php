<?php

namespace App\Http\Controllers;

use App\Models\Result;
use Illuminate\Http\Request;

class RankingController extends Controller
{
    public function index()
    {
        $rankings_all = Result::
            with('user')
            ->orderBy('point', 'desc')
            ->get()
        ;

        $rankings_today = Result::
            whereDay('created_at', 'dd')
            ->orderBy('point', 'asc')
            ->get()
        ;

        return view('index', [
            'rankings_all' => $rankings_all,
            'rankings_today' => $rankings_today,
        ]);
    }
}
