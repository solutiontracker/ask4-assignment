<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class NetworkCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'network:query {hostname}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Query a device over its management interface and print interface details in CSV format.';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $hostname = $this->argument('hostname');

        $device = \App\Models\Device::where('hostname', $hostname)->first();

        if ($device) {

            $client = ($device->management_protocol == 'SSH') ? new \App\Ask4\SSHClient() : new \App\Ask4\TelnetClient();

            $interfaces = $client->getInterfaceDetails($device);

            $this->output->header('Interface Details for ' . $hostname);

            $this->table(['Interface Name', 'MAC Address', 'IPv4 Address'], $interfaces);

        } else {

            $this->error('Device not found!');

        }
    }
}
