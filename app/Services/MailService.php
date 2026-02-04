<?php

namespace App\Services;

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
}