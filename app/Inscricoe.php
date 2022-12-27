<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inscricoe extends Model
{
    protected $fillable = ['nome', 'sangue', 'identidade', 'cpf', 'cnh', 'endereco', 'cidade', 'telefone','email', 'veiculo', 'placa', 'observacao', 'nomeAcompanhante', 'telefoneAcompanhante', 'identidadeAcompanhante', 'cpfAcompanhante', 'emailAcompanhante', 'parentesco'];
}

