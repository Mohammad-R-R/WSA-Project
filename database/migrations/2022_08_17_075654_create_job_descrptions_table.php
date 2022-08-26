<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_descrptions', function (Blueprint $table) {
            $table->id();
            $table->unsignedbiginteger('job_announcements_id');
            $table->foreign('job_announcements_id')->references('id')->on('job_announcements');
            $table->string('subject');
            $table->string('email');
            $table->string('position');
            $table->integer('phoneNum');
            $table->integer('yearsOfExp');
            $table->string('name');
            $table->text('letter');
            
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
        Schema::dropIfExists('job_descrptions');
    }
};
