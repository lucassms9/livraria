<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use App\Notifications\ConfirmaCadastro;
use App\Models\Usuario;
use App\Mail\EmailVerification;

class EnviarEmail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    protected $usuario;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($usuario)
    {
        $this->usuario = $usuario;
    }
 
    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {

        $user = new Usuario();
        $user->dados = $this->usuario;
        $user->email = $this->usuario['email'];   
        $user->notify(new ConfirmaCadastro());

    }

   

}
