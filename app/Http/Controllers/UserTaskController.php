<?php

namespace App\Http\Controllers;


use App\Repositories\Interfaces\IUserTaskRepo;
use Illuminate\Http\Request;

class UserTaskController extends Controller
{
    private $repo;
    public function __construct(IUserTaskRepo $repo)
    {
        $this->repo = $repo;
    }
    public function GetUserTasks($email)
    {
      return  $this->repo->GetUserTasks($email);
    }
}
