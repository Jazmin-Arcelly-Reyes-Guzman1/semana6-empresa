<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * metodo up()se usa para agregar tablas, columnas o indexa la base de datos
     */
    public function up(): void
    {
        Schema::create('personas', function (Blueprint $table) {
            $table->bigIncrements('nPerCodigo',20);
            $table->char('cPerApellido',50)->nullable()->index();
            $table->char('cPerNombre',50)->nullable()->index();
            $table->string('cPerDireccion',100)->nullable();
            $table->date('dPerFecNac');
            $table->integer('nPerEdad');
            $table->decimal('nPerSueldo', 6, 2);
            $table->string('cPerRnd', 50);
            $table->char('nPerEstado',1)->default('1');
            $table->string('remember_token', 100)->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     * metodo down()se usa para revertir las operaciones realizadas por el método up()
     */
    public function down(): void
    {
        Schema::dropIfExists('personas');
    }
};
