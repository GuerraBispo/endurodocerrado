<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInscricoesTable extends Migration
{
   
    public function up()
    {
        Schema::create('inscricoes', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 50);
            $table->string('sangue',10);
            $table->string('identidade', 15);
            $table->string('cpf', 15);
            $table->string('cnh', 20);
            $table->string('endereco', 80);
            $table->string('cidade', 50);
            $table->string('telefone',15);
            $table->string('email', 30);
            $table->string('veiculo', 30);
            $table->string('placa', 10);
            $table->string('observacao', 30);
            $table->string('nomeAcompanhante', 50);
            $table->string('telefoneAcompanhante', 15);
            $table->string('identidadeAcompanhante', 15);
            $table->string('cpfAcompanhante', 15);
            $table->string('emailAcompanhante', 80);
            $table->string('parentesco', 30);
            $table->timestamps();
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('inscricoes');
    }
}
