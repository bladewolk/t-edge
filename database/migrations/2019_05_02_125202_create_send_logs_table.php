<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSendLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('send_log', function (Blueprint $table) {
            $table->bigIncrements('log_id');
            $table->unsignedInteger('usr_id');
            $table->unsignedInteger('num_id');
            $table->string('log_message')->nullable();
            $table->boolean('log_success')->default(false);
            $table->timestamp('log_created');
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
        Schema::dropIfExists('send_logs');
    }
}
