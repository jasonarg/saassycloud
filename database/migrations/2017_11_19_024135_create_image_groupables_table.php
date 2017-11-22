<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImageGroupablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('image_groupables', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('image_group_id');
            $table->unsignedInteger('image_groupables_id');
            $table->string('image_groupables_type');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('image_groupables');
    }
}
