<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class PostRequest extends FormRequest
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
            'title' => [
                'required',
                Rule::unique('posts', 'title')->where(function($query) {
                    return $query->where('type', $this->route('type'));
                })
            ],
            'desc' => 'required'
        ];
    }

    public function messages() {
        return [
            'title.required' => 'Judul harus diisi',
            'title.unique' => 'Judul sudah ada',
            'desc.required' => 'Deskripsi harus diisi'
        ];
    }
}
