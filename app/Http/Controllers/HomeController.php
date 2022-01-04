<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Stat;
use App\Models\Recap;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $user = Auth::user()->name;
        $stats = Stat::where('id', '1')->get();
        $recaps = Recap::where('id', '5')->get();
        $orders = Order::all();

        return view('home', [
            'user' => $user,
            'stats' => $stats,
            'recaps' => $recaps,
            'orders' => $orders,
        ]);
    }
}
