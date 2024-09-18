<?php
namespace App\Repositories;
use App\DTO\StudentData;
use App\Models\Student;

class StudentRepository{
    public function storeStudent(StudentData $studentData){
  // Store the student using the data from the DTO
  Student::create([
    'first_name' => $studentData->first_name,
    'last_name' => $studentData->last_name,
    'email' => $studentData->email,
    'phone' => $studentData->phone, // Adjusted to match the provided data
    'address' => $studentData->address,
    'salary' => $studentData->salary,
]);



    }
    public function updateStudent(){

    }
    public function deleteStudent(){

    }
    public function getStudentById($id){

    }
}