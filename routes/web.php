<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Client\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Client\BlogController;
use App\Http\Controllers\lab\Lab2;
use App\Http\Controllers\lab\TinController;
use Illuminate\Support\Facades\DB;

// Route::get('demo1', [HomeController::class, 'index'])->name('test-demo1');
Route::get('/Home', [HomeController::class, 'test']);

Route::get('/blog', [BlogController::class, 'index']);
Route::get('/Dashboard', [DashboardController::class, 'index']);

Route::get('db1', function () {
	$query = DB::table('categories')->select('id', 'name', 'slug', 'description', 'created_at', 'updated_at');
	$kq = $query->get(); // first chỉ lấy 1 dòng dữ liệu đầu tiên
	foreach ($kq as $item) {
		echo "<p>{$item->id}</p>";
		echo "<p>{$item->name}</p>";
		echo "<p>{$item->slug}</p>";
		echo "<p>{$item->description}</p>";
	}
	// print_r($kq);
	// echo "<h4> {$kq->name}</h4>";
	// var_dump($kq);
	// dump($kq);
	// dd($kq);
});

Route::get('db3', function () {
	$kq = DB::table('categories')->pluck('name', 'id');
	echo "<select>";
	foreach ($kq as $key => $option) {
		echo "<option value='{$key}'>{$option}</option>";
	}
	echo "</select>";
});

Route::get('db4', function () {
	$query = DB::table('categories')->select('name', 'id');

	$kq = $query->get();
	foreach ($kq as $item) {
		echo "<p>{$item->id} - {$item->name}</p>";
	}
});

Route::get('db5', function () {
	$kq = DB::table('categories')
		->select('id', 'name')
		->where('status', 1)
		->get();

	echo "<select>";
	foreach ($kq as $option) {
		echo "<option value='{$option->id}'>{$option->name}</option>";
	}
	echo "</select>";
});


Route::get('db2', [CategoryController::class, 'index']);


Route::get('db8', function () {
	$query = DB::table('products')
		->join('categories', 'categories.id', '=', 'products.category_id')
		->select(
			'name',
			'title',
			'products.id as product_id',
			'categories.id as category_id'

		);
	$kq = $query->get();
	foreach ($kq as $item) {
		echo "<p>{$item->name} - {$item->title} - {$item->product_id} - {$item->category_id}</p>";
	}
});


Route::get('db9/{name}', function ($name) {
	$query = DB::table('categories')
		->where('name', $name)
		->exists();
	if ($query) {
		echo "Tồn tại";
	} else {
		echo "không tồn tại";
	}
});


Route::get('db10', function () {

	$title = 'Danh mục vừa thêm lúc ' . date('d/m/Y H:i:s');
	DB::table('categories')->insert([
		'name' => $title,
		'slug' => Str::slug($title),
		'description' => 'Chuyên đồ nữ',
		'status' => 1,
		'created_at' => now(),
		'updated_at' => now(),
	]);
	echo "Đã chèn dữ liệu vào bảng categories!";
});

// lab2
// Route::get('/xemnhieu', function () {
// 	$tin = DB::table('tin')->orderBy('SoLanXem', 'desc')->limit(10)->get();

// 	$html = "<h1>Top 10 Tin Xem Nhiều</h1><ul>";
// 	foreach ($tin as $t) {
// 		$html .= "<li>{$t->TieuDe} ({$t->SoLanXem} lượt xem)</li>";
// 	}
// 	$html .= "</ul>";

// 	return $html;
// });

// Route::get('/tinmoi', function () {
// 	$tin = DB::table('tin')->orderBy('created_at', 'desc')->limit(10)->get();

// 	$html = "<h1>10 Tin Mới Nhất</h1><ul>";
// 	foreach ($tin as $t) {
// 		$html .= "<li>{$t->TieuDe} ({$t->created_at})</li>";
// 	}
// 	$html .= "</ul>";

// 	return $html;
// });

// Route::get('/tintrongloai/{id}', function ($id) {
// 	$loaitin = DB::table('loaitin')->where('id', $id)->first();
// 	$tin = DB::table('tin')->where('idLoaiTin', $id)->get();

// 	$html = "<h1>Tin trong loại: {$loaitin->Ten}</h1><ul>";
// 	foreach ($tin as $t) {
// 		$html .= "<li><a href='/tin/{$t->id}'>{$t->TieuDe}</a></li>";
// 	}
// 	$html .= "</ul>";

// 	return $html;
// });

// Route::get('/tin/{id}', function ($id) {
// 	$tin = DB::table('tin')->where('id', $id)->first();

// 	$html = "<h1>{$tin->TieuDe}</h1>";
// 	$html .= "<p><strong>Lượt xem:</strong> {$tin->SoLanXem}</p>";
// 	$html .= "<p><strong>Ngày đăng:</strong> {$tin->created_at}</p>";
// 	$html .= "<p><em>{$tin->TomTat}</em></p>";
// 	$html .= "<hr>";
// 	$html .= "<div>{$tin->NoiDung}</div>";

// 	return $html;
// });


Route::get('/xemnhieu', [Lab2::class, 'xemNhieu']);
Route::get('/tinmoi', [Lab2::class, 'tinMoi']);
Route::get('/chuyen-muc/{id}', [Lab2::class, 'tinTheoChuyenMuc']);
Route::get('/chi-tiet-tin/{id}', [Lab2::class, 'chiTietTin']);
//

Route::get('demo', function () {
	return view('welcome');
});


Route::get('/', [TinController::class, 'index']);
Route::get('/chi-tiet-san-pham/{id}', [TinController::class, 'chitiet']);
Route::get('/tin-trong-loai/{id}', [TinController::class, 'tintrongloai']);