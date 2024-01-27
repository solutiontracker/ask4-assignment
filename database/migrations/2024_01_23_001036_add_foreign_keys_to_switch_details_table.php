<?php

use Illuminate\Database\Migrations\Migration;

use Illuminate\Database\Schema\Blueprint;

use Illuminate\Support\Facades\Schema;

class AddForeignKeysToSwitchDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('switch_details', function (Blueprint $table) {
            $table->foreign(['device_id'], 'switch_details_ibfk_1')->references(['id'])->on('devices')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('switch_details', function (Blueprint $table) {
            $table->dropForeign('switch_details_ibfk_1');
        });
    }
}
