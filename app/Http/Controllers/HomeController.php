<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use App\Models\Order;
use App\Models\Tour;
use App\Models\SingerBand;
use App\Models\Transaction;
use Illuminate\Http\Request;

class HomeController extends FrontendController
{
	public function __construct()
	{
		parent::__construct();
	}
	
	public function index()
	{
	    // san pham noi bat
		$tourHot = Tour::with('category:id,c_name')
            ->with('singerBand:id,name')
        ->where([
		   't_hot' => Tour::HOT_SUCCESS,
		   't_status' => Tour::STATUS_PUBLIC
		])->limit(8)->get();


		// san pham moi
        $tourNews = Tour::with('category:id,c_name')
            ->with('singerBand:id,name')
            ->where([
                't_status' => tour::STATUS_PUBLIC
            ])->limit(6)
            ->orderByDesc('id')
            ->get();

        // Bài viêt mới
		$articles = Article::orderByDesc('id')
			->limit(3)
			->get();

		$viewData = [
			'tourHot'     => $tourHot,
            'tourNews'    => $tourNews,
			'articles'    => $articles
		];
		
        return view('home.index',$viewData);

    }
    
    public function rendertourView(Request $request)
	{
		if ($request->ajax())
		{
			$listID = $request->id;
			$tours = tour::whereIn('id',$listID)->get();
			$html = view('components.tour_view',compact('tours'))->render();
			
			return response()->json(['data' => $html]);
		}
	}
}
