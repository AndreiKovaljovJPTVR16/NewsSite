<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of controllerCategory
 *
 * @author pupil
 */
class controllerCategory {

    public static function categoryList() {

        $rows = modelCategory::getCategoryActionList(); //список новостей
        include_once 'viewAdmin/categoryActionList.php';
    }

    public static function categoryAddForm() {

        $rowsCat = modelCategory::getCategoryActionList(); //список категории
        include_once 'viewAdmin/categoryAddForm.php'; //!!!!!!
    }
    
     public static function categoryAddResult() {
        $test = modelCategory::categoryAdd();
        include_once 'viewAdmin/categoryAddResult.php';
    }
    
    public static function categoryEditForm($id) {
        $rowsCat = modelCategory::getCategoryActionList(); //список категории
        // одна категория по id
        $row = modelCategory::getCategoryDetail($id);

        include_once 'viewAdmin/categoryEditForm.php';
    }

}
