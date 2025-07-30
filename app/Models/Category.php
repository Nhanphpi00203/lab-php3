<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
	use HasFactory;

	protected $fillable = [
		'name',
		'slug',
		'status',
		'description',
		'thumbnail',
	];

	// Giá trị mặc định
	protected $attributes = [
		'status' => 1,
		'thumbnail' => '',
		'description' => '',
	];

	// Các trường thời gian
	protected $dates = [
		'created_at',
		'updated_at',
	];

	// Ép kiểu dữ liệu
	protected $casts = [
		'status' => 'boolean',
	];
}
