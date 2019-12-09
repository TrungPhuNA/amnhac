<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\tour;
use App\Models\Supplier;
use Illuminate\Http\Request;

class SearchController extends FrontendController
{
    public function index(Request $request)
    {
        // Lấy danh mục
        $catetour = [];
        if ($id = $request->cate) {
            $catetour = Category::findOrFail($id);
            $categoryChildren = Category::where('c_parent_id', $id)->get();
        }

        // lấy danh mục con nếu có

        // Danh sách nhà cung cấp
        $suppliers = Supplier::select('id','s_name')->orderByDesc('id')->get();


        // Lấy sản phẩm
        $tours = tour::where("pro_active", tour::STATUS_PUBLIC);
        $tours->where('pro_category_id', $id);

        if ($request->k) {
            $tours->where('pro_name', 'like', '%' . $request->k . '%');
        }

        if ($request->price) {
            $price = $request->price;
            switch ($price) {
                case '1':
                    $tours->where('pro_price', '<', 1000000);
                    break;

                case '2':
                    $tours->whereBetween('pro_price', [1000000, 3000000]);
                    break;

                case '3':
                    $tours->whereBetween('pro_price', [3000000, 5000000]);
                    break;

                case '4':
                    $tours->whereBetween('pro_price', [5000000, 7000000]);
                    break;

                case '5':
                    $tours->whereBetween('pro_price', [7000000, 10000000]);
                    break;

                case '6':
                    $tours->where('pro_price', '>', 10000000);
                    break;
            }
        }

        if ($request->orderby) {
            $orderby = $request->orderby;

            switch ($orderby) {
                case 'desc':
                    $tours->orderBy('id', 'DESC');
                    break;

                case 'asc':
                    $tours->orderBy('id', 'ASC');
                    break;

                case 'price_max':
                    $tours->orderBy('pro_price', 'ASC');
                    break;

                case 'price_min':
                    $tours->orderBy('pro_price', 'DESC');
                    break;
                default:
                    $tours->orderBy('id', 'DESC');

            }
        }

        $tours = $tours->paginate(3);

        $viewData = [
            'tours'         => $tours,
            'catetour'      => $catetour,
            'categoryChildren' => $categoryChildren ?? null,
            'query'            => $request->query(),
            'suppliers'        => $suppliers,
            'tourHot'       => $tourHot ?? null
        ];

        return view('tour.index', $viewData);
    }
}
