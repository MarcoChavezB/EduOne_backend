<?php

namespace App\Services;

use App\Mail\AuthMail;
use App\Mail\WelcomeMail;
use App\Models\User;
use Mail;

class MailService{
    
    public function sendWelcomeEmail(User $user){
        $userService = new UserService();
        
        if($userService->IsUserStudent($user->id_role)){
            Mail::to($user->email)->send(new WelcomeMail(user: $user));
            return;
        }
    
        Mail::to($user->email)->send(new WelcomeMail(user: $user));
    }
    
    public function SendLoginAlertEmail(User $user){
        Mail::to($user->email)->send(new AuthMail(user: $user));
    }
}