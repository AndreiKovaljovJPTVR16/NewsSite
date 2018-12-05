<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of modelNews
 *
 * @author pupil
 */
class modelNews {

    //--NewsList
    public static function getNewsActionList() {
        $sql = 'SELECT news.*, category.* FROM news, category WHERE news.idCategory=category.ID_category ORDER BY news.date DESC';
        $db = new db();
        $rows = $db->getAll($sql);
        return $rows;
    }

    //------------newsDetail - одна новость
    public static function getNewsDetail($id) {

        $sql = "SELECT * FROM `news` WHERE `ID_news` =" . $id;
        $db = new db();
        $row = $db->getOne($sql);
        return $row;
    }

//list

    public static function newsAdd() {
        $test = false;
        if (isset($_POST['send'])) {

            $title = $_POST['title'];
            $newsText = $_POST['newsText'];
            $idCategory = $_POST['idCategory'];
            $date = $_POST['date'];
            //----------------picture
            $newsPicture = $_FILES['picture']['name']; //имя файла для загрузки
            if ($newsPicture != "") {
                $uploadDir = '../images/'; //создать директорию
                $uploadFile = $uploadDir . $newsPicture;
                copy($_FILES['picture']['tmp_name'], $uploadFile); //tmp-промежуточное имя
            } else {
                $newsPicture = 'newsphoto.php';
            }
            //----------------------запрос на добавление в базу и таблица news
            $sql = "INSERT INTO `news` (`ID_news`, `idCategory`, `title`, `news Text`, `date`, `newsPicture`) "
                    . "VALUES (NULL, '$idCategory', '$title', '$newsText', '$date', '$newsPicture')";
            $db = new db();
            $item = $db->executeRun($sql);
            if ($item)
                $test = true;
        }//send
        return $test;
    }

    public static function newsEdit($id) {
        $test = false;
        if (isset($_POST['send'])) {

            $title = $_POST['title'];
            $newsText = $_POST['newsText'];
            $idCategory = $_POST['idCategory'];
            $date = $_POST['date'];
            $oldpicture = $_POST['oldpicture'];
            //----------------picture
            $newsPicture = $_FILES['picture']['name']; //имя файла для загрузки
            if ($newsPicture != "") {
                $uploadDir = '../images/'; //создать директорию
                $uploadFile = $uploadDir . $newsPicture;
                copy($_FILES['picture']['tmp_name'], $uploadFile); //tmp-промежуточное имя
                //удаление старой картинки
                //unlink("../images/".$oldpicture);
            } else {
                $newsPicture = $oldpicture;
            }
            //----------------------запрос на добавление в базу и таблица news
            $sql = "UPDATE `news` "
                    . "SET `idCategory` = '$idCategory', `title` = '$title', `news Text` = '$newsText', `date` = '$date', `newsPicture` = '$newsPicture' "
                    . "WHERE `news`.`ID_news` = ".$id;
            $db = new db();
            $item = $db->executeRun($sql);
            if ($item)
                $test = true;
        }//send
        
        
        
        return $test;
    }
    
    
    //-----------------DELETE
    public static function newsDelete($id){
        
        $test=false;
        
        if(isset($_POST['send'])){
            $sql="DELETE FROM news WHERE ID_news=".$id;
            $db = new db();
            $item= $db->executeRun($sql);
            if($item)
                $test = true;
            
        }
        return $test;
    }

//function  
}

//class


