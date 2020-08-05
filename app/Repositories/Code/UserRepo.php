<?php


namespace App\Repositories\Code;


use App\Repositories\Interfaces\ICrudRepo;
use App\Repositories\Interfaces\IUserRepo;
use App\Task;
use App\User;
use Illuminate\Http\Request;


class UserRepo implements IUserRepo, ICrudRepo
{
   public function RegisterUser(Request $request)
    {
        $input = $request->all();
        $input['password'] = bcrypt($input['password']);
        return User::create($input);
    }

    public function Create()
    {
        // TODO: Implement Create() method.
    }

    public function GetAll()
    {
        // TODO: Implement GetAll() method.
    }



    public function Update()
    {
        // TODO: Implement Update() method.
    }

    public function Delete()
    {
        // TODO: Implement Delete() method.
    }

    public function Get($email)
    {
        return User::where('email', $email)->first();
    }
}
