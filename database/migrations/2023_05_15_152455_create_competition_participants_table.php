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
        Schema::create('competition_participants', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('competition_id');
            $table->string('name');
            $table->string('email');
            $table->string('phone_number');
            $table->string('gender');
            $table->string('birth_date');
            $table->string('additional_notes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('competition_participants');
    }
};
