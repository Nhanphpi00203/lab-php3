<?php

namespace App\Http\Controllers\lab;

use App\Http\Controllers\Controller; // thêm dòng này
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Lab2 extends Controller
{
	public function xemNhieu()
	{
		$tinXemNhieu = DB::table('tin')
			->orderBy('solanxem', 'desc')
			->limit(10)
			->pluck('tieude');

		// return response()->json($tinXemNhieu);
		return view('lab.lab2.xemnhieu', compact('tinXemNhieu'));
	}

	public function tinMoi()
	{
		$tinMoi = DB::table('tin')
			->orderBy('created_at', 'desc')
			->limit(10)
			->pluck('tieude');

		return view('lab.lab2.moi', compact('tinMoi'));
	}

	public function tinTheoChuyenMuc($idChuyenMuc)
	{
		$tinTheoCM = DB::table('tin')
			->where('idLoaiTin', $idChuyenMuc)
			->select('id', 'TieuDe')
			->get();

		return view('lab.lab2.theochuyenmuc', compact('tinTheoCM'));
	}

	public function chiTietTin($idTin)
	{
		$tin = DB::table('tin')->find($idTin);

		if (!$tin) {
			abort(404, 'Tin không tồn tại');
		}

		return view('lab.lab2.chitiet', compact('tin'));
	}
}
