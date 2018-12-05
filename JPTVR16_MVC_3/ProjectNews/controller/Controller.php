<?php

/*
 * 
 */

/**
 * Description of Controller
 *
 * @author pupil
 */
class Controller {

    //put your code here


    public function startSite($param = null) {
        //получить три последних новости и вывести на старт страницу
        $rows = Model::getNewsLimit3();

        include_once 'view/main.php';
    }

    public function detailNews($id) {

        $row = Model::getDetailNews($id);

        $rows = Model::getPictureNews($id);

        include_once 'view/detailNews.php';
    }

    public function listNews() {

        $rows = Model::getListNews();
        $rowsC = Model::getCategoryList();
        include_once 'view/listNews.php';
    }

//------- page category news
    public function detailCategoryNews($id) {
        $category = Model::getCategoryOne($id); //получить название выбранной категории


        $rowsC = Model::getCategoryList();

        $rows = Model::getCategoryNews($id); //новости по выбранной категории



        include_once 'view/listNews.php';
    }

//-------------------------------------------------contact
    //страница контакт

    public function contactForm() {
        include_once('view/contact.php');
    }

    public function contactSend() {
        // send_contacnt.php - обработка нашей формы
        include_once('view/send_contact.php');
    }

    public function newsSearch($text) {
        //категории список!!
        $rowsC = Model::getCategoryList();
        $rows = Model::getNewsSearch($text);
        //поиск новостей по запросу


        include_once 'view/listNews.php';
    }

    //-----------------------register
    public function registerForm() {

        include_once 'view/registerForm.php';
    }

    public function registerAnswer() {

        $result = ModelRegister::registerUser();

        include_once 'view/registerAnswer.php';
    }

    //---------------error404
    public function error404() {
        include_once 'view/error_404.php';
    }

//404
}

//class
