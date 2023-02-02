<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class requestTheLoai extends FormRequest
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
            'TenTL' =>['required','min:6','max:255'],
            'ThuTu' =>['int']
        ];
    }
    public function messages() 
    {
        return [
            'TenTL.required' => 'Tên thể loại không được để trống',
            'TenTL.min' =>'Tên thể loại tối thiểu 6 ký tự',
            'TenTL.max' => 'Tên thể loại tối đa 255 ký tự' 
        ];
    }
}
