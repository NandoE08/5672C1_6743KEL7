<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class pesananRequest extends Request
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
        $validasi = [
            'nama'=>'required|max:255',
            'no_tlp'=>'required|numeric|min:0',
            'rekening'=>'required|numeric|min:0'
        ];
        return $validasi;
    }
}