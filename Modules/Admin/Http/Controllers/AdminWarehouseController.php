<?php

namespace Modules\Admin\Http\Controllers;

use App\Models\Category;
use App\Models\tour;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

class AdminWarehouseController extends Controller
{
    public function getWarehousetour(Request $request)
	{
		$tours = tour::with('category:id,c_name');
		
		if ($request->type && $request->type == 'pay')
		{
			$column = 'pro_pay';
			$tours->where('pro_pay','>',0);
		}else
		{
			$column = 'pro_number';
			$tours->where('pro_number','<=',5);
		}
		
		if ($request->name)  $tours->where('pro_name','like','%'.$request->name.'%');
		if ($request->cate)  $tours->where('pro_category_id',$request->cate) ;
		
		
		$tours = $tours->orderByDesc($column)->paginate(10);
		
		$categories = $this->getCategories();
		
		$viewData = [
			'tours'   => $tours,
			'categories' => $categories
		];
		
		return view('admin::warehouse.index',$viewData);
	}
	
	public function getCategories()
	{
		return Category::all();
	}
}
