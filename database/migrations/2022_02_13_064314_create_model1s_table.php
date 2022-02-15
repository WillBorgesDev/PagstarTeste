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
        Schema::create('model1s', function (Blueprint $table) {
            $table->id();
            $table->string('nome')->nullable();
            // $table->TIN('carteira', false);
            $table->timestamps();
            $table->index('nome');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('model1s');
    }
};
