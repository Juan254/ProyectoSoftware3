<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MaterialProviderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('material_provider', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Municipality');
            $table->float('quantity');
            $table->enum('provider_type', ['Centro de acopio','Comuna','Asociación','Chatarreros','Recuperador de oficio','Reciclador','Punto de fábrica']);
            $table->enum('material_type', ['Pet','Cartón','Archivo','Soplado','Chatarra','Metal','Plega','Vidrio','Marco']);
            $table->float('buy_price');
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
        Schema::dropIfExists('material_provider');
    }
}
