<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EthiopianIdRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'sex'=>'required',
            'mststus'=> 'required',
        ];
    }

    public function messages()
    {
        return [
            'sex.required' => 'Gender is required!',
            'mstatus.required' => 'Marital Status is required!',
        ];
    }
}
