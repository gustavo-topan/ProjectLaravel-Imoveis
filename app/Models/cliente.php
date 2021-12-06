<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cliente extends Model
{
    protected $fillable = [
        "nome", "email", "telefone", "cpf",
        "cidadeEndereco",  "estadoEndereco"];
        
      protected $table = "cliente";


      public function imoveis(){
        return $this->hasMany('App\imoveis', 'cliente_id');
      }
}
