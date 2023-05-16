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
        Schema::create('competition_payments', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('competition_id');
            $table->integer('competition_participant_id');
            $table->string('account_name');
            $table->string('account_number');
            $table->string('payment_proof');
            $table->boolean('is_confirmed')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('competition_payments');
    }
};
