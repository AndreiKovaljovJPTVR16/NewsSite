<?php

/*
  Выборка данных из таблицы Category
 * добавление, изменение и удаление данных
 * из таблицы Category
 */

/**
 * Description of modelCategory
 *
 * @author pupil
 */
class modelCategory {

    //put your code here
    public static function getCategoryActionList() {
        $sql = 'SELECT * FROM `category` ORDER BY `category`.`category` ASC';
        $db = new db();
        $rowsCat = $db->getAll($sql);
        return $rowsCat;
    }

    public static function getCategoryDetail($id) {

        $sql = "SELECT * FROM `category` WHERE `ID_category` =" . $id;
        $db = new db();
        $row = $db->getOne($sql);
        return $row;
    }

    public static function categoryAdd() {
        $test = false;
        if (isset($_POST['send'])) {

            $idCategory = $_POST['idCategory'];

            //----------------------
            $sql = "INSERT INTO `category` (`ID_category`, `category`)";
            $db = new db();
            $item = $db->executeRun($sql);
            if ($item)
                $test = true;
        }//send
        return $test;
        
        
        
    }
    
    
    

}
