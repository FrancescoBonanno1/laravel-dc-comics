<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('Comics', function (Blueprint $tabella){
            $tabella->char('title', 100);
            $tabella->char('description',255);
            $tabella->char('thumb',255);
            $tabella->dateTime('price');
            $tabella->dateTime('series');
            $tabella->string('sale_date',10);
            $tabella->integer('type', 7);
            $tabella->timestamps();
           
           
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comics_models');
    }
};
