<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        dd("sono in request");
        return [
            'title' => ['required'],
            'content' => ['required'],
            'category_id' => ['required',  'exists:categories,id'],
        ];
    }
}
