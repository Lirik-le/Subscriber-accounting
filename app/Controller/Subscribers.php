<?php

namespace Controller;

use Model\Number;
use Model\Room;
use Model\Division;
use Src\Validator\Validator;
use Src\View;
use Src\Request;
use Model\Subscriber;

class Subscribers
{
    public function allSubscribers(Request $request): string
    {
        $subscribers = Subscriber::all();
        $rooms = Room::all();
        $divisions = Division::all();
        if ($request->method === 'POST') {
            if ($request->id_division !== 'null') {
                $subscribers = [];
                $selectedDivision = Division::where('id', $request->id_division)->get();
                foreach ($selectedDivision[0]->rooms as $needRoom) {
                    foreach ($needRoom->numbers as $needNumber) {
                        array_push($subscribers, $needNumber->subscriber);
                    }
                }
            } elseif ($request->id_room !== 'null') {
                $subscribers = [];
                $selectedRoom = Room::where('id', $request->id_room)->get();
                foreach ($selectedRoom[0]->numbers as $needNumber) {
                    array_push($subscribers, $needNumber->subscriber);
                }
            }
        }
        $countSubs = count($subscribers);
        return new View('subscribers.subscribers', ['subscribers' => $subscribers, 'rooms' => $rooms, 'divisions' => $divisions, 'countSubs' => $countSubs]);
    }

    public function addSubscriber(Request $request): string
    {
        $numbers = Number::all();
        if ($request->method === 'POST') {
            $validator = new Validator($request->all(), [
                'lastname' => ['required'],
                'firstname' => ['required'],
                'patronymic' => ['required'],
                'date_of_birth' => ['required'],
                'photo' => ['image'],
                'id_number' => ['required', 'unique:subscribers,id_number'],
            ], [
                'required' => 'Поле :field пусто',
                'unique' => 'Поле :field должно быть уникально',
                'image' => 'В поле :field должны быть картинки png и jpeg',
            ]);

            if ($validator->fails()) {
                return new View('subscribers.addSubscriber',
                    ['message' => $validator->errors(), 'numbers' => $numbers]);
            } else {
                $subs = Subscriber::create($request->all());
                $subs->photo($_FILES['photo']);
                $subs->save();
                app()->route->redirect('/subscribers');
            }
        }
        return new View('subscribers.addSubscriber', ['numbers' => $numbers]);
    }

    public function changeSubscriber(Request $request): string
    {
        $subscriber = Subscriber::where('id', $request->id)->get();
        $numbers = Number::all();

        if ($request->method === 'POST') {
            $validator = new Validator($request->all(), [
                'lastname' => ['required'],
                'firstname' => ['required'],
                'patronymic' => ['required'],
                'date_of_birth' => ['required'],
                'id_number' => ['required'],
            ], [
                'required' => 'Поле :field пусто',
                'unique' => 'Поле :field должно быть уникально'
            ]);

            if ($validator->fails()) {
                return new View('subscribers.changeSubscriber',
                    ['message' => $validator->errors(), 'subscriber' => $subscriber, 'numbers' => $numbers]);
            }

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
