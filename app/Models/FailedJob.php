<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FailedJob extends Model
{
	protected $table = 'failed_jobs';

	protected $fillable = [
		'uuid',
		'connection',
		'queue',
		'payload',
		'exception',
		'failed_at',
	];

	public $timestamps = false;

	protected $casts = [
		'failed_at' => 'datetime',
	];
}
