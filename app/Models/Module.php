<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    protected $fillable = ['module_name', 'module_number', 'module_type', 'module_description',
        'temperature', 'operating_time','data_number', 'working_condition', 'power_supply',
        'energy_consumption', 'material', 'dimension', 'compliance', 'MTBF', 'luminosity',
        'visual_field', 'data', 'communication', 'input_output', 'interface_service'];


    // Un module est lié a plusieurs jornaux
    public function log()
    {
        return $this->hasMany('App\Models\Log', 'module_id', 'id');
    }
}
