<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreMovieRequest extends FormRequest
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
            'title' => 'string|required',
            'genre' => 'string|required',
            'director' => 'string|nullable',
            'year' => 'integer|nullable|min:1900|max:' . now()->year,
            'storyline' => 'string|nullable|max:1000',
        ];
    }
}
