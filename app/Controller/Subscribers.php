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

    public function changeSubscriber(Request $request): string
    {
        $subscriber = Subscriber::where('id', $request->id)->get();
        $numbers = Number::all();

        if ($request->method === 'POST') {
            $subscriber[0]->lastname = $request->lastname;
            $subscriber[0]->firstname = $request->firstname;
            $subscriber[0]->patronymic = $request->patronymic;
            $subscriber[0]->date_of_birth = $request->date_of_birth;
            $subscriber[0]->id_number = $request->id_number;
            $subscriber[0]->save();
            app()->route->redirect('/subscribers');
        }

        return new View('subscribers.changeSubscriber', ['numbers' => $numbers, 'subscriber' => $subscriber]);
    }
}
