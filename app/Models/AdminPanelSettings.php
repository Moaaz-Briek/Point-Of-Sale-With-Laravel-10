<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminPanelSettings extends Model
{
    use HasFactory;
    protected $fillable = [
        'system_name',
        'photo',
        'status',
        'general_alert',
        'address',
        'added_by',
        'updated_by',
        'company_code',
    ];
}
