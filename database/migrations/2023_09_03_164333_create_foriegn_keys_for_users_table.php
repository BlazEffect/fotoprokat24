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
        Schema::table('users', function (Blueprint $table) {
            $table->foreign('profile_id')->references('user_id')->on('user_profile')->onDelete('cascade');
            $table->foreign('passport_id')->references('user_id')->on('user_passport')->onDelete('cascade');
            $table->foreign('work_info_id')->references('user_id')->on('user_work_info')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function(Blueprint $table) {
            $table->dropColumn('profile_id');
            $table->dropColumn('passport_id');
            $table->dropColumn('work_info_id');
        });
    }
};
