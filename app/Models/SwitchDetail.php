<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class SwitchDetail extends Model
{
    use HasFactory;

    use SoftDeletes;

    protected $fillable = ['device_id', 'model_name'];

    protected $table = 'switch_details';

    public function device() {
        return $this->belongsTo(Device::class);
    }

}
