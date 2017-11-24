<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emails', function (Blueprint $table) {
            $table->increments('id');
            $table->string('address')->nullable()->unique();
            $table->boolean('agreed_to_marketing')->default(false);
            $table->tinyInteger('marketing_frequency')->nullable();
            $table->boolean('unsubscribed')->default(false);
            $table->dateTime('unsubscribed_on')->nullable();
            $table->string('unsubscribed_reason')->nullable();
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
        Schema::dropIfExists('emails');
    }
}
