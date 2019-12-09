<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
	public function user()
	{
		return $this->belongsTo(User::class,'ra_user_id');
	}
	
	public function tour()
	{
		return $this->belongsTo(tour::class,'ra_tour_id');
	}
	
}
