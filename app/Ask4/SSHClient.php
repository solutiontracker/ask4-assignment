<?php

namespace App\Ask4;

use App\Ask4\DeviceClient;

class SSHClient implements DeviceClient
{
    public function getInterfaceDetails(\App\Models\Device $device): array {
        // Implement SSH connection and command execution here
        // Parse the output and return an array of interface details
    }
}
