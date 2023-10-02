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
        Schema::create('estudiantes', function (Blueprint $table) {
            $table->id();
            $table->string('name',30);
            $table->string('last_name',20);
            $table->string('cedula',20)->unique();
            $table->dateTime('fecha_nacimiento');
            $table->string('ciudad',20);
            $table->string('direccion',10);
            $table->string('telefono',20);
            $table->string('email',20);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('estudiantes');
    }
};
