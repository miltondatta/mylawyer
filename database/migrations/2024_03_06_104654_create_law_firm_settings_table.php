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
        Schema::create('law_firm_settings', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('law_firm_id')->nullable();
            $table->string('name');
            $table->string('display_name');
            $table->string('value')->nullable();
            $table->integer('is_specific')->default(0);
            $table->string('type')->nullable();
            $table->string('page')->nullable();
            $table->timestamp('created_at')->useCurrentOnUpdate()->useCurrent();
            $table->timestamp('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('law_firm_settings');
    }
};
