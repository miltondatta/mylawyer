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
        Schema::create('wallets', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('holder_type');
            $table->unsignedBigInteger('holder_id');
            $table->string('name');
            $table->string('slug')->index();
            $table->char('uuid', 36)->unique();
            $table->string('description')->nullable();
            $table->longText('meta')->nullable();
            $table->decimal('balance', 64, 0)->default(0);
            $table->unsignedSmallInteger('decimal_places')->default(2);
            $table->timestamps();

            $table->unique(['holder_type', 'holder_id', 'slug']);
            $table->index(['holder_type', 'holder_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('wallets');
    }
};
