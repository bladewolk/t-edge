<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSendLogAggregatedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('send_log_aggregateds', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamp('date');
            $table->unsignedInteger('usr_id');
            $table->unsignedInteger('cnt_id');
            $table->bigInteger('log_success')->nullable();
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
        Schema::dropIfExists('send_log_aggregateds');
    }
}
