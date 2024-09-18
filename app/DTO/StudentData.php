<?php

namespace App\DTO;

class StudentData
{
    public $first_name;

    public $last_name;

    public $email;

    public $salary;

    public $phone;

    public $address;

    public function __construct($first_name, $last_name, $email, $salary, $phone, $address)
    {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->email = $email;
        $this->salary = $salary;
        $this->phone = $phone;
        $this->address = $address;
    }

    // Static method to create a new instance from an array
    public static function from(array $data): self
    {
        return new self(
            $data['first_name'],
            $data['last_name'],
            $data['email'],
            $data['salary'],
            $data['phone'],
            $data['address']
        );
    }
}