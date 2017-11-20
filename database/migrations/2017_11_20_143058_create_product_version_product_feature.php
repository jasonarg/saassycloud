<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductVersionProductFeature extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_version_product_feature', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('product_version_id');
            $table->unsignedInteger('product_feature_id');
            $table->enum('change_type', ['new', 'improved', 'removed', 'unchanged']);
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
        //
    }
}
