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
        Schema::table('schedule_visits', function (Blueprint $table) {
            $table
                ->foreign('agent_id')
                ->references('id')
                ->on('agents')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');

            $table
                ->foreign('apartment_id')
                ->references('id')
                ->on('apartments')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('schedule_visits', function (Blueprint $table) {
            $table->dropForeign(['agent_id']);
            $table->dropForeign(['apartment_id']);
        });
    }
};
