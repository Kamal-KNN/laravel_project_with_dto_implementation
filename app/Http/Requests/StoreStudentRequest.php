<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreStudentRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'first_name' => ['required','string','max:255'],
            'last_name' =>  ['required','string','max:255'],
            'email' => ['required','email','unique:students,email'],
            'salary' =>  ['required','string'],

           'phone' =>  ['required','string','max:10'],
            'address' =>  ['required','string','max:255'],
            //
        ];
    }
}