<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\tour;
use App\Models\tourImage;
use Illuminate\Http\Request;

class tourDetailController extends FrontendController
{
	public function __construct()
	{
		parent::__construct();
	}
	
	public function tourDetail(Request $request)
	{
		$url = $request->segment(2);
		$url = preg_split('/(-)/i',$url);
		
		if ($id = array_pop($url))
		{
		    // Chi tiết sản phẩm
			$tourDetail = tour::with('supplier:id,s_name')
                    ->where('pro_active',tour::STATUS_PUBLIC)
                    ->findOrFail($id);

			// Ảnh sản phẩm
            $images = tourImage::where('pi_tour_id', $id)->get();

			// Danh mục sản phẩm đó
			$catetour = Category::find($tourDetail->pro_category_id);

			// Sản phẩm liên quan
            $tourSuggest = tour::where('pro_active',tour::STATUS_PUBLIC)
                            ->where('pro_category_id', $catetour->id)
                            ->orderByDesc('id')
                            ->limit(8)
                            ->get();

			$viewData = [
                'tourDetail'  => $tourDetail,
                'catetour'    => $catetour,
                'tourSuggest' => $tourSuggest,
                'images'         => $images
			];
			
			return view('tour.detail',$viewData);
		}

		return redirect()->to('/');
	}
}
