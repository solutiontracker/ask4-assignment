<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class NetworkInterface extends Model
{
    use HasFactory;

    use SoftDeletes;

    protected $fillable = ['device_id', 'interface_name', 'mac_address', 'ipv4_address', 'is_management_interface'];

    protected $table = 'network_interfaces';

    public function device() {
        return $this->belongsTo(Device::class);
    }
}
