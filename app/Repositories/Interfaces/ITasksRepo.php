<?php


namespace App\Repositories\Interfaces;


interface ITasksRepo
{

    public function GetNextTask($email);
    public function GetUserTasks($email);

}
