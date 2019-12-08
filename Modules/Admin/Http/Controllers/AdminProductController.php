<?php

namespace Modules\Admin\Http\Controllers;

use App\Http\Requests\Requesttour;
use App\Models\Category;
use App\Models\tour;
use App\Models\tourImage;
use App\Models\Supplier;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class AdminProductController extends Controller
{
    public function index(Request $request)
	{
		$tours = tour::with('category:id,c_name');

		if ($request->name)  $tours->where('pro_name','like','%'.$request->name.'%');
		if ($request->cate)  $tours->where('pro_category_id',$request->cate) ;

		$tours = $tours->orderByDesc('id')->paginate(10);

		$categories = $this->getCategories();

		$viewData = [
			'tours'   => $tours,
			'categories' => $categories
		];

		return view('admin::tour.index',$viewData);
	}

	public function create()
	{
		$categories = $this->getCategories();
		$suppliers  = $this->getSupplier();

		return view('admin::tour.create',compact('categories','suppliers'));
	}

	public function store(Requesttour $requesttour)
	{
	     $this->insertOrUpdate($requesttour);

	     return redirect()->back()->with('success','Thêm mới thành công');
	}

	public function edit($id)
	{
		$tour    = tour::find($id);
		$categories = $this->getCategories();
        $suppliers  = $this->getSupplier();
        $images     = tourImage::where('pi_tour_id', $id)->get();

		return view('admin::tour.update',compact('tour','categories','suppliers','images'));
	}

	public function update(Requesttour $requesttour,$id)
	{
		$this->insertOrUpdate($requesttour,$id);

		return redirect()->back()->with('success','Cập nhật thành công ');
	}

	public function getCategories()
	{
		return Category::all();
	}

	public function getSupplier()
    {
        return Supplier::select('id','s_name')->orderByDesc('id')->get();
    }

	public function insertOrUpdate($requesttour,$id='')
	{
		$tour = new tour();

		if ($id) $tour = tour::find($id);

        $tour->pro_name            = $requesttour->pro_name;
        $tour->pro_slug            = str_slug($requesttour->pro_name);
        $tour->pro_category_id     = $requesttour->pro_category_id;
        $tour->pro_price           = $requesttour->pro_price;
        $tour->pro_sale            = $requesttour->pro_sale;
        $tour->pro_number          = $requesttour->pro_number;
        $tour->pro_description     = $requesttour->pro_description;
        $tour->pro_content         = $requesttour->pro_content;
        $tour->pro_title_seo       = $requesttour->pro_title_seo ? $requesttour->pro_title_seo : $requesttour->pro_name;
        $tour->pro_description_seo = $requesttour->pro_description_seo ? $requesttour->pro_description_seo : $requesttour->pro_description_seo;
        $tour->s_supplier_id       = $requesttour->s_supplier_id;
        $tour->pro_author_id       = get_data_user('admins');

        if ($requesttour->pro_warranty) {
		    $tour->pro_warranty = $requesttour->pro_warranty;
        }
		if ( $requesttour->hasFile('avatar'))
		{
			$file = upload_image('avatar');

			if (isset($file['name']))
			{
				$tour->pro_avatar = $file['name'];
			}
		}

		$tour->save();

		if ($tour->id && $requesttour->hasFile('album')) {
            $this->uploadAlbumImage($requesttour->file('album'), $id);
        }
	}

	public function uploadAlbumImage($files, $tour_id)
    {
        tourImage::where('pi_tour_id', $tour_id)->delete();
        foreach ($files as $fileKey => $fileImage ) {
            $ext = $fileImage->getClientOriginalExtension();

            $extend = ['png','jpg','jpeg', 'PNG', 'JPG','webp'];

            if( !in_array($ext,$extend))
            {
                return false;
            }

            $filename = date('Y-m-d__').str_slug($fileImage->getClientOriginalName()).'.'.$ext;

            $path = public_path().'/uploads/'.date('Y/m/d/');
            if ( !\File::exists($path))
            {
                mkdir($path,0777,true);
            }

            // di chuyen file vao thu muc uploads
            $fileImage->move($path,$filename);
            $tourImage = new tourImage();
            $tourImage->pi_name = $fileImage->getClientOriginalName();
            $tourImage->pi_slug = $filename;
            $tourImage->pi_tour_id = $tour_id;
            $tourImage->save();
        }
    }

	public function delete($id)
	{
		\DB::table('tours')->where('id',$id)->delete();
		return redirect()->back();
	}

	public function deleteImage($id)
    {
        tourImage::where('id', $id)->delete();
        return redirect()->back()->with('success','Xoá thành công');
    }

	public function action($action,$id)
	{
		if ($action)
		{
			$tour = tour::find($id);
			switch ($action)
			{
				case 'delete':
					$tour->delete();
					break;

				case 'active':
					$tour->pro_active =  $tour->pro_active ? 0 : 1;
					break;

				case 'hot':
					$tour->pro_hot =  $tour->pro_hot ? 0 : 1 ;
					break;
			}

			$tour->save();
		}

		return redirect()->back();
	}
}
