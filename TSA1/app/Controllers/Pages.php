<?php

namespace App\Controllers;

use App\Models\TaskModel;
use App\Models\UserModel;

class Pages extends BaseController
{
    public function index()
    {
        $taskModel = new TaskModel();
        return view('home', ['title' => 'Welcome | Tasks for Today', 'tasks' => $taskModel->forToday()]);
    }

    public function tasks()
    {
        $taskModel = new TaskModel();
        return view('tasks', ['title' => 'Task List | Tasks for Today', 'tasks' => $taskModel->orderedByDate()]);
    }

    public function profile()
    {
        $userModel = new UserModel();
        return view('profile', ['title' => 'Profile | Tasks for Today', 'user' => $userModel->first()]);
    }

    public function about()
    {
        return view('about', ['title' => 'About | Tasks for Today']);
    }
}
