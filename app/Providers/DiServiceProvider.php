<?php


namespace App\Providers;


use Carbon\Laravel\ServiceProvider;

class DiServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this -> app -> bind('App\Repositories\Interfaces\ITasksRepo', 'App\Repositories\Code\TasksRepo');
        $this -> app -> bind('App\Repositories\Interfaces\IUserRepo', 'App\Repositories\Code\UserRepo');
    }
}
