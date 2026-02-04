<?php

namespace App\Mail;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class AuthMail extends Mailable
{
    use Queueable, SerializesModels;
    private User $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }
    
    public function build(){
        return $this->subject('Alerta de inicio de sesión')
                    ->view('user.mail.login_notify')
                    ->with([
                        'user' => $this->user,
                    ]);
    }

}
