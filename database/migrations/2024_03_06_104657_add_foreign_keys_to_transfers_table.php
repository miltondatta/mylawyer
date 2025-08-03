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
        Schema::table('transfers', function (Blueprint $table) {
            $table->foreign(['deposit_id'])->references(['id'])->on('transactions')->onDelete('CASCADE');
            $table->foreign(['withdraw_id'])->references(['id'])->on('transactions')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('transfers', function (Blueprint $table) {
            $table->dropForeign('transfers_deposit_id_foreign');
            $table->dropForeign('transfers_withdraw_id_foreign');
        });
    }
};
