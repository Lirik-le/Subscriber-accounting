<?php

namespace Controller;

use Src\View;
use Src\Request;
use Model\Subscriber;

class Subscribers
{
    public function allSubscribers(Request $request): string
    {
        $subscribers = Subscriber::all();
        return new View('subscribers.subscribers', ['subscribers' => $subscribers]);
    }
}
