<?php

namespace App\Http\Requests\Back\Post;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
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
            'title'              => 'required|string|max:191',
            'image'              => 'required',
            'content'            => 'nullable|string',
            'categories'        => 'required|exists:categories,id',
            'published'          => 'nullable',
            'slug'               => 'nullable|unique:posts,slug',
            'publish_date'       => 'nullable|date',
            'meta_title'         => 'nullable',
            'meta_description'   => 'nullable',
        ];
    }
}
