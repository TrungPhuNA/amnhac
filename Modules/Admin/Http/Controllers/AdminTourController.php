<?php

namespace Modules\Admin\Http\Controllers;

use App\Models\Category;
use App\Http\Requests\RequestTour;
use App\Models\Product;
use App\Models\Tour;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

class AdminTourController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index(RequestTour $request)
    {
        $tours =  Tour::with('category:id,c_name');

        if ($request->name)  $tours->where('category.c_name','like','%'.$request->name.'%');
        if ($request->cate)  $tours->where('category.id',$request->cate) ;

        $tours = $tours->orderByDesc('id')->paginate(10);

        $categories = $this->getCategories();

        $viewData = [
            'tours' => $tours,
            'categories' => $categories
        ];
        return view('admin::tour.index', $viewData);
    }
    public function getCategories()
    {
        return Category::all();
    }
    public function orderByDesc($column)
    {
        return $this->orderBy($column, 'desc');
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        $categories = $this->getCategories();
//        $suppliers  = $this->getSupplier();

        return view('admin::tour.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function store(RequestTour $requestTours)
    {
        dd('12');
        $this->insertOrUpdate($requestTours);

        return redirect()->back()->with('success','Thêm mới thành công');
    }

    public function insertOrUpdate($requestTours,$id='')
    {
        dd($requestTours->all());
        $tour = new Tour();

        if ($id) $tour = Tour::find($id);

        $tour->t_title              = $requestTours->t_title;
        $tour->t_slug               = str_slug($requestTours->t_title);
        $tour->t_categories         = $requestTours->t_categories;
        $tour->t_description        = $requestTours->t_description;
        $tour->t_adddress           = $requestTours->t_adddress;
        $tour->t_content            = $requestTours->t_content;
        $tour->t_city               = $requestTours->t_city;
        $tour->t_time_start_        = $requestTours->t_time_start_;


        if ( $requestProduct->hasFile('avatar'))
        {
            $file = upload_image('avatar');

            if (isset($file['name']))
            {
                $product->pro_avatar = $file['name'];
            }
        }

        $product->save();

//        if ($product->id && $requestProduct->hasFile('album')) {
//            $this->uploadAlbumImage($requestProduct->file('album'), $id);
        }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        return view('admin::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        return view('admin::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
