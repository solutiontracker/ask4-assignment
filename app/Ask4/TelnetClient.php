<?php

namespace App\Ask4;

class TelnetClient implements DeviceClient
{
    public function getInterfaceDetails(\App\Models\Device $device): array {
        // Implement Telnet connection and command execution here
        // Parse the output and return an array of interface details
    }
}
