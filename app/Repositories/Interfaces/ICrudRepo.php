<?php


namespace App\Repositories\Interfaces;


use Illuminate\Http\Request;

interface ICrudRepo
{
    public function Create();
    public function GetAll();
    public function Get($parameter);
    public function Update();
    public function Delete();
}
