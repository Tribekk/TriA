<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class CreateRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create([
           'name' => 'admin',
           'created_at' => Carbon::now(),
           'updated_at' => Carbon::now()
        ]);
        Role::create([
            'name' => 'manager',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        Role::create([
            'name' => 'beginner',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        Role::create([
            'name' => 'user',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
