<?php

namespace Modules\Admin\Http\Controllers;

use App\Models\Category;
use App\Models\SingerBand;
use App\Models\Tour;
use App\Models\Province;
use App\Http\Requests\RequestTour;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

class AdminToursController extends Controller
{
    public function index(Request $request)
    {
        $tours =  Tour::with('category:id,c_name')->with('singerBand:id,name');

        if ($request->name)  $tours->where('category.c_name','like','%'.$request->name.'%');
        if ($request->cate)  $tours->where('category.id',$request->cate) ;

        $tours = $tours->orderByDesc('id')->paginate(10);
//        dd($tours);
        $categories = $this->getCategories();
        $singerBands = $this->getSingerBands();
        $viewData = [
            'tours' => $tours,
            'categories' => $categories,
            'singerBands' => $singerBands
        ];
        return view('admin::tour.index', $viewData);
    }
    public function getCategories()
    {
        return Category::all();
    }

    public function getSingerBands()
    {
        return SingerBand::all();
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
        $cities = $this->getCity();
        $singerBands = $this->getSingerBands();

        return view('admin::tour.create',compact('categories','cities','singerBands'));
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function store(RequestTour $requestTours)
    {
        $this->insertOrUpdate($requestTours);

        return redirect()->back()->with('success','Thêm mới thành công');
    }

    public function insertOrUpdate($requestTours,$id='')
    {
        $tour = new Tour();

        if ($id) $tour = Tour::find($id);

        $tour->t_title              = $requestTours->t_title;
        $tour->t_slug               = str_slug($requestTours->t_title);
        $tour->t_category_id        = $requestTours->t_category_id;
        $tour->t_description        = $requestTours->t_description;
        $tour->t_address            = $requestTours->t_address;
        $tour->t_content            = $requestTours->t_content;
        $tour->t_city               = $requestTours->t_city;
        $tour->t_time_start         = $requestTours->t_time_start;
        $tour->t_count_ticket       = $requestTours->t_count_ticket;
        $tour->t_price              = $requestTours->t_price;
        $tour->t_singer_band_id     = $requestTours->t_singer_band_id;
//        dd($requestTours->t_time_start);
        if(isset($requestTours->t_hot)) {
            $tour->t_hot            = $requestTours->t_hot;
        }

        if ( $requestTours->hasFile('t_banner'))
        {
            $file = upload_image('t_banner');

            if (isset($file['name']))
            {
                $tour->t_banner = $file['name'];
            }
        }

        if ( $requestTours->hasFile('t_avatar')) {
            $file = upload_image('t_avatar');

            if (isset($file['name'])) {
                $tour->t_avatar = $file['name'];
            }
        }
            $tour->save();

//        if ($tour->id && $requesttour->hasFile('album')) {
//            $this->uploadAlbumImage($requesttour->file('album'), $id);
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
    public function getCity()
    {
        return Province::all();
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        $tour = Tour::find($id);
        $categories = $this->getCategories();
        $cities = $this->getCity();
        $singerBands = $this->getSingerBands();
        $viewUpdate = [
            'tour'       => $tour,
            'categories' => $categories,
            'cities'     => $cities,
            'singerBands'     => $singerBands,
        ];
        return view('admin::tour.update', $viewUpdate);
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(RequestTour $requestTours, $id)
    {
        $this->insertOrUpdate($requestTours, $id);

        return redirect()->back()->with('success','Update thành công');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        $tour = Tour::find($id);
        if(!$tour){
            return redirect()->back()->with('error','Id không tồn tại');
        }
        $tour->delete();
        return redirect()->back()->with('success','Delete thành công');
    }
}
