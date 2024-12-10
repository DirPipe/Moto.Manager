<?php
// database/migrations/YYYY_MM_DD_create_motos_table.php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMotosTable extends Migration
{
    public function up()
    {
        Schema::create('motos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('marca');
            $table->string('modelo');
            $table->string('numero_placa')->unique();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('motos');
    }
}
