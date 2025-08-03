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
        Schema::create('media', function (Blueprint $table) {
            $table->integer('id');
            $table->integer('media_category_id')->nullable();
            $table->string('file_type')->nullable();
            $table->longText('name');
            $table->longText('description')->nullable();
            $table->float('size', 10, 0)->nullable();
            $table->string('original_file_name', 455)->nullable();
            $table->longText('original_media_path')->nullable();
            $table->string('type')->nullable();
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
        Schema::dropIfExists('media');
    }
};
