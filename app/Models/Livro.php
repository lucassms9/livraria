<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Livro extends Model
{

	 protected $fillable = [
          'nome','categoria', 'descricao', 'usuario_id'
    ];


    public function usuario()
    {
        return $this->belongsTo('App\Models\Usuario');
    }




}
