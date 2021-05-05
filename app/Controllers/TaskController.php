<?php

namespace App\Controllers;
use App\Models\TaskModel;

class TaskController extends BaseController
{
	public function index()
	{
        $task = new TaskModel();
        $resulTask = $task->readTask();
        $data = array(
            "tasks" => $resulTask,            
        );
		echo view('layouts/header');
		echo view('taskView',$data);
		echo view('layouts/footer');
	}

	public function create(){
		echo view('layouts/header');
		echo view('createTask');
		echo view('layouts/footer');
	}

	public function addTasks(){
		echo "add task";
	}
}