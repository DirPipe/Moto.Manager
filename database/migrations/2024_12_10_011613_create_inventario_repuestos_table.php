<?php
// database/migrations/YYYY_MM_DD_create_inventario_repuestos_table.php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInventarioRepuestosTable extends Migration
{
    public function up()
    {
        Schema::create('inventario_repuestos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('repuesto_id')->constrained()->onDelete('cascade');
            $table->integer('cantidad_disponible');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('inventario_repuestos');
    }
}
