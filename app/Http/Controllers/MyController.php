<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Orangtua;
use App\anak;

class MyController extends Controller
{
    //
    public function index()
    {
    	$a= "Sherina ";
    	return "Nama Saya Adalah <b>$a";
    }

    public function tampilan()
    {
    	return view('about');
    }

    public function tampilmodel()
    {
    	$ortu = Orangtua::all();
    	$anak = anak::all();
    	return view('about', compact('ortu','anak'));
    }
}
