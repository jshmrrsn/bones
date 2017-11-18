<?php

namespace App\Controllers;

use App\Core\App;


class TasksController
{

	public function index()
	{
		$tasks = App::get('database')->selectAll('tasks', 'Task');

		$todoTasks = array_filter($tasks, function ($task) {
			return ! $task->completed;
		});

		$completedTasks = array_filter($tasks, function ($task) {
			return $task->completed;
		});

		return view('tasks', compact('todoTasks', 'completedTasks'));
	}


	public function store()
	{
		App::get('database')->insert('tasks', [
			'description' => $_POST['description']
		]);

		return redirect('tasks');
	}

}


