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
        Schema::create('the_homes', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('desc');
            $table->string('background');

            $table->string('ads-title');
            $table->string('images');
            $table->string('link');

            $table->string('prom');
            $table->text('prom_desc');
            $table->string('our');
            $table->string('team_images');
            $table->string('position');
            $table->text('member_desc');
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
        Schema::dropIfExists('the_homes');
    }
};
