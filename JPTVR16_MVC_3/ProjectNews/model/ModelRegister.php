<?php

/*
 * To change this license header, choose License Headers in Project Properties. 
 * To change this template file, choose Tools | Templates 
 * and open the template in the editor. 
 */

/**
 * Description of ModelRegister 
 * 
 * @author pupil 
 */
class ModelRegister {

    public function registerUser() {
        $result = array('false', 'error');
        if (isset($_POST['send'])) {
//обработка 
            $errorString = "";
            $username = $_POST['username'];
            if (trim($username) == "") {
                $errorString .= '<br>No name';
            }
            $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
            if (!$email) {
                $errorString .= '<br>Email Not Valid';
            }

            $password = trim($_POST['password']);
            $confirm = trim($_POST['confirm']);

            if (mb_strlen($password) < 6) {
                $errorString .= "<br>Пароль должен быть 6 или более символов";
            }
            if ($password !== $confirm) {
                $errorString .= "<br>Пароли не совпадают";
            }
            if (mb_strlen($errorString) == 0) {
//Ноль ошибок 
//1. кодируем пароль 
                $options = [
                    'salt' => '01234567890123456789ab', // 22 -> 22 и более символа необходимо 
                    'cost' => 10, // >4 <15 по умолчанию 10 циклов 
                ];

                $passwordHash = password_hash($password, PASSWORD_DEFAULT, $options);

//2.Запрос и запись в таблицу user 
                $sql = "insert into user (ID_user, username, email, password, status,pass) values(null, '$username','$email','$passwordHash',0,'$password')";
                $db = new db();
                $item = $db->executeRun($sql);
                if ($item)
                    $result = array(true);
                else
                    $result = array(false, "Пользователь с таким именем уже существует");
            }//errorString 
            else {
                $result = array(false, $errorString);
            }
        }

        return $result;
    }

}

//class