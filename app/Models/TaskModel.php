<?php

namespace App\Models;

use CodeIgniter\Model;

class TaskModel extends Model
{
    function addTask(){
        $name = "Jorge";
        $email = "gr8.0@hotmail.com";
        $country = "Colombia";
        $city = "Bello";
        $password = "col123";
        $rol = "Anfitrion";
        $sql = "INSERT INTO usuarios (name,email,country,city,password,rol)
        VALUES ('{$name}','{$email}','{$country}','{$city}','{$password}','{$rol}')";
        $this->db->query($sql);
    }

    function readTask(){
        $sql = "SELECT * FROM usuarios";
        $task = $this->db->query($sql);
        return $task->getResult();
    }
}