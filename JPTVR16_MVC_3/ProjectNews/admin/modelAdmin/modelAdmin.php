<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class modelAdmin {

    //проверка данных формы с данными базы таблицы user
    //создавать переменные сессии
    public static function loginUser() {
        if (isset($_SESSION['sessionID'])) {
            $test = array(true);
        } else {
            $test = array(false, 'Неправильное имя пользователя или пароль!');
            if (isset($_POST['send'])) {
                if (isset($_POST['username']) && $_POST['username'] != "" && isset($_POST['password']) && $_POST['password'] != "") {
                    $username = $_POST['username'];
                    $password = $_POST['password'];
                    $sql = 'SELECT * FROM `user` WHERE `username`="' . $username . '"';
                    $db = new db();
                    $item = $db->getOne($sql); //одна строка
                    //  return $item;
                    if ($item != null) {
                        //проверяем пароль
                        if (password_verify($password, $item['password'])) {
                            $test = array(true); //допуск есть
                            $_SESSION['sessionID'] = session_id();
                            $_SESSION['username'] = $username; //$item['username']
                            $_SESSION['status'] = $item['status'];
                        }//password verify
                    }//not null
                }//post
            }//send
        }//else

        return $test;
    }

//function
}
