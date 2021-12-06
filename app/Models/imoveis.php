<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class imovel extends Model
{
    protected $fillable = [
        "descricao", "bairroEndereco", "numeroEndereco", "cidadeEndereco",
        "estadoEndereco",  "preco", "qtdQuartos", "tipo", "finalidade"
      ];
      protected $table = "imoveis";



      public function cliente(){
        return $this->belongsTo('App\cliente', 'cliente_id');
    }

      
}
