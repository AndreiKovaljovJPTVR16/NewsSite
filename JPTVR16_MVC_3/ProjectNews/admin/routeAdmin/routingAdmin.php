<?php

$host = explode('?', $_SERVER['REQUEST_URI'])[0];
$num = substr_count($host, '/');
$uri = explode('/', $host)[$num]; //маршруты для admin
//echo $uri;

if ($uri == '' OR $uri == 'start' OR $uri == 'index.php') {
    $response = controllerAdmin::formLogin();
} elseif ($uri == 'login') {
    $response = controllerAdmin::loginUser();
} elseif ($uri == 'logout') {
    $response = controllerAdmin::logoutUser();
}
//--------------News Action
elseif ($uri == 'newsAction') {

    $response = controllerNews::newsList();
}
//news ADD
elseif ($uri == 'newsAdd') {
    $response = controllerNews::newsAddForm();
} elseif ($uri == 'newsAddResult') {
    $response = controllerNews::newsAddResult();
}

//news Edit
elseif ($uri == 'newsEdit') {
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $response = controllerNews::newsEditForm($id);
    } else {
        $response = controllerAdmin::error404();
    }
} 

elseif ($uri == 'newsEditResult') {
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $response = controllerNews::newsEditResult($id);
    }
} 
elseif ($uri == 'newsDelete') {
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $response = controllerNews::newsDeleteForm($id);
    } else {
        $response = controllerAdmin::error404();
    }
}

elseif ($uri == 'newsDeleteResult') {
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $response = controllerNews::newsDeleteResult($id);
    }
} 

elseif ($uri == 'categoryAction') {
    $response = controllerCategory::categoryList();
}

elseif ($uri == 'categoryAdd') {
    $response = controllerCategory::categoryAddForm();
} elseif ($uri == 'categoryAddResult') {
    $response = controllerCategory::categoryAddResult();
}


else {
    $response = controllerAdmin::error404();
}