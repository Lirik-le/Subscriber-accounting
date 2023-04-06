<?php

namespace Controller;

use Src\View;
use Src\Request;
use Model\Employee;
use Src\Auth\Auth;
use Src\Validator\Validator;

class Site
{
    public function index(Request $request): string
    {
        return (new View())->render('site.index');
    }

    public function signup(Request $request): string
    {
        if ($request->method === 'POST') {
            $validator = new Validator($request->all(), [
                'username' => ['required', 'unique:staff,username', 'chars', 'minLen'],
                'password' => ['required', 'chars', 'minLen']
            ], [
                'required' => 'Поле :field пусто',
                'unique' => 'Поле :field должно быть уникально',
                'chars' => 'Поле :field может содержать только латиницу и цифры',
                'minLen' => 'Поле :field должно содержать минимум 6 символов!',
            ]);

            if($validator->fails()){
                return new View('site.signup',
                    ['message' => $validator->errors()]);
            }

            if (Employee::create($request->all())) {
                app()->route->redirect('/staff');
            }
        }
        return new View('site.signup');
    }

    public function login(Request $request): string
    {
        //Если просто обращение к странице, то отобразить форму
        if ($request->method === 'GET') {
            return new View('site.login');
        }
        //Если удалось аутентифицировать пользователя, то редирект
        if (Auth::attempt($request->all())) {
            app()->route->redirect('/');
        }
        //Если аутентификация не удалась, то сообщение об ошибке
        return new View('site.login', ['message' => 'Неправильные логин или пароль']);
    }

    public function logout(): void
    {
        Auth::logout();
        app()->route->redirect('/');
    }
}
