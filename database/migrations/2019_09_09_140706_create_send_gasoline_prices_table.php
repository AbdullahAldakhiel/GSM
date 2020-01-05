<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSendGasolinePricesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
 

        Schema::create('send_gasoline_prices', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('premiumOctane');
            $table->string('normalOctane');
            $table->string('diesel');
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
        Schema::dropIfExists('send_gasoline_prices');
    }
}
