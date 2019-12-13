<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Tour;
use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TourController extends Controller
{
    public function getDetailTour($url)
    {
        $tourDetail = DB::table('tours')->where('t_slug', $url)->first();
        if (!$tourDetail) abort('404');
        $viewData = [
            'tourDetail' => $tourDetail,
        ];
        return view('tour.detail',$viewData);
    }
}
