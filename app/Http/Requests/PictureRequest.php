<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PictureRequest extends FormRequest
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
            "img" => "required|file|mimes:jpg,jpeg,gif,png|max:2000"
        ];
    }
    public function messages()
    {
        return [
            "img.mimes" => "Nije dozvoljena ekstenzija!",
            "img.max" => "Maksimalna veličina slike je 2 MB!",
            "required" => "Slika nije odabrana!"
        ];
    }

}
