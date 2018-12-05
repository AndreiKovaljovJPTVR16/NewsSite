<?php

$host = explode('?', $_SERVER['REQUEST_URI'])[0];
$num = substr_count($host, '/');
$uri = explode('/', $host)[$num]; // название маршрута, переданного ссылкой или формой
//-------------------------------

if ($uri == '' || $uri == 'index' || $uri == 'home') {
    $response = Controller::startSite();
} elseif ($uri == 'detail') {
    if (isset($_GET['id'])) {
        $id = $_GET['id']; // id новости!
        $response = Controller::detailNews($id);
    } else {
        $response = Controller::error404();
    }
} elseif ($uri == 'news') {
    $response = Controller::listNews();
} elseif ($uri == 'category') {
    if (isset($_GET['id'])) {
        $id = $_GET['id']; // id category!
        $response = Controller::detailCategoryNews($id);
    } else {
        $response = Controller::error404();
    }
} elseif ($uri == 'contact') {
    $response = Controller::contactForm();
} elseif ($uri == 'send_contact') {
    $response = Controller::contactSend();
} elseif ($uri == 'search') {
    if (isset($_GET['text'])) {
        $text = $_GET['text'];
        $response = Controller::newsSearch($text);
    } else {
        $response = Controller::error404();
    }
}

//---------------------------------register form
elseif ($uri == 'register') {
    $response = Controller::registerForm();
} elseif ($uri == 'answer') {
    $response = Controller::registerAnswer();
} else {
    $response = Controller::error404();
}



















