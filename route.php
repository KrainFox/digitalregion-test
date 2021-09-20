<?php
require 'autorization.php';

use Autorization\Autorization;

$user = new Autorization();
//Код ниже это замена нормального маршрутизатора для обращения к функциям класса Autorization
//При необходимости могу доработать и сделать отдельный класс Route и с помощью Ajax отправлять данные на прямую
if (!empty($_POST)){
    switch ($_POST['funcName']){
        case "login":
            $user->login($_POST['login'],$_POST['password']);
            break;
        case "save_changes":

            break;
    }
}
?>