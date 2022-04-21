<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ServisRequest extends FormRequest
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
            'nomor_antri' => 'required',
            'nama_barang' => 'required',
            'merk_barang' => 'required',
            'alamat' => 'required',
            'no_telp' => 'required|numeric',
            'keluhan' => 'required',
            'image' => 'required|image',
        ];
    }
}
