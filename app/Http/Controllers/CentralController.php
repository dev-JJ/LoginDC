<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CentralController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth'); //autenticacion del tipo de usuario
        $this->middleware('solocentral',['only'=>'index']);
    }
  /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
     return view('central');
    }
}
