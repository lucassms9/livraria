<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use App\Models\Usuario;
class ConfirmaCadastro extends Notification
{
    use Queueable;
 
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct()
    {
       
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {


        return (new MailMessage)
                    ->subject('Ativação de conta')
                    ->greeting("Olá! ". $notifiable['dados']['nome']) 
                    ->level('info')
                    ->line('Seja Bem-vindo (a), ative já seu cadastro!')
                    ->action('Ativar cadastro', url('/api/usuarios/verificaEmail/'.$notifiable['dados']['email_token']))
                    ->line('Obrigado!')
                    ->salutation('Livraria Teste');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
