<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AimsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aims', function (Blueprint $table) {
            $table->increments('id');
            $table->double('pet');
            $table->double('board');
            $table->double('archive');
            $table->double('blow');
            $table->double('junk');
            $table->double('metal');
            $table->double('plega');
            $table->double('glass');
            $table->double('frame');
            $table->text('descripton');
            $table->date('date');
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
        Schema::dropIfExists('aims');
    }
}
