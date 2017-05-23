<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class AdminSellerRequest extends Request
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
            'name' => 'required|min:3',
            'email' => 'required|email|unique:sellers',
            'phone' => 'required|min:10|max:10',
            'cell_phone' => 'required|min:11|max:11',
            'address' => 'required|min:3',
            'city' => 'required|min:3',
            'state' => 'required|min:2|max:2',
            'zipcode' => 'required|min:8|max:8',
        ];
    }
}
