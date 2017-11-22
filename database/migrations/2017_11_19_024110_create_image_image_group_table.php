<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImageImageGroupTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('image_image_group', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('image_id');
            $table->unsignedInteger('image_group_id');
            $table->boolean('active')->nullable();
            $table->tinyInteger('cardinality')->nullable();
            $table->boolean('default')->nullable();
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
        Schema::dropIfExists('image_image_group');
    }
}
