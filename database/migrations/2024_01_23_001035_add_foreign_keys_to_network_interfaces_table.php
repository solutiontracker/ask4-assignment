<?php

use Illuminate\Database\Migrations\Migration;

use Illuminate\Database\Schema\Blueprint;

use Illuminate\Support\Facades\Schema;

class AddForeignKeysToNetworkInterfacesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('network_interfaces', function (Blueprint $table) {
            $table->foreign(['device_id'], 'network_interfaces_ibfk_1')->references(['id'])->on('devices')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('network_interfaces', function (Blueprint $table) {
            $table->dropForeign('network_interfaces_ibfk_1');
        });
    }
}
