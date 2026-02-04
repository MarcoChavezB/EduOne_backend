<?php

namespace App\Mail;

use App\Models\User;
use App\Services\UserService;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class WelcomeMail extends Mailable
{
    use Queueable, SerializesModels;
    private User $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }
    
    public function build(){
        $userService = new UserService();
        
        $userService->IsUserStudent($this->user->id_role) ? 
            $this->buildStudentWelcomeMail($this->user) : 
            $this->buildEmployeeWelcomeMail($this->user);    
    }
    
    
    public function buildStudentWelcomeMail(User $user){
        return $this->subject('Bienvenido a EduOne!')
                    ->view('user.mail.student_welcome')
                    ->with([
                        'user' => $user,
                    ]);
    }
    
    public function buildEmployeeWelcomeMail(User $user){
        return $this->subject('Bienvenido a EduOne!')
                    ->view('user.mail.employee_welcome')
                    ->with([
                        'user' => $user,
                    ]);
    }

}
