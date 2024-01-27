<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class ServerDetail extends Model
{
    use HasFactory;

    use SoftDeletes;

    protected $fillable = ['device_id', 'installed_ram'];

    protected $table = 'server_details';

    public function device() {
        return $this->belongsTo(Device::class);
    }

}
