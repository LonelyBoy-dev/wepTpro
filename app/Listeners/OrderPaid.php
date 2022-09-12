<?php

namespace App\Listeners;

use App\Events\OrderPaid as EventsOrderPaid;
use App\Models\Admin;
use App\Models\Sms;
use App\Models\User;
use App\Notifications\OrderPaid as NotificationsOrderPaid;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Notification;

class OrderPaid
{
    /**
     * Handle the event.
     *
     * @param  OrderPaid  $event
     * @return void
     */
    public function handle(EventsOrderPaid $event)
    {
        $order = $event->order;

        foreach ($order->items as $item) {
            if ($item->product) {
                $sell = $item->product->sell + $item->quantity;

                $item->product()->update([
                    'sell' => $sell
                ]);
            }
        }

        $admins = Admin::all();
        Notification::send($admins, new NotificationsOrderPaid($order));

        if (option('sms_on_order_paid', 'off') == 'on') {
            sendSms(
                option('order_paid_pattern_code'),
                option('admin_mobile_number'),
                [
                    'order_id' => $order->id
                ],
                Sms::TYPES['ORDER_PAID']['key']
            );
        }
    }
}
