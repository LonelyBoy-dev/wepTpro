<?php

namespace App\Channels;

use Illuminate\Notifications\Notification;

class SmsChannel
{
    /**
     * Send the given notification.
     *
     * @param  mixed  $notifiable
     * @param  \Illuminate\Notifications\Notification  $notification
     * @return void
     */
    public function send($notifiable, Notification $notification)
    {
        $data = $notification->toSms($notifiable);

        sendSms($data['pattern_code'], $data['mobile'], $data['input_data'], $data['type'], $data['user_id']);
    }
}
