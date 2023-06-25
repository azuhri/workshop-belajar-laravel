<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i=1; $i <= 10; $i++) { 
            $templateUser = "user{$i}";

            $newUser = new User();
            $newUser->username = $templateUser;
            $newUser->email = "{$templateUser}@gmail.com";
            $newUser->password = \bcrypt("adminadmin");
            $newUser->type_role_user = 0;
            $newUser->save();
            
            echo "User {$newUser->username} berhasil dibuat\n";
        }
    }
}
