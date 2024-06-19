

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * Se añado la migracion para agregar el campo cPerSexochar(15), y utilizamos el método after(‘’), 
     * para indicarle después del campo nPerEdad queremos que agregue el campo y defecto masculino
     */
    public function up(): void
    {
        Schema::table('personas', function (Blueprint $table) {
            $table->char('cPerSexo',15)->nullable()->default('Masculino')->after('nPerEdad');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('personas', function (Blueprint $table) {
            $table->dropColumn ('cPerSexo');
        });
    }
};

