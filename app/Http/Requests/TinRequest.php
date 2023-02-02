<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TinRequest extends FormRequest
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
            
                'TieuDe' => ['required', 'min:6', 'max:255'], 
                'TomTat' => ['required', 'min:10', 'max:1000'], 
                'NoiDung' => ['required', 'min:10'],

            
        ];
    }
    public function messages()
    {
      return  [
            'TomTat.required' => 'Tóm Tắt Không Được Để Trống!',
            'TomTat.min' => 'Tóm Tắt Cần Tối Thiểu 10 Ký Tự!',
            'TomTat.max' => 'Tóm Tắt Tối Đa 1000 Ký Tự!',

            'TieuDe.required' => 'Tiêu Đề Không Được Để Trống!',
            'TieuDe.min' => 'Tiêu Đề Cần Tối Thiểu 6 Ký Tự!',
            'TieuDe.max' => 'Tiêu Đề Tối Đa 255 Ký Tự!', 

            'NoiDung.required' => 'Nội Dung Không Được Để Trống!',
            'NoiDung.min' => 'Nội Dung Cần Tối Thiểu 6 Ký Tự!',
            
           
        ];
    }
}
