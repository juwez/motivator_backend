<?php


namespace App\Repositories\Code;


use App\Repositories\Interfaces\ICrudRepo;
use App\Repositories\Interfaces\ITasksRepo;
use App\Repositories\Interfaces\IUserRepo;
use App\Repositories\Interfaces\IUserTaskRepo;
use App\User;
use Illuminate\Http\Request;

class UserTaskRepo implements IUserTaskRepo
{
    private $ITaskRepo;
    private $IUserRepo;
    public function __construct(ITasksRepo $ITasksRepo,IUserRepo $IUserRepo){
        $this->ITaskRepo = $ITasksRepo;
        $this->IUserRepo = $IUserRepo;

    }
    public function GetUserTasks($email)
    {
        $user=User::where("email",$email)->first();

        dd(response() -> json(["tasks" => $this ->$user ->tasks ]));

        foreach ($user->tasks as $task)
        dd($task);
    }
}
