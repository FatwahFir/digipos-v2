<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreGiziRequest extends FormRequest
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
            'id_pasien' => 'required',
            'tgl_periksa' => 'required',
            'bb' => 'required|numeric',
            'pb_tb' => 'required|numeric',
            'asi_eks' => 'required',
            'vit_a' => 'required',
            'validasi' => 'required'
        ];
    }
}
