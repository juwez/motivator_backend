<?php


namespace App\Repositories\Interfaces;


use Illuminate\Http\Request;

interface IUserRepo
{
public function RegisterUser(Request $request);
}
