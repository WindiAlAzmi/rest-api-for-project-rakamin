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
        Schema::create('sub_menu_tags', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('tags_id');
            $table->foreign('tags_id')->references('id')->on('tags')->onDelete('cascade');
            $table->unsignedBigInteger('sub_main_menus_id');
            $table->foreign('sub_main_menus_id')->references('id')->on('sub_main_menus')->onDelete('cascade');
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
        Schema::dropIfExists('sub_menu_tags');
    }
};
