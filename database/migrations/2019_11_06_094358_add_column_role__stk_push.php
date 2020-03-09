<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnRoleStkPush extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('stkpush_responses', function (Blueprint $table) {
            //

            $table->string('ResultDesc')->nullable();
            $table->string('ResultCode')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('stkpush_responses', function (Blueprint $table) {
            //

            $table->dropColumn('ResultDesc');
            $table->dropColumn('ResultCode');
        });
    }
}
