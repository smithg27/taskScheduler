<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('title');
            $table->text('description');
            $table->boolean('completed');
            $table->foreign('assignee')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('creator')->references('id')->on('users')->onDelete('cascade');
            $table->date('dueDate');
            $table->integer('subTasks');
            $table->integer('parentTask');
            $table->string('location');
            $table->foreign('type')->references('id')->on('taskType');
            $table->status('string');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tasks');
    }
}
