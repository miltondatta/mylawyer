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
        Schema::create('law_firms', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('user_id')->nullable();
            $table->integer('pricing_plan_id')->nullable();
            $table->integer('country_id')->nullable();
            $table->integer('state_id')->nullable();
            $table->integer('city_id')->nullable();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('law_firm_name')->nullable();
            $table->string('law_firm_website')->nullable();
            $table->mediumText('description')->nullable();
            $table->text('address_line_1')->nullable();
            $table->text('address_line_2')->nullable();
            $table->string('longitude')->nullable();
            $table->string('latitude')->nullable();
            $table->string('prefix')->nullable();
            $table->string('suffix')->nullable();
            $table->string('home_phone')->nullable();
            $table->string('cell_phone')->nullable();
            $table->text('job_title')->nullable();
            $table->string('company')->nullable();
            $table->string('website')->nullable();
            $table->string('email')->nullable();
            $table->text('billing_address_line_1')->nullable();
            $table->text('billing_address_line_2')->nullable();
            $table->integer('billing_country_id')->nullable();
            $table->integer('billing_state_id')->nullable();
            $table->integer('billing_city_id')->nullable();
            $table->integer('billing_zip_code')->nullable();
            $table->text('shipping_address_line_1')->nullable();
            $table->text('shipping_address_line_2')->nullable();
            $table->integer('shipping_country_id')->nullable();
            $table->integer('shipping_state_id')->nullable();
            $table->integer('shipping_city_id')->nullable();
            $table->integer('shipping_zip_code')->nullable();
            $table->text('work_address_line_1')->nullable();
            $table->text('work_address_line_2')->nullable();
            $table->integer('work_country_id')->nullable();
            $table->integer('work_state_id')->nullable();
            $table->integer('work_city_id')->nullable();
            $table->integer('work_zip_code')->nullable();
            $table->string('user_name')->nullable();
            $table->string('zip_code')->nullable();
            $table->boolean('is_approved')->nullable()->default(false);
            $table->integer('profile_completion_percentage')->nullable();
            $table->timestamp('approved_at')->nullable();
            $table->integer('is_active')->default(1);
            $table->integer('is_online')->default(0);
            $table->boolean('is_featured')->nullable()->default(false);
            $table->string('icon')->nullable();
            $table->string('image')->nullable();
            $table->string('cover_image')->nullable();
            $table->string('stripe_id')->nullable();
            $table->string('pm_type')->nullable();
            $table->string('pm_last_four', 4)->nullable();
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
        Schema::dropIfExists('law_firms');
    }
};
