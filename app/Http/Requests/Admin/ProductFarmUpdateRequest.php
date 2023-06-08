<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class ProductFarmUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'nama_produk' => 'required',
            'asal_produk' => 'required',
            'harga_produk' => 'required',
            //'gambar_produk' => 'required|image',
            'produsen_produk' => 'required',
            'deskripsi_produk' => 'required',
            'jenis_potong' => 'required',

            'halal' => 'required',
            'rendah_lemak' => 'required',
            'qty' => 'required',
        ];
    }
}
