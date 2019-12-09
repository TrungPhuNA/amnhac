<?php

namespace App\Http\Controllers;

use App\Models\tour;
use App\Models\Rating;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RatingController extends Controller
{
    public function saveRating(Request $request,$id)
	{
	   	if ($request->ajax())
	   	{
			Rating::insert([
				'ra_tour_id' => $id,
				'ra_number'     => $request->number,
				'ra_content'    => $request->r_content,
				'ra_user_id'    => get_data_user('web'),
				'created_at'    => Carbon::now(),
				'updated_at'    => Carbon::now()
			]);
		 
			$tour = tour::find($id);
			
			$tour->pro_total_number += $request->number;
			$tour->pro_total_rating += 1;
			$tour->save();
			
			return response()->json(['code' => '1']);
	   	}
	}
}
