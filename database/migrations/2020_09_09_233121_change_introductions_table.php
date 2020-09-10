<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeIntroductionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('introductions', function (Blueprint $table) {
            $table->integer('user_id')->length(50)->nullable()->change();
            $table->integer('manufacture_id')->length(50)->nullable()->change();
            $table->integer('product_id')->length(50)->nullable()->change();
            $table->dateTime('application_time')->change();
            $table->integer('judgement')->length(50)->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('introductions', function (Blueprint $table) {
            $table->string('user_id')->change();
            $table->string('manufacture_id')->change();
            $table->string('product_id')->change();
            $table->string('application_time')->change();
            $table->string('judgement')->change();
        });
    }
}
