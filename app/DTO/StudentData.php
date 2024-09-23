<?php

namespace App\DTO;

class StudentData
{


    public function __construct(    public ?string $first_name;

    public ?string $last_name;

    public ?string $email;

    public ?string $salary;

    public ?string $phone;

    public ?string $address;
    )
    {

    }

    // Static method to create a new instance from an array
    public static function rules(): array
    {
return [
    'first_name'=>['string',
                'required',],
    'last_name'=>['string',
                'required',],
    'email'=>['string',
                'required'],
    'salary'=>['string',
                'required',],
    'phone'=>['string',
                'required',],
    'address'=>['string',
                'required',]
];
    }
}
