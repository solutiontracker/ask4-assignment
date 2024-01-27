<?php

use Illuminate\Database\Migrations\Migration;

use Illuminate\Database\Schema\Blueprint;

use Illuminate\Support\Facades\Schema;

class AddForeignKeysToServerDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('server_details', function (Blueprint $table) {
            $table->foreign(['device_id'], 'server_details_ibfk_1')->references(['id'])->on('devices')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('server_details', function (Blueprint $table) {
            $table->dropForeign('server_details_ibfk_1');
        });
    }
}
