<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class APIStorePostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'title' => 'required|min:3|unique:posts,title',
            'description' => 'required|min:10',
            'created_by' => 'required|exists:users,id',
            'tags' => 'required|string',
            'image' => 'required|file|mimes:jpg,png'
        ];
    }
}
