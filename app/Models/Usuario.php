<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

use Illuminate\Database\Eloquent\Model;


class Usuario extends Authenticatable
{
  
    use Notifiable;

    protected $fillable = [
        'nome','sobrenome', 'email', 'senha','ativo', 'email_token'
    ];

   	

   	


}