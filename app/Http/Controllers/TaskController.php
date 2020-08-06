<?php

namespace App\Http\Controllers;

use App\Repositories\Interfaces\ITasksRepo;

class TaskController extends Controller
{
    private $repo;
    public function __construct(ITasksRepo $repo)
    {
        $this -> repo = $repo;
    }
    public function GetNextTask($email){
        return response($this->repo->GetNextTask($email),200);
    }
    public function GetUserTasks($email)
    {
        return response($this->repo->GetUserTasks($email),200);
    }
}
