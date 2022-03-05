<?php

use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name'           => 'Teacher B',
                'user_type'           => 'teacher',
                'email'          => 'teacher@gmail.com',
                'password'       => bcrypt('teacher@gmail.com')
            ],
            [
                'name'           => 'Student A',
                'user_type'           => 'student',
                'email'          => 'student@gmail.com',
                'password'       => bcrypt('student@gmail.com')
            ],
            [
                'name'           => 'Admin A',
                'user_type'           => 'admin',
                'email'          => 'admin@gmail.com',
                'password'       => bcrypt('admin@gmail.com')
            ],
        ];
        User::truncate();
        User::insert($users);
    }
}
