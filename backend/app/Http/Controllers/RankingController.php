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
            ->limit(30)
            ->get()
        ;
        $today = date('Y/m/d');
        $rankings_today = Result::
            whereDate('created_at', $today)
            ->orderBy('point', 'desc')
            ->limit(30)
            ->get()
        ;

        return view('ranking', [
            'rankings_all' => $rankings_all,
            'rankings_today' => $rankings_today,
        ]);
    }
}
