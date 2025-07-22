<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
	public function index()
	{
		$kq = DB::table('categories')
			->select('id', 'name', 'slug', 'description', 'created_at', 'updated_at')
			->get();

		// Gửi dữ liệu sang view
		return view('categories.index', compact('kq'));
	}
}
