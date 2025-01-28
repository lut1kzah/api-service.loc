<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    { $role_admin = Role::where('code', 'admin')->first();
        $role_manager = Role::where('code', 'admin')->first();
        $role_user = Role::where('code', 'admin')->first();

        User::create([
            'surname' => 'Ломовцев',
            'name' => 'Василий',
            'patronymic' => 'Александрович',
            'sex'=> 1,
            'birthday' => '2006-09-21',
            'email' => 'zaxarbro@gmail.com',
            'password' =>'zaxarbro@gmail.com',
            'api_token' => null,
            'role_id' => $role_admin->id,
        ]);
        User::create([
            'surname' => 'Лалалупсинко',
            'name' => 'Геншин',
            'patronymic' => 'Сансарович',
            'sex'=> 0,
            'birthday' => '2012-12-30',
            'email' => 'transformer@gmail.com',
            'password' =>'transformer@gmail.com',
            'api_token' => null,
            'role_id' => $role_manager->id,
        ]);
        User::create([
            'surname' => 'Карасье',
            'name' => 'Плавник',
            'patronymic' => 'Камышьевич',
            'sex'=> 1,
            'birthday' => '2023-12-30',
            'email' => 'karaskrutoi@gmail.com',
            'password' =>'karaskrutoi@gmail.com',
            'api_token' => null,
            'role_id' => $role_user->id,
        ]);
    }
}
