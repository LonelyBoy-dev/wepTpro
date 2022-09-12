<?php

namespace Modules\WorkSample\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateWorkSamplesRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */


    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */

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
            'published'          => 'nullable',
            'image'              => 'required',
            'slug'               => 'nullable|unique:work_samples,slug,' . $this->work_sample->id,
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
