<?php

//разрешено авторизированным пользователем
session_start();

include_once'../inc/db.php';
include_once 'modelAdmin/modelAdmin.php';
include_once 'modelAdmin/modelNews.php';

include_once 'modelAdmin/modelCategory.php';



include_once 'controllerAdmin/controllerAdmin.php';
include_once 'controllerAdmin/controllerNews.php';
include_once 'controllerAdmin/controllerCategory.php';

include_once 'routeAdmin/routingAdmin.php';

echo $response;
