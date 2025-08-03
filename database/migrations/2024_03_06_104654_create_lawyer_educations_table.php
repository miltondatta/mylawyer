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
        Schema::create('lawyer_educations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('lawyer_id')->nullable()->index('mentor_education_mentor_id_foreign');
            $table->string('institute', 191)->nullable();
            $table->string('degree')->nullable();
            $table->longText('description')->nullable();
            $table->string('subject', 191)->nullable();
            $table->string('from', 191)->nullable();
            $table->string('to', 191)->nullable();
            $table->string('image')->nullable();
            $table->tinyInteger('is_active')->default(0);
            $table->timestamps();
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
        Schema::dropIfExists('lawyer_educations');
    }
};
