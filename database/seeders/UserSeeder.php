<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
Use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin123'),
            'created_at'=>\Carbon\Carbon::now('Asia/Jakarta')
        ]);

        $admin->assignRole('admin');

        $user = User::create([
            'name' => 'user',
            'email' => 'user@gmail.com',
            'password' => bcrypt('user123'),
            'created_at'=>\Carbon\Carbon::now('Asia/Jakarta')
        ]);

        $user->assignRole('user');

        $ilham = User::create([
            'name' => 'ilham',
            'email' => 'ilham@gmail.com',
            'password' => bcrypt('user123'),
            'created_at'=>\Carbon\Carbon::now('Asia/Jakarta')
        ]);

        $ilham->assignRole('user');
    }
}
