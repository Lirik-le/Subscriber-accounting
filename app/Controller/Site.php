<?php

namespace Controller;

use Src\View;
use Src\Request;
use Model\Employee;
use Src\Auth\Auth;

class Site
{
    public function index(Request $request): string
    {
        return (new View())->render('site.index');
    }

    public function signup(Request $request): string
    {
        if ($request->method === 'POST' && Employee::create($request->all())) {
            app()->route->redirect('/login');
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
