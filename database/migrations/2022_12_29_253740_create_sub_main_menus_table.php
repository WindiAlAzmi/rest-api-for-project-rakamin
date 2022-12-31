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
        Schema::create('sub_main_menus', function (Blueprint $table) {
            $table->id();
            $table->string('title_fitur');
            $table->text('content');
            $table->unsignedBigInteger('main_menu_id');
            $table->foreign('main_menu_id')->references('id')->on('main_menus');
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
        Schema::dropIfExists('sub_main_menus');
    }
};
