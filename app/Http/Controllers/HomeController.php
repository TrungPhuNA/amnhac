<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use App\Models\Order;
use App\Models\tour;
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
		return view('home.index');

	    // san pham noi bat
		$tourHot = tour::with('category:id,c_name')
        ->where([
		   'pro_hot' => tour::HOT_ON,
		   'pro_active' => tour::STATUS_PUBLIC
		])->limit(5)->get();


		// san pham moi
        $tourNews = tour::with('category:id,c_name')
            ->where([
                'pro_active' => tour::STATUS_PUBLIC
            ])->limit(12)
            ->orderByDesc('id')
            ->get();

		$articleNews = Article::orderBy('id','DESC')->limit(6)->get();
		
		$categoriesHome = Category::with('tours')
				->where('c_home',Category::HOME)
				->where('c_active',Category::STATUS_PUBLIC)
				->limit(3)
				->get();
		
		$tourSuggest = [];

		$viewData = [
			'tourHot'     => $tourHot,
			'articleNews'    => $articleNews,
			'categoriesHome' => $categoriesHome,
			'tourSuggest' => $tourSuggest,
            'tourNews'    => $tourNews
		];
		
        return view('home.index_2',$viewData);

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
