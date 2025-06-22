<?php

namespace App\Events;

use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Queue\SerializesModels;

class BoxOpened implements ShouldBroadcast
{
    use InteractsWithSockets, SerializesModels;

    public $title;
    public $message;

    public function __construct($title, $message)
    {
        $this->title = $title;
        $this->message = $message;
    }

    public function broadcastOn()
    {
        return new PrivateChannel('box-notif');
    }

    public function broadcastAs()
    {
        return 'box.opened';
    }
}

