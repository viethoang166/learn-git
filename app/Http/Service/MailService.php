<?php

namespace App\Http\Service;

use Illuminate\Support\Facades\Mail;
use App\Mail\InformUserProfile;

class MailService
{
    public function sendUserProfile($user)
    {
        Mail::to($user['email'])->send(new InformUserProfile($user));
    }
}
