<?php

namespace App\Notifications;

use App\Services\EmailApiService;
use Illuminate\Auth\Notifications\ResetPassword;


class ResetPasswordViaApi extends ResetPassword
{
    public function via($notifiable)
    {
        return ['api'];
    }

    public function toApi($notifiable)
    {
        $url = url(route('password.reset', [
            'token' => $this->token,
            'email' => $notifiable->email,
        ], false));

        return [
            'to' => [
                'email' => $notifiable->email,
                'name' => $notifiable->firstname
            ],
            'subject' => 'Reset Your Password',
            'htmlbody' => "
                <p>Hello {$notifiable->firstname},</p>
                <p>You requested a password reset.</p>
                <p><a href='{$url}'>Reset Password</a></p>
                <p>If you did not request this, please ignore this email.</p>
            "
        ];
    }

    public function send($notifiable)
    {
        app(EmailApiService::class)->send($this->toApi($notifiable));
    }
}
