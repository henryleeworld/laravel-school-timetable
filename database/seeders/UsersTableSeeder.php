<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'id'             => 1,
                'name'           => 'Admin',
                'email'          => 'admin@admin.com',
                'password'       => Hash::make('password'),
                'remember_token' => null,
                'class_id'       => null,
            ],
            [
                'id'             => 2,
                'name'           => 'Teacher',
                'email'          => 'teacher@teacher.com',
                'password'       => Hash::make('password'),
                'remember_token' => null,
                'class_id'       => null,
            ],
            [
                'id'             => 3,
                'name'           => 'Teacher 2',
                'email'          => 'teacher2@teacher2.com',
                'password'       => Hash::make('password'),
                'remember_token' => null,
                'class_id'       => null,
            ],
            [
                'id'             => 4,
                'name'           => 'Teacher 3',
                'email'          => 'teacher3@teacher3.com',
                'password'       => Hash::make('password'),
                'remember_token' => null,
                'class_id'       => null,
            ],
            [
                'id'             => 5,
                'name'           => 'Teacher 4',
                'email'          => 'teacher4@teacher4.com',
                'password'       => Hash::make('password'),
                'remember_token' => null,
                'class_id'       => null,
            ],
            [
                'id'             => 6,
                'name'           => 'Teacher 5',
                'email'          => 'teacher5@teacher5.com',
                'password'       => Hash::make('password'),
                'remember_token' => null,
                'class_id'       => null,
            ],
            [
                'id'             => 7,
                'name'           => 'Student',
                'email'          => 'student@student.com',
                'password'       => Hash::make('password'),
                'remember_token' => null,
                'class_id'       => 1,
            ],
        ];

        User::insert($users);
    }
}
