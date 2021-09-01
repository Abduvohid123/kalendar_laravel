<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipToLessonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('lessons', function (Blueprint $table) {
            $table->unsignedBigInteger('teacher_id');
            $table->foreign('teacher_id','teacher_fk_1001496')->references('id')->on('users');
            $table->unsignedBigInteger('class_id');
            $table->foreign('class_id','class_fk_1001508')->references('id')->on('univercity_classes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('lessons', function (Blueprint $table) {
            $table->dropForeign('teacher_fk_1001496');
            $table->dropForeign('class_fk_1001508');
        });
    }
}
