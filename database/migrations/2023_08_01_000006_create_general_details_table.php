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
        Schema::create('general_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->longText('cooperate_video')->nullable();
            $table->longText('address')->nullable();
            $table->bigInteger('telephone')->nullable();
            $table->string('email')->nullable();
            $table->longText('fb_link')->nullable();
            $table->longText('ig_link')->nullable();
            $table->longText('linkedin_link')->nullable();

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
        Schema::dropIfExists('general_details');
    }
};
