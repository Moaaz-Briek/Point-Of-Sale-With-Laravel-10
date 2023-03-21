<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admins = [
            [
                'name' => 'admin',
                'email' => 'a@a.a',
                'username' => 'admin',
                'password' => bcrypt('admin'),
                'company_code' => 1,
                'added_by' => 0,
                'updated_by' => 0,
            ],

        ];
        Admin::insert($admins);
    }
}
