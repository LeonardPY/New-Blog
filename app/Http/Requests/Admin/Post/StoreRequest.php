<?php

namespace App\Http\Requests\Admin\Post;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'title' => 'required|string',
            'content' => 'required|string',
            'preview_image' => 'required|file',
            'main_image' => 'required|file',
            'category_id' => 'required|integer|exists:categories,id',
            'tag_ids' => 'nullable|array',
            'tag_ids.*' => 'nullable|integer|exists:tags,id'
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'This field is required to complete',
            'title.string' => 'The data must match the string type',
            'content.required' => 'This field is required to complete',
            'content.string' => 'The data must match the string type',
            'preview_image.required' => 'This field is required to complete',
            'preview_image.file' => 'You must select a file',
            'main_image.required' => 'This field is required to complete',
            'main_image.file' => 'You must select a file',
            'category_id.required'=>'This field is required to complete',
            'category_id.integer'=>'Category ID must be a number',
            'category_id.exists'=>'Category ID must be in the database',
            'tag_ids.array'=>'You need to send an array to the database',
        ];
    }
}
