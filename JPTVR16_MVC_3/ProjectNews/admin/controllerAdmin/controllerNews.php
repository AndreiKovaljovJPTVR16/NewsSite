<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of controllerNews
 *
 * @author pupil
 */
class controllerNews {

    //put your code here

    public static function newsList() {

        $rows = modelNews::getNewsActionList(); //список новостей
        include_once 'viewAdmin/newsActionList.php';
    }

//newsList
    //-----ADD
    public static function newsAddForm() {

        $rowsCat = modelCategory::getCategoryActionList(); //список категории
        include_once 'viewAdmin/newsAddForm.php'; //!!!!!!
    }

    public static function newsAddResult() {
        $test = modelNews::newsAdd();
        include_once 'viewAdmin/newsAddResult.php';
    }

    //---------edit
    public static function newsEditForm($id) {
        $rowsCat = modelCategory::getCategoryActionList(); //список категории
        // одна новость по id
        $row = modelNews::getNewsDetail($id);

        include_once 'viewAdmin/newsEditForm.php';
    }

    public static function newsEditResult($id) {
        $test = modelNews::newsEdit($id);
        include_once 'viewAdmin/newsEditResult.php';
    }

    //-------------------------delete

    public static function newsDeleteForm($id) {
        $rowsCat = modelCategory::getCategoryActionList(); //список категории
        // одна новость по id
        $row = modelNews::getNewsDetail($id);

        include_once 'viewAdmin/newsDeleteForm.php';
    }

    public static function newsDeleteResult($id) {
        $test = modelNews::newsDelete($id);
        include_once 'viewAdmin/newsDeleteResult.php';
    }

//edit form
//add
}

//class
