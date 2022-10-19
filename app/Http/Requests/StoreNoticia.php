<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreNoticia extends FormRequest
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
            'epigrafe'=>'required|max:20',
            'titulo'=>'required|max:20',
            'subtitulo'=>'required|max:20',
            'cuerpo'=>'required|min:50|max:200',
            'piefoto'=>'required|max:20'
        ];
    }
}
