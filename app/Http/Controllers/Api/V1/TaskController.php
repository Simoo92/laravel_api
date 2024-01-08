<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\Task;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\TaskResource;

class TaskController extends Controller
{
    public function index()
    {
       return TaskResource::collection(Task::all()) ;
    }

    public function show(Task $task)
    {
        return TaskResouce::make($task);
    }
}
