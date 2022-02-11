<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book_infos', function (Blueprint $table) {
            $table->id();
            $table->unsignedSmallInteger('book_id');
            $table->enum('lang', ['uz', 'ru']);
            $table->string('author', 255);
            $table->string('title', 255);
            $table->text('description');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('book_infos');
    }
}
