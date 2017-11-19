<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('person_id')->nullable();
            $table->unsignedInteger('mailing_address_id')->nullable();
            $table->unsignedInteger('billing_address_id')->nullable();
            $table->unsignedInteger('residence_address_id')->nullable();
            $table->unsignedInteger('work_address_id')->nullable();
            $table->unsignedInteger('cell_phone_id')->nullable();
            $table->unsignedInteger('work_phone_id')->nullable();
            $table->unsignedInteger('home_phone_id')->nullable();
            $table->enum('preferred_phone', ['cell', 'work', 'home'])->default('cell')->nullable();
            $table->string('personal_email')->nullable();
            $table->string('work_email')->nullable();
            $table->string('facebook_profile_link')->nullable();
            $table->string('twitter_profile_link')->nullable();
            $table->string('linkedin_profile_link')->nullable();
            $table->unsignedInteger('profile_image_group_id')->nullable();
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
        Schema::dropIfExists('contacts');
    }
}
