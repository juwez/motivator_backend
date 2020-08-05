<?php

namespace App\Http\Controllers;

use App\Repositories\Interfaces\ITasksRepo;
use App\Repositories\Interfaces\IUserTaskRepo;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    private $ITaskRepo;
    private $IUserTaskRepo;
    public function __construct(ITasksRepo $ITaskRepo,IUserTaskRepo $IUserTaskRepo)
    {
        $this -> ITaskRepo = $ITaskRepo;
    }

    public function GetTasksOfUser($email)
    {
        return response() -> json(["tasks" => $this -> ItaskRepo -> GetAll() ]);
    }
}
