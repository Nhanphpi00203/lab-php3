<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
	use HasFactory;

	protected $fillable = [
		'user_id',
		'total_amount',
		'status',
		'note',
		'shipping_address',
		'payment_method',
		'paid_at',
	];

	// Giá trị mặc định
	protected $attributes = [
		'status' => 'pending', // mặc định là chờ xử lý
		'note' => '',
		'shipping_address' => '',
		'payment_method' => 'cod', // mặc định là thanh toán khi nhận hàng
	];

	// Các trường dạng thời gian
	protected $dates = [
		'created_at',
		'updated_at',
		'paid_at',
	];

	// Ép kiểu dữ liệu
	protected $casts = [
		'total_amount' => 'float',
		'paid_at' => 'datetime',
	];
}
