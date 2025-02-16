<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCotizacionesTable extends Migration
{
    public function up()
    {
        Schema::create('cotizaciones', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('email');
            $table->string('telefono');
            $table->enum('tipo', ['paquetes', 'transporte', 'hoteles', 'boletos']);
            $table->string('opcion_seleccionada')->nullable();
            $table->string('ciudad_origen')->nullable();
            $table->string('ciudad_destino')->nullable();
            $table->enum('equipaje', ['si', 'no'])->nullable();
            $table->enum('clase_viaje', ['turista', 'ejecutiva'])->nullable();
            $table->date('fecha_inicio');
            $table->date('fecha_final');
            $table->text('comentarios')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('cotizaciones');
    }
}
