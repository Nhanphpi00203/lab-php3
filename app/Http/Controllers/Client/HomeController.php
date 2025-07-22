<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
	public function test()
	{
		// $tieu_de_website = "Học Lập trình php3";
		// $h = gmdate('d/m/y) H:i:s', time() + 7 * 3600);
		// $array = [
		// 	"key" => "value",
		// 	"key2" => "value2",
		// ];
		// return view('welcome', compact('tieu_de_website', 'h', 'array'));
		return view('Client.layout.master');
	}
	public function index()
	{
		$tieu_de_website = "Học Lập trình php3";
		$h = gmdate('d/m/y) H:i:s', time() + 7 * 3600);
		$array = [
			"key" => "value",
			"key2" => "value2",
		];
		return view('welcome', compact('tieu_de_website', 'h', 'array'));
	}
}