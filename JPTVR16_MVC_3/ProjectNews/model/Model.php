<?php

/*
 * Создаем папку model и класс Model
 */

/**
 * Description of Model
 *
 * @author Andrei
 */
class Model {

    //put your code here

    public function getNewsLimit3($param = null) {
        //запрос в таблицу news - получить три последних новости
        $sql = 'SELECT news.*, category.category FROM `news`,category '
                . 'WHERE news.idCategory=category.ID_category '
                . 'ORDER BY news.date DESC LIMIT 3';
        $db = new db(); //соединение с базой данных       
        $rows = $db->getAll($sql);
        return $rows;
    }

//------------------------------

    public function getDetailNews($id) {
        $sql = 'SELECT news.*, category.category FROM `news`,category '
                . 'WHERE news.idCategory=category.ID_category '
                . 'and news.ID_news=' . $id;
        $db = new db();
        $row = $db->getOne($sql); //
        return $row;
    }

    public function getListNews($param = null) {
        $sql = 'SELECT news.*, category.category FROM `news`,category '
                . 'WHERE news.idCategory=category.ID_category '
                . 'ORDER BY news.date';
        $db = new db();
        $rows = $db->getAll($sql);
        return $rows;
    }

//---------------categorylist

    public function getCategoryList() {
        $sql = 'SELECT * FROM `category` ORDER BY `category`.`category` ASC';
        $db = new db();
        $rowsC = $db->getAll($sql);
        return $rowsC;
    }

    //-------------------новости по выбранной категории
    public function getCategoryNews($id) {
        $sql = 'SELECT news.*, category.category FROM news,category WHERE news.idCategory=category.ID_category AND news.idCategory=' . $id;
        $db = new db();
        $rows = $db->getAll($sql);
        return $rows;
    }

//----------------название выбранной категории
    public function getCategoryOne($id) {
        $sql = 'SELECT * FROM `category` WHERE `ID_category`=' . $id;
        $db = new db();
        $row = $db->getOne($sql);
        return $row;
    }

    public function getPictureNews($id) {
        $sql = 'SELECT * FROM `picture` WHERE `idNews`=' . $id;
        $db = new db();
        $rows = $db->getAll($sql);
        return $rows;
    }

    //----------search
    public function getNewsSearch($text) {
        $sql = 'SELECT news.*, category.category FROM `news` ,category '
                . 'WHERE news.idCategory=category.ID_category '
                . 'AND (news.`news Text` LIKE "%' . $text . '%" '
                . 'OR news.`title`LIKE "%' . $text . '%") '
                . 'ORDER BY `news`.`date` DESC';
        $db = new db();
        $rows = $db->getAll($sql);
        return $rows;
    }

}

//class
