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
        Schema::create('appointment_ratings', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('booked_appointment_id')->nullable();
            $table->integer('fromable_id')->nullable();
            $table->string('fromable_type', 225)->nullable();
            $table->integer('to_id')->nullable();
            $table->string('to_type')->nullable();
            $table->double('rating')->nullable();
            $table->longText('comment')->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
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
        Schema::dropIfExists('appointment_ratings');
    }
};
