<?php

namespace App\Notifications;


use App\Post;
use App\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class NewCommentPosted extends Notification
{
    use Queueable;

    protected $user;
    protected $post;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct( Post $post , User $user)
    {
        $this->post = $post;
        $this->user = $user;
    }

        /**
         * Get the mail representation of the notification.
         *
         * @param  mixed  $notifiable
         * @return \Illuminate\Notifications\Messages\MailMessage
         */
        // public function toMail($notifiable)
        // {
        //     return (new MailMessage)
        //                 ->line('The introduction to the notification.')
        //                 ->action('Notification Action', url('/'))
        //                 ->line('Thank you for using our application!');
        // }
    
        /**
         * Get the array representation of the notification.
         *
         * @param  mixed  $notifiable
         * @return array
         */
    

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['database'];
    }

    public function toArray($notifiable)
    {
        return [
            'titre' => $this ->post->titre,
            'id' => $this ->post->id,
            'nom' => $this ->user->nom,
        ];
    }
}
