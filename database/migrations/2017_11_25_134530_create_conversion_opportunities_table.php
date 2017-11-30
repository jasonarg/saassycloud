<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConversionOpportunitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conversion_opportunities', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('session_id');
            $table->unsignedInteger('assigned_ab_view_group_id')->nullable();
            $table->string('landing_page');
            $table->boolean('converted')->default(false);
            $table->string('conversion_type')->nullable();
            $table->string('last_step_completed')->nullable();
            $table->unsignedInteger('package_chosen_id')->nullable();
            $table->integer('site_name_lookup_attempts')->default(0);
            $table->string('input_site_name')->nullable();
            $table->string('input_email')->nullable();
            $table->string('input_password_hash')->nullable();
            $table->string('input_organization_name')->nullable();
            $table->string('input_given_name')->nullable();
            $table->string('input_last_name')->nullable();
            $table->string('input_address')->nullable();
            $table->string('input_zip')->nullable();
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
        Schema::dropIfExists('conversion_opportunities');
    }
}
