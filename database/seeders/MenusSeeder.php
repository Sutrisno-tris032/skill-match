<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('menus')->insert([
            [
                'name' => 'Dashboard',
                'slug' => 'dashboard',
                'icon' => 'i-heroicons-chart-bar-20-solid',
                'route' => 'admin.dashboard',
                'parent_id' => 1,
                'parent_group_id' => 0,
                'divider' => 0,
                'is_active' => 1,
                'created_by' => 'system',
                'created_date' => now(),
                'updated_by' => 'system',
                'updated_date' => now(),
            ],
            [
                'name' => 'Job Postings',
                'slug' => 'job-postings',
                'icon' => 'i-heroicons-users-20-solid',
                'route' => 'admin.job-postings',
                'parent_id' => 1,
                'parent_group_id' => 0,
                'divider' => 0,
                'is_active' => 1,
                'created_by' => 'system',
                'created_date' => now(),
                'updated_by' => 'system',
                'updated_date' => now(),
            ],
            [
                'name' => 'Job Archived',
                'slug' => 'job-archived',
                'icon' => 'i-heroicons-users-20-solid',
                'route' => 'admin.job-archived',
                'parent_id' => 1,
                'parent_group_id' => 1,
                'divider' => 0,
                'is_active' => 1,
                'created_by' => 'system',
                'created_date' => now(),
                'updated_by' => 'system',
                'updated_date' => now(),
            ],
            // Add more menu items as needed
        ]);
    }
}
