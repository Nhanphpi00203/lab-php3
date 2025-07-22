<?php

namespace App\Http\Controllers\lab;

use App\Http\Controllers\Controller; // thêm dòng này
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TinController extends Controller
{
	public function index()
	{
		$data = DB::table('categories')->get();
		return view('Client.Home.index', [
			'categories' => $data
		]);
	}
	public function chitiet($idProduct)
	{
		$data = DB::table('products')
			->where('id', $idProduct)
			->first();
		return view('Client.Home.chitiet', [
			'product' => $data
		]);
	}
	public function tintrongloai($idLT = 0)
	{
		$data = DB::table('products')
			->where('category_id', $idLT)
			->get();

		return view('Client.Home.tintrongloai', ['products' => $data]);
	}
}