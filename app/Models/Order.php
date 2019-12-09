<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';
    protected $guarded = ['*'];
    
    public function tour()
	{
		return $this->belongsTo(tour::class,'or_tour_id');
	}
}
