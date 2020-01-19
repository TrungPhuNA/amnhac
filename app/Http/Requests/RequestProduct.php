<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Requesttour extends FormRequest
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
            'pro_name'        => 'required|unique:tours,pro_name,' . $this->id,
            'pro_category_id' => 'required',
            'pro_price'       => 'required',
            's_supplier_id'   => 'required',
            'pro_content'     => 'required',
		];
	}
	
	// public function messages()
	// {
	// 	return [
 //            'pro_name.required'        => 'Trường này không được để trống',
 //            'pro_name.unique'          => 'Tên sản phẩm đã tồn tại',
 //            'pro_category_id.required' => 'Trường này không được để trống',
 //            'pro_price.required'       => 'Trường này không được để trống',
 //            's_supplier_id.required'   => 'Trường này không được để trống',
 //            'pro_content.required'     => 'Trường này không được để trống',
	// 	];
	// }
}
