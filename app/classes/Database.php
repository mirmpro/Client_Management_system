<?php


namespace App\classes;


class Database
{
    public function db(){
        $link = mysqli_connect('localhost', 'root', '', 'clientmanagment');
         return $link;
    }
}