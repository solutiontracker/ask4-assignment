<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class DeviceType extends Model
{
    use HasFactory;

    use SoftDeletes;

    protected $fillable = ['type_name', 'specific_fields'];

    protected $table = 'device_types';

    public function devices() {
        return $this->hasMany(Device::class);
    }

}
