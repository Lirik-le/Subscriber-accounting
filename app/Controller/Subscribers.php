<?php

namespace Controller;

use Model\Number;
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

    public function addSubscriber(Request $request): string
    {
        $numbers = Number::all();
        if ($request->method === 'POST' && Subscriber::create($request->all())) {
            app()->route->redirect('/subscribers');
        }
        return new View('subscribers.addSubscriber', ['numbers' => $numbers]);
    }
}
