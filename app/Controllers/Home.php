<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('index');
    }

    public function password(): string
    {
        return view('password');
    }

    public function register(): string
    {
        return view('register');
    }
    
    public function login(): string
    {
        return view('login');
    }

    public function tables(): string
    {
        return view('tables');
    }

    public function charts(): string
    {
        return view('charts');
    }

    public function layoutStatic(): string
    {
        return view('layout-static');
    }

    public function layoutSidenavLight(): string
    {
        return view('layout-sidenav-light');
    }

    public function notFound(): string
    {
      return view('404');
    }

    public function unauthorized(): string
    {
      return view('401');
    }

    public function internalServerError(): string
    {
      return view('500');
    }

}
