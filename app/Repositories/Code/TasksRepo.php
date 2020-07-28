<?php


namespace App\Repositories\Code;

use App\Repositories\Interfaces\ITasksRepo;
use App\Repositories\Interfaces\ICrudRepo;

class TasksRepo implements ITasksRepo, ICrudRepo
{
    public function GetAll()
    {
        // TODO: Implement GetAll() method.
        return \Exception::class();
    }
}
