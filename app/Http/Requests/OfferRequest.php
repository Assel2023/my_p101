<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OfferRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }


    public function rules(): array
    {
        return
            [
                'name' => 'required|max:20',
                'price' => 'required',
                'detels' => 'required|max:20'

            ];
    }
     public function messages(){
          return [
            'name.required'=>'يجب ادخال الاسم',
            'name.max'=>'يجب ان يكون الاسم اقل من 20 حرف',
            'price.required'=>'يجب ادخال السعر',
            'detels.required'=>'يجب ادخال التفاصيل',
            'detels.max'=>'يجب ان يكون التفاصيل اقل من 20 حرف'
        ];
    }
}
