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
        Schema::create('user_passport', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id');
            $table->string('series');
            $table->string('number');
            $table->date('date_of_issue');
            $table->string('residence_address');
            $table->string('actual_address');
            $table->string('issued_by_whom');

            $table->primary('user_id');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('passport');
    }
};
