<?php

namespace Autorization;

use Conection_DB\Conection_DB;

require 'сonection_db.php';

class Autorization
{
    public function login($login,$pass){
        $conect = new Conection_DB();
        $mysql = $conect->conect();
        $query = $mysql->query('SELECT * FROM `user` WHERE `login`="'.$login.'" AND `password`="'.$pass.'"')->fetch_assoc();
        $result = !empty($query);
        if ($result==1){
            session_start();
            $_SESSION['id'] = $query['id'];
            $_SESSION['login'] = $query['login'];
            $_SESSION['password'] = $query['password'];
            $_SESSION['famil'] = $query['famil'];
            $_SESSION['name'] = $query['name'];
            $_SESSION['parent'] = $query['parent'];
            $_SESSION['post'] = $query['post'];
            $_SESSION['email'] = $query['email'];
            $_SESSION['phone'] = $query['phone'];
            echo json_encode(array(
                               "check"=>TRUE,
                               "login" => $query['login'],
                               "pass"  => $query['password'],
                               "famil" => $query['famil'],
                               "name"  => $query['name'],
                               "parent"=> $query['parent'],
                               "post"  => $query['post'],
                               "email" => $query['email'],
                               "phone" => $query['phone']
                                ));
        }else{
            return json_encode(array(
                "check"  =>$result,
                "massage"=>'Пользователя с такими данными не существует'
            ));
        }
    }
}