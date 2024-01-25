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
            $tabella->id();
            $tabella->text('title');
            $tabella->text('description');
            $tabella->string('thumb',255);
            $tabella->decimal('price');
            $tabella->char('series', 100);
            $tabella->date('sale_date');
            $tabella->char('type', 100);
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
