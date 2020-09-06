<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenameJudgmentToJudgementOnIntroductionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('introductions', function (Blueprint $table) {
            $table->renameColumn('judgment', 'judgement');//<-記述
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
            $table->renameColumn('judgement', 'judgment');//<-記述
        });
    }
}
