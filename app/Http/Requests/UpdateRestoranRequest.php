<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRestoranRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nama_restoran' =>'required|string',
            'nama_pemilik' =>'required|string',
            'alamat' =>'required',
            'kontak' =>'required',
            
        ];
    }

    public function messages()
    {
        return[
        'nama_restoran.required' => 'Nama Resto Tidak Boleh Kosong',
        'nama_restoran.string' => 'Nama Resto Harus Text',
        'nama_pemilik.required' => 'Nama Resto Tidak Boleh Kosong',
        'nama_pemilik.string' => 'Nama Pemilik Harus Text',
        'alamat.required' => 'Alamat Tidak Boleh Kosong',
        'kontak.required' => 'Kontak Tidak Boleh Kosong',
        ];
    }
}
