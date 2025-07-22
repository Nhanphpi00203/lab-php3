<?php

namespace App\Http\Controllers\lab;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Lab3 extends Controller
{
  public function index()
	{
		return view('lab.lab3.index'); 
	}
}
