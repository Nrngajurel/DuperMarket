<?php

namespace App\Http\Requests;

use App\Rules\SlugFormat;
use Illuminate\Foundation\Http\FormRequest;

class FilterRequest extends FormRequest
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
            'name'=>'Required|unique:filters,name',
            'slug'=>'Required|unique:filters,name',
            'type'=>'Required|in:text,color',new SlugFormat(),
        ];
    }
}
