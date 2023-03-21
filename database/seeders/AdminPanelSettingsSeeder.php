<?php

namespace Database\Seeders;

use App\Models\AdminPanelSettings;
use Illuminate\Database\Seeder;

class AdminPanelSettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admins = [
            [
                'system_name' => 'حلول للكمبيوتر',
                'photo' => '',
                'status' => 1,
                'general_alert' => '',
                'address' => 'شارع النيل',
                'company_code' => '1',
            ],

        ];
        AdminPanelSettings::insert($admins);
    }
}
