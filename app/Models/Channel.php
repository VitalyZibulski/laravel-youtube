<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Channel extends Model
{
    protected $fillable = [
    	'name',
		'slug',
		'description',
		'image_filename',
	];

    public function user()
	{

    	$this->belongsTo(User::class);
	}
}
