<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subscribe;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use App\Item;

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
        $data = [];
        if (Auth::check()) {
            $user_id = Auth::id();
            $subs = Subscribe::where('user_id', $user_id)->pluck('category_id');
            $data = Item::whereIn('category_id', $subs)->paginate(10);
        }

        return view('home', ['news' => $data]);
    }
}
