<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class requestLoaiTin extends FormRequest
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
         
                'Ten' => ['required', 'min:6', 'max:100'],
           
        ];
    }
    public function messages()
    {
        return
        [
           

            'Ten.required' => 'Tên Loại Không Được Để Trống!',
            'Ten.min' => 'Tên Loại Cần Tối Thiểu 10 Ký Tự!',
            'Ten.max' => 'Tên Loại Tối Đa 100 Ký Tự!', 
        ];
    } 
}
