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
        Schema::create('model2s', function (Blueprint $table) {
            $table->id();
            // $table->integer('model1_id')->unsigned();
            $table->foreignId('model1_id')->constrained('model1s');
            $table->string('carteira',50);
            $table->float('saldo', 0.0)->change();
            $table->timestamps();
            $table->index('carteira','saldo');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('model2s');
    }
};
