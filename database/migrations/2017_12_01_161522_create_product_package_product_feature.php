<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductPackageProductFeature extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_package_product_feature', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('product_package_id');
            $table->unsignedInteger('product_feature_id');
            $table->unsignedDecimal('limit_quantity', 12, 3)->nullable();
            $table->string('limit_dimension_value')->nullable();
            $table->string('limit_dimension_type')->nullable();
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
        Schema::dropIfExists('product_package_product_feature');
    }
}
