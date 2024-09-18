<?php

namespace App\Http\Controllers;

use App\DTO\StudentData;
use App\Http\Requests\StoreStudentRequest;
use App\Models\Student;
use App\Repositories\StudentRepository;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct(private StudentRepository $studentRepository)
    {
    }
    public function index()
    {
        //
        return"Index is called";

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreStudentRequest $request)
    {
 // Create a new StudentData DTO from validated request data
 $studentData = StudentData::from($$request->validate());

 // Call the storeStudent method in the repository
 $this->studentRepository->storeStudent($studentData);

 // Return a response (you can modify this as needed)
 return response()->json(['message' => 'Student stored successfully'], 201);
        return $this->studentRepository->storeStudent($request->validate());
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return $this->studentRepository->getStudentById($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $user = $this->studentRepository->getStudentById($id);
        return $this->studentRepository->updateStudent($request,$user);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $this->studentRepository->deleteStudent($this->studentRepository->getStudentById($id));
    }
}