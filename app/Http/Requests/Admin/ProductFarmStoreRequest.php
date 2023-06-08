<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use PhpParser\Node\Stmt\TraitUse;

class ProductFarmStoreRequest extends FormRequest
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
            // $table->string('nama_produk');
            // $table->string('asal_produk');
            // $table->integer('harga_produk');
            // $table->text('gambar_produk');
            // $table->string('produsen_produk');
            // $table->text('deskripsi_produk');
            // $table->string('status');
            // $table->string('jenis_potong');

            // $table->boolean('halal');
            // $table->boolean('rendah_lemak');
            // $table->boolean('qty');

            'nama_produk' => 'required',
            'asal_produk' => 'required',
            'harga_produk' => 'required',
            'gambar_produk' => 'required|image',
            'produsen_produk' => 'required',
            'deskripsi_produk' => 'required',
            'jenis_potong' => 'required',

            'halal' => 'required',
            'rendah_lemak' => 'required',
            'qty' => 'required',
        ];
    }
}
