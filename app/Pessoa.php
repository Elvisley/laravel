<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{

    protected $fillable  = [
        "nome","rg","cpf","email",
        "telefone_principal","telefone_celular","telefone_recado",
        "estado_civil","endereco","numero","complemento","bairro",
        "cidade","cep","foto","observacao"

    ];

    

}
