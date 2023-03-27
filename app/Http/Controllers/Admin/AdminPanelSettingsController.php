<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\AdminPanelSettings;

class AdminPanelSettingsController extends Controller
{
    public function index()
    {
        $data = AdminPanelSettings::where('company_code', auth()->user()->company_code)->first();
        if (!empty($data)) {
            if ($data['updated_by'] > 0 && $data['updated_by'] !== null) {
                $data['updated_by_admin'] = Admin::where('id', $data['updated_by'])->value('name');
            }
        }
        return view('admin.admin_panel_settings.index', ['data' => $data]);
    }
}
