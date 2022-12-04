<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Student;
use Faker\Generator as Faker;

$factory->define(Student::class, function (Faker $faker) {
    return [
        'stuName' => $faker->name,
        'stuFatherName' => $faker->name,
        'email'=> $faker->unique()->safeEmail,
        'password'=> '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
        'phone'=> $faker->phoneNumber,
        'address'=> $faker->paragraph(),
        'city'=> $faker->name,
    ];
});
