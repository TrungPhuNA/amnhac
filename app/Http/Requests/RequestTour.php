<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestTour extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            't_title'           => 'required|unique:tours,t_title,' . $this->id,
            't_categories'      => 'required',
            't_description'     => 'required',
//            's_supplier_id'     => 'required',
            't_content'         => 'required',
            't_time_start'      => 'required',
            't_city'            => 'required',
        ];
    }

    public function messages()
    {
        return [
            't_title.required'          => 'Trường này không được để trống',
            't_title.unique'            => 'Tên sản phẩm đã tồn tại',
            't_categories.required'     => 'Trường này không được để trống',
            't_city.required'           => 'Trường này không được để trống',
            't_time_start.required'     => 'Trường này không được để trống',
//            's_supplier_id.required'   => 'Trường này không được để trống',
            't_content.required'        => 'Trường này không được để trống',
        ];
    }
}
