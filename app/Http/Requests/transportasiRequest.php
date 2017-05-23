<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class transportasiRequest extends Request
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
            'tarif'=>'required|numeric|min:1',
            'file'=>'required|unique:transportasi|file|image|mimes:jpeg,jpg|max:5000'
        ];
        return $validasi;
    }
}