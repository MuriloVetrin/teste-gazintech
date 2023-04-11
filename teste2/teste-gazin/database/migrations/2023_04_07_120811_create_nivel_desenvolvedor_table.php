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
        Schema::create('nivel_desenvolvedor', function (Blueprint $table) {
            $table->id();
            $table->foreignId('nivel_id')->constrained()->onDelete('restrict');
            $table->foreignId('desenvolvedor_id')->constrained()->onDelete('cascade');
            $table->boolean('removivel')->default(true);
            $table->timestamps();

            $table->foreign('nivel_id')->references('id')->on('nivels')->onDelete('restrict');
            $table->foreign('desenvolvedor_id')->references('id')->on('desenvolvedors')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nivel_desenvolvedor');
    }
};
