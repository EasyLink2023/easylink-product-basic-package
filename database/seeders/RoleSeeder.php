<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roleName = 'admin';
        $roleId = DB::table('roles')->insertGetId([
            'role_name' => $roleName,
            'is_active' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('users')->insert([
            'role_id' => $roleId,
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => Hash::make('Pa$$w0rd!'),
            'created_at' => now(),
            'updated_at' => now(),
            'email_verified_at' => now()
        ]);
    }
}
