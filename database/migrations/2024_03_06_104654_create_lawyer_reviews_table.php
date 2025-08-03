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
        Schema::create('lawyer_reviews', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('lawyer_id')->nullable();
            $table->integer('customer_id')->nullable();
            $table->float('rating', 10, 0)->nullable();
            $table->float('experience', 10, 0)->nullable()->default(0);
            $table->float('communication', 10, 0)->nullable()->default(0);
            $table->float('service', 10, 0)->nullable()->default(0);
            $table->text('comment')->nullable();
            $table->integer('is_active')->default(1);
            $table->boolean('is_approved')->nullable()->default(false);
            $table->boolean('is_featured')->nullable()->default(false);
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->nullable();
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
        Schema::dropIfExists('lawyer_reviews');
    }
};
