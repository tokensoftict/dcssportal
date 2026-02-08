<?php

namespace App\Notifications;

use App\Services\EmailApiService;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Carbon;

class VerifyEmailViaApi extends Notification
{
    /**
     * Get the notification's delivery channels.
     */
    public function via($notifiable)
    {
        // Don't return 'mail' or 'api' here — we will call API manually
        return [];
    }

    /**
     * Send the notification (we override send directly)
     */
    public function toApi($notifiable)
    {
        // Generate signed URL for email verification
        $url = URL::temporarySignedRoute(
            'verification.verify',
            Carbon::now()->addMinutes(60),
            ['id' => encrypt($notifiable->getKey()), 'hash' => sha1($notifiable->getEmailForVerification())]
        );

        // Call your API email service
        app(EmailApiService::class)->send([
            'to' => [
                'email' => $notifiable->email,
                'name' => $notifiable->firstname
            ],
            'subject' => 'Verify Your Email Address',
            'htmlbody' => "
                <p>Hello {$notifiable->firstname},</p>
                <p>Please verify your email address by clicking the link below:</p>
                <p>
                    <a href='{$url}' style='padding:10px 20px;background:#2563eb;color:#fff;text-decoration:none;border-radius:4px'>
                        Verify Email
                    </a>
                </p>
                <p>If you did not register, please ignore this email.</p>
            "
        ]);
    }
}
