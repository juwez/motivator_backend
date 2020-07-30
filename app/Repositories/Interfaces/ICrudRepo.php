<?php


namespace App\Repositories\Interfaces;


interface ICrudRepo
{
    public function Create();
    public function GetAll();
    public function Get();
    public function Update();
    public function Delete();


}
