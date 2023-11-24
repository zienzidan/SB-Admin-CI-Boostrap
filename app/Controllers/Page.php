<?php

namespace App\Controllers;

class Page extends BaseController
{
	public function index(): string
	{
		return view('home');
	}

	public function about(): string
	{
		return view('about');
	}

	public function contact(): string
	{
		return view('contact');
	}
}