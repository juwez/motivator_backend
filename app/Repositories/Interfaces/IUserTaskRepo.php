<?php


namespace App\Repositories\Interfaces;


use Illuminate\Http\Request;

interface IUserTaskRepo
{
public function GetUserTasks($request);
}
