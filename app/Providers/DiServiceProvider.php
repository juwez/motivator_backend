<?php


namespace App\Providers;


use Carbon\Laravel\ServiceProvider;
use Illuminate\Contracts\Support\DeferrableProvider;

class DiServiceProvider extends ServiceProvider implements DeferrableProvider
{
    public function register()
    {
        $this -> app -> bind('App\Repositories\Interfaces\ITasksRepo', 'App\Repositories\Code\TasksRepo');
        $this -> app -> bind('App\Repositories\Interfaces\IUserRepo', 'App\Repositories\Code\UserRepo');
        $this -> app -> bind('App\Repositories\Interfaces\IUserTaskRepo', 'App\Repositories\Code\UserTaskRepo');
    }
}
