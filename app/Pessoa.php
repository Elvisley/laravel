<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
class Pessoa extends Model
{

    protected $fillable  = [
        "nome","rg","cpf","email",
        "telefone_principal","telefone_celular","telefone_recado",
        "estado_civil","endereco","numero","complemento","bairro",
        "cidade","cep","foto","observacao"

    ];

    public function setFotoAttribute($foto){
    	if(!empty($foto)){
			$this->attributes['foto'] = Carbon::now()->second.$foto->getClientOriginalName();
    		$name =  Carbon::now()->second.$foto->getClientOriginalName();
    		\Storage::disk('local')->put($name , \File::get($foto));
    	}
    	
    }

}
