<?php

namespace App\Http\Controllers;

use App\Repositories\Interfaces\ITasksRepo;
class TaskController extends Controller
{
    private $ItaskRepo;
    public function __construct(ITasksRepo $ItaskRepo)
    {
        $this -> ItaskRepo = $ItaskRepo;
    }

    public function GetTasks()
    {
        return response() -> json(["tasks" => $this -> ItaskRepo -> GetAll() ]);
    }
}
