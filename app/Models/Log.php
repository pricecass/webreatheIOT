<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    // Un log est lié a un module
    public function Module()
    {
        return $this->hasOne('App\Models\Module', 'id', 'module_id');
    }
}
