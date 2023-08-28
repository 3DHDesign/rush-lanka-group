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
        Schema::create('our_strengths', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('units');
            $table->bigInteger('parkings');
            $table->bigInteger('apartments');
            $table->bigInteger('bedrooms');

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
        Schema::dropIfExists('our_strengths');
    }
};
