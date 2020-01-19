<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestArticle extends FormRequest
{
	
	public function authorize()
	{
		return true;
	}
	
	public function rules()
	{
		return [
            'a_name'        => 'required|unique:articles,a_name,' . $this->id,
            'a_description' => 'required|max:180',
            'a_content'     => 'required',
		];
	}
	
	// public function messages()
	// {
	// 	return [
 //            'a_name.required'        => 'Trường này không được để trống',
 //            'a_name.unique'          => 'Tên bài viết đã tồn tại',
 //            'a_content.required'     => 'Trường này không được để trống',
 //            'a_description.required' => 'Trường này không được để trống',
 //            'a_description.max'      => 'Mô tả không vượt quá 180 ký tự',
	// 	];
	// }
}
