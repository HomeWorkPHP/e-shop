<?php

namespace Modules\Admin\App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SignInRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {
        // $data = [
        //     'email' => 'admin@admin.com',
        //     'password' => 'password',
        //     'firstName' => 'admin@admin.com',
        //     'lastName' => 'admin@admin.com',
        // ];
        return [
            'email' => "required|email:rfc,dns",
            'password' => "required|min:6",
        ];
    }

    public function messages():array 
    {
        return [
            'email.required' => 'Vui long nhap email',
            'email.email' => 'Email khong dung dinh dang',
        ];
        
    }

    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }
}
