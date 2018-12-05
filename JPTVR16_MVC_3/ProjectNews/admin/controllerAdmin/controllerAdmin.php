<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of controllerAdmin
 *
 * @author pupil
 */
class controllerAdmin {

    public function error404() {
        include_once 'viewAdmin/error404.php';
    }

    public function formLogin() {
        include_once 'viewAdmin/formLogin.php';
    }

    //авторизация пользователя Админ User
    public function loginUser() {
        $test = modelAdmin::loginUser();

        if ($test[0] == true) {
            include_once 'viewAdmin/startAdmin.php';
        } elseif ($test[0] == false) {

            include_once 'viewAdmin/formLogin.php';
        }
    }

    //logout

    public static function logoutUser() {

        session_destroy();
        unset($_SESSION['sessionID']);
        unset($_SESSION['username']);
        unset($_SESSION['status']);

        include_once 'viewAdmin/formLogin.php';
    }

}

//class
