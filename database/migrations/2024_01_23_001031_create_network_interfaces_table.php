<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('network_interfaces', function (Blueprint $table) {
            $table->id();
            $table->foreignId('device_id')->constrained();
            $table->string('interface_name');
            $table->string('mac_address');
            $table->string('ipv4_address');
            $table->boolean('is_management_interface')->default(false);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('network_interfaces');
    }
};
