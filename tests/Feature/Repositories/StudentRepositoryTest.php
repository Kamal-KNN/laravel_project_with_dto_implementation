<?php

namespace Tests\Feature\Repositories;
use App\Models\Student;
use App\Repositories\StudentRepository;
use Tests\TestCase;
use App\DTO\StudentData;

class StudentRepositoryTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_store_student(): void
    {
        $StudentData = StudentData::from([
            'first_name' => fake()->name,
            'last_name' => fake()->name,
            'email' => fake()->safeEmail,
            'phone' => fake()->phoneNumber,
            'address' => fake()->address,
            'salary' => fake()->randomFloat(2, 1000, 10000),

        ]);

        (new StudentRepository)->storeStudent($StudentData);

        $this->assertDatabaseHas((new Student())->getTable(), [
            'first_name' => $StudentData->first_name,
            'last_name' => $StudentData->last_name,
            'email' => $StudentData->email,
            'phone' => $StudentData->phone, // Ensure this matches the database column name
            'address' => $StudentData->address,
        ]);

   }
}