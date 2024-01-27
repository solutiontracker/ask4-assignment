<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class Device extends Model
{
    use HasFactory;

    use SoftDeletes;

    protected $fillable = ['hostname', 'management_protocol', 'device_type_id'];

    protected $table = 'devices';

    public function type() {
        return $this->belongsTo(DeviceType::class, 'device_type_id');
    }

    public function interfaces() {
        return $this->hasMany(NetworkInterface::class);
    }

    public function switchDetails() {
        return $this->hasOne(SwitchDetail::class);
    }

    public function serverDetails() {
        return $this->hasOne(ServerDetail::class);
    }

}
