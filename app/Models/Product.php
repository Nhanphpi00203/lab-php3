<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
	use HasFactory;

	protected $fillable = [
		'title',
		'slug',
		'description',
		'price',
		'content',
		'sale_price',
		'thumbnail',
		'status'
	];

	// Giá trị mặc định
	protected $attributes = [
		'status' => 1,
		'sale_price' => 0,
		'thumbnail' => '',
	];

	// Trường ngày tháng (nếu có)
	protected $dates = [
		'created_at',
		'updated_at',
	];

	// Ép kiểu dữ liệu
	protected $casts = [
		'price' => 'float',
		'sale_price' => 'float',
		'status' => 'boolean',
	];
}
