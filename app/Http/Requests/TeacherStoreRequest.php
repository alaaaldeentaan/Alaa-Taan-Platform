<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TeacherStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
        'name' => 'required|string|max:255',
        'user_Name' => 'required|string|max:255',
        'language' => 'required|string|max:255',
        'address' => 'required|string|max:255',
        'gender' => 'required|in:male,female,others',
        'dob' => 'required|date',
        'phone' => 'required|string|max:255',
        'email' => 'required|string|email|unique:users|max:255',
        'password' => 'required|string|min:8|max:255',
        'img' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        'certificate_img' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ];
    }
}
