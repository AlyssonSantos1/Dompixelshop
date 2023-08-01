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
        // Schema::create('listagem', function (Blueprint $table) {
        //     $table->id();
        //     $table->string('nome');
        //     $table->string('preco');
        //     $table->string('descricao');
        //     $table->string('quantidade');
        //     $table->timestamps();
        // });
    }

    //mudei os campos pra string depois do $table

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
