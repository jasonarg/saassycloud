<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductVersionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_versions', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('product_id');
            $table->string('version_number')->nullable();
            $table->string('version_name')->nullable();
            $table->string('version_control_repo')->nullable();
            $table->string('version_control_branch')->nullable();
            $table->string('version_control_hash')->nullable();
            $table->date('release_date')->nullable();
            $table->text('release_notes')->nullable();
            $table->text('superseded_date')->nullable();
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
        Schema::dropIfExists('product_versions');
    }
}
