<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateKeluargaRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'no_kk' => 'required|numeric',
            'nama_ayah' => 'required',
            'nik_ayah' => 'required|numeric',
            'nama_ibu' => 'required',
            'nik_ibu' => 'required|numeric',
            'no_telp' => 'required|numeric',
            'id_desa' => 'required',
            'alamat' => 'required',
            'status_ekonomi' => 'required'
        ];
    }
}
