<?php

namespace Modules\WorkSample\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreWorkSamplesRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }
    public function rules()
    {
        return [
            'title'              => 'required|string|max:191',
            'content'            => 'nullable|string',
            'categories'         => 'required|exists:categories,id',
            'image'              => 'required',
            'published'          => 'nullable',
            'slug'               => 'nullable|unique:posts,slug',
            'publish_date'       => 'nullable|date',
            'meta_title'         => 'nullable',
            'meta_description'   => 'nullable',
        ];
    }
    public function messages()
    {
        return [
            'categories.required'=>'فیلد دسته بندی الزامی است.',
            'image.required'=>'فیلد تصویر شاخص الزامی است.',
        ];
    }


}
