<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAbViewGroupAbViewTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ab_view_group_ab_view', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('ab_view_group_id');
            $table->unsignedInteger('ab_view_id');
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
        Schema::dropIfExists('ab_view_group_ab_view');
    }
}
