<?php


namespace App\Repositories\Code;

use App\Repositories\Interfaces\ITasksRepo;
use App\Repositories\Interfaces\ICrudRepo;
use App\Task;

class TasksRepo implements ITasksRepo, ICrudRepo
{
    public function Create()
    {
        // TODO: Implement Create() method.
    }

    public function GetAll()
    {
        // TODO: Implement GetAll() method.
    }

    public function Get($parameter)
    {
        // TODO: Implement Get() method.
    }

    public function Update()
    {
        // TODO: Implement Update() method.
    }

    public function Delete()
    {
        // TODO: Implement Delete() method.
    }
    public function GetUserTasks($email)
    {
        $tasks = Task::where("email",$email)->get()->toArray();
        return (!empty($tasks)) ? $tasks:null;
    }

    public function GetNextTask($email)
    {
        $date=now();
        dd($date);
        $tasks = Task::where("email",$email)
            ::where("datetime",">",date(y-m-d))->get();
    }
}
