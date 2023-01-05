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
            $table->string('nome', 50)->nullable();
            $table->string('sangue',10)->nullable();
            $table->string('identidade', 15)->nullable();
            $table->string('cpf', 15)->nullable();
            $table->string('cnh', 20)->nullable();
            $table->string('endereco', 80)->nullable();
            $table->string('cidade', 50)->nullable();
            $table->string('telefone',15)->nullable();
            $table->string('email', 30)->nullable();
            $table->string('veiculo', 30)->nullable();
            $table->string('placa', 10)->nullable();
            $table->string('observacao', 30)->nullable();
            $table->string('nomeAcompanhante', 50)->nullable();
            $table->string('telefoneAcompanhante', 15)->nullable();
            $table->string('identidadeAcompanhante', 15)->nullable();
            $table->string('cpfAcompanhante', 15)->nullable();
            $table->string('emailAcompanhante', 80)->nullable();
            $table->string('parentesco', 30)->nullable();
            $table->string('pagamento', 30)->nullable();
            $table->timestamps();
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('inscricoes');
    }
}
