<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    /**
     * Instantiate a new controller instance.
     *
     * @return void
     */
    public function index()
    {
        return view('welcome');
    }
    public function mahasiswa()
    {
        return view('mahasiswa.index');
    }
}
