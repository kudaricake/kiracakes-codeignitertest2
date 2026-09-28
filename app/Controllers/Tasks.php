<?php

namespace App\Controllers;

use App\Models\TaskModel;

class Tasks extends BaseController
{
    public function index(): string
    {
        $model = new TaskModel();
        $today = date('Y-m-d');

        return view('tasks/welcome', [
            'title' => 'Tasks for Today',
            'tasks' => $model->where('task_date', $today)
                ->orderBy('created_at', 'ASC')
                ->findAll(),
            'today' => $today,
        ]);
    }

    public function all(): string
    {
        $model = new TaskModel();

        return view('tasks/list', [
            'title' => 'Full Task List',
            'tasks' => $model->orderBy('task_date', 'ASC')
                ->orderBy('created_at', 'ASC')
                ->findAll(),
        ]);
    }
}
