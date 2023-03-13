<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
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
    public function index( ) //$data
    {
        return view('pages.home');

        // $v=User::where('type','=',1);
        // if($v)
        //     return view('espace.company');
        // return view('espace.user');
    }
}
