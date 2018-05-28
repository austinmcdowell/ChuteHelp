<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CascadeDeleteLocations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('locations', function (Blueprint $table) {
            $table->dropForeign(['retailer_id']);
            $table->foreign('retailer_id')->references('id')->on('retailers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('locations', function (Blueprint $table) {
            $table->dropForeign(['locations_retailer_id_foreign']);
            $table->foreign('retailer_id')->references('id')->on('retailers');
        });
    }
}
