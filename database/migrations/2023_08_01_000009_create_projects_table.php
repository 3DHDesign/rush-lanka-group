<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('slug');
            $table->text('type');
            $table->longText('breadcrumb_image');
            $table->longText('gallery');
            $table->longText('about_image');
            $table->longText('heading');
            $table->text('description');
            $table->string('bedrooms')->nullable();
            $table->bigInteger('sqft')->nullable();
            $table->string('bathrooms')->nullable();
            $table->string('parkings')->nullable();
            $table->string('garages')->nullable();
            $table->text('about_description')->nullable();
            $table->mediumText('v_tour')->nullable();
            $table->boolean('status');
            $table->integer('order_by');

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
        Schema::dropIfExists('projects');
    }
};
