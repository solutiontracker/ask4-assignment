<?php
namespace App\Ask4;

interface DeviceClient
{
    public function getInterfaceDetails(\App\Models\Device $device): array;
}
