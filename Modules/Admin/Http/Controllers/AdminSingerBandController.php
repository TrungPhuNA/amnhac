<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RequestSingerBand;
use App\Models\SingerBand;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Log;

class AdminSingerBandController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $singerBands = SingerBand::all();
        $viewData = [
            'singerBands' => $singerBands
        ];
        return view('admin::singer-band.index', $viewData);
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('admin::singer-band.create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function store(RequestSingerBand $requestSingerBand)
    {
        $this->insertOrUpdate($requestSingerBand, $id = null);
        return redirect()->back()->with('success','Thêm mới thành công');
    }

    public function edit($id)
    {
        $singerBand  = SingerBand::find($id);
        return view('admin::singer-band.update',compact('singerBand'));
    }

    public function update(RequestSingerBand $requestSingerBand, $id)
    {
        $this->insertOrUpdate($requestSingerBand, $id);
        return redirect()->back()->with('success','Cập nhật dữ liệu thành công');
    }

    public function insertOrUpdate($requestSingerBand, $id)
    {
        $code = 1;
        try{
            $singerBand                    = new SingerBand();
            if ($id)
            {
                $singerBand                    = SingerBand::find($id);
            }
            $singerBand->name            = $requestSingerBand->name;
            $singerBand->slug            = str_slug($requestSingerBand->name);
            $singerBand->type            = $requestSingerBand->type;
            $singerBand->name_member     = $requestSingerBand->name_member;
            $singerBand->description     = $requestSingerBand->name;
            $singerBand->content         = $requestSingerBand->content;
            if ( $requestSingerBand->hasFile('avatar'))
            {
                $file = upload_image('avatar');

                if (isset($file['name']))
                {
                    $singerBand->avatar = $file['name'];
                }
            }
//            dd($singerBand);
            $singerBand->save();

        }catch (\Exception $exception)
        {
            $code = 0;
            Log::error("[Error insertOrUpdate Singer Band ]".$exception->getMessage()) ;
        }

        return $code;
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        $singerBand = SingerBand::find($id);
        if(!$singerBand){
            return redirect()->back()->with('error','Id không tồn tại');
        }
        $singerBand->delete();
        return redirect()->back()->with('success','Delete thành công');

    }
}
