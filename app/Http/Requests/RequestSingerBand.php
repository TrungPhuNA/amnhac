<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestSingerBand extends FormRequest
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

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'        => 'required|unique:singer_bands,name,'.$this->id,
            'name_member' => 'required',
            'description' => 'required',
        ];
    }
    
 //    public function messages()
	// {
	// 	return [
	// 		'name.required' => 'Trường này không được để trống',
	// 		'name.unique'   => 'Tên danh mục đã tồn tại',
	// 		'name_member.unique'   => 'Trường này không được để trống',
	// 		'description.unique'   => 'Trường này không được để trống',
	// 		// 'icon.required' => 'Trường này không được để trống'
	// 	];
	// }
	
}
