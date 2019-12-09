<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\tour;
use App\Models\Supplier;
use Illuminate\Http\Request;

class CategoryController extends FrontendController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getListtour(Request $request)
    {
        $url = $request->segment(2);
        $url = preg_split('/(-)/i', $url);

        // Lấy danh mục
        $catetour = [];
        if ($id = array_pop($url)) {
            $catetour = Category::findOrFail($id);
        }

        // lấy danh mục con nếu có
        $categoryChildren = Category::where('c_parent_id', $id)->get();

        // Danh sách nhà cung cấp
        $suppliers = Supplier::select('id','s_name')->orderByDesc('id')->get();

        // Danh sách sản phẩm nổi bật
        $tourHot = tour::with('category:id,c_name')
            ->where([
                'pro_hot' => tour::HOT_ON,
                'pro_active' => tour::STATUS_PUBLIC
            ])->limit(3)->get();

        // Lấy sản phẩm
        $tours = tour::where("pro_active", tour::STATUS_PUBLIC);
        $tours->where('pro_category_id', $id);

        if ($request->s) {
            $tours->where('s_supplier_id', $request->s);
        }

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

        $tours = $tours->paginate(9);

        $viewData = [
            'tours'         => $tours,
            'catetour'      => $catetour,
            'categoryChildren' => $categoryChildren,
            'query'            => $request->query(),
            'suppliers'        => $suppliers,
            'tourHot'       => $tourHot
        ];

        return view('tour.index', $viewData);
    }
}
