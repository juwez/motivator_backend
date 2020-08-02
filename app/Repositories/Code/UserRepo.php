<?php


namespace App\Repositories\Code;


use App\Repositories\Interfaces\ICrudRepo;
use App\Repositories\Interfaces\IUserRepo;
use App\User;
use Illuminate\Http\Request;


class UserRepo implements IUserRepo, ICrudRepo
{

    public function Create()
    {
        // TODO: Implement Create() method.
    }

    public function GetAll()
    {
        // TODO: Implement GetAll() method.
    }

    public function Get()
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

    /**
     * @param Request $request
     * @return mixed
     */
    public function RegisterUser(Request $request)
    {
        $input = $request -> all();
        $input['password']=bcrypt($input['password']);
        return User::create($input);
    }
}
