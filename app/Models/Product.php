<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
	use HasFactory;

	protected $table = 'products';

	protected $fillable = [
		'name',
		'slug',
		'thumbnail',
		'price',
		'sale_price',
		'content',
		'status',
		'category_id',
		'created_at',
		'updated_at'
	];

	protected $attributes = [
		'status' => 1,
		'sale_price' => 0,
		'thumbnail' => '',
	];

	protected $dates = [
		'created_at',
		'updated_at',
	];

	protected $casts = [
		'price' => 'float',
		'sale_price' => 'float',
		'status' => 'boolean',
		'category_id' => 'integer',
	];

	public function category()
	{
		return $this->belongsTo(Category::class);
	}
}
