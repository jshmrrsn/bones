<?php

namespace App\Controllers;

use App\Core\App;


class PagesController
{

	public function home()
	{
		$tasks = App::get('database')->selectAll('tasks', 'Task');

		return view('home', compact('tasks'));
	}


	public function about()
	{
		return view('about');
	}

}
