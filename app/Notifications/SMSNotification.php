<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\VonageMessage;

class SMSNotification extends Notification implements ShouldQueue
{
    use Queueable;

    /**
     * @var array $project
     */
    protected $project;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
//    public function __construct($project)
//    {
//        $this->project = $project;
//    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['vonage'];
    }

    /**
     * Get the Nexmo / SMS representation of the notification.
     *
     * @param    mixed  $notifiable
     * @return  \Illuminate\Notifications\Messages\VonageMessage
     */
    public function toVonage($notifiable)
    {
        return (new VonageMessage())
            ->content('You have now registered for My Amazing App!');
    }

//    public function toSlack(object $notifiable): SlackMessage
//    {
//        return (new SlackMessage)
//            ->content('One of your invoices has been paid!');
//    }


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
