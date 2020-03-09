<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRespondsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('responds', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('number');
            $table->longText('msg_body');
            $table->string('in_out')->nullable();
            $table->bigInteger('customer_id')->nullable();
            $table->string('status')->nullable();
            $table->string('error_code')->nullable();
            $table->string('num_segments')->nullable();
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
        Schema::dropIfExists('responds');
    }
}
