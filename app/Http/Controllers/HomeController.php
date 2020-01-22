<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Voiture;
use App\User;
use Auth;

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
        $voitures = Voiture::All();
        return view('home')->with("voitures", $voitures);
    }

    public function attach($voiture){
        $v = Voiture::find($voiture);
        Auth::User()->voitures()->attach($v);
    }
}
