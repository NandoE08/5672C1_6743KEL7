<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class memberRequest extends Request
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
            'alamat'=>'required|max:255',
            'email'=>'required|email|unique:pengguna'
        ];
        if ($this->is('admin/admis/save')) {
            $validasi['password']='required|min:8';
        }
        return $validasi;
    }
}
