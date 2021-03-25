<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateAdminRequest extends FormRequest
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
            'username' => 'required|min:5',
            'password' => 'required|min:5',
            'confirm-password' => 'required|same:password'
        ];
    }

    public function messages() {
        return [
            'username.required' => 'Username harus diisi',
            'username.min' => 'Username minimal 5 karakter',
            'password.required' => 'Password harus diisi',
            'password.min' => 'Password minimal 5 karakter',
            'confirm-password.required' => 'Konfirmasi password harus diisi',
            'confirm-password.same' => 'Konfirmasi password tidak sesuai',
        ];
    }
}
