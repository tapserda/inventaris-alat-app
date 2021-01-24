<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alat extends Model
{
    use SoftDeletes;

	protected $fillable = [
		'slug',
		'jumlah_alat',
		'nama_alat',
        'users_id',
	];
}
