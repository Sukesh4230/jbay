<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMobileImageUrlToRoomSlidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('room_sliders', function (Blueprint $table) {
            $table->string('mobile_image_url')->nullable()->after('image_url');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('room_sliders', function (Blueprint $table) {
            $table->dropColumn('mobile_image_url');
        });
    }
}
