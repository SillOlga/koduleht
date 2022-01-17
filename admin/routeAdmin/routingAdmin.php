<?php
$host = explode('?', $_SERVER['REQUEST_URI'])[0];
$num=substr_count($host, '/');
$path = explode('/', $host)[$num];

if ($path == '' OR $path == 'index.php' )
{
    // Главная страница - 
    $response = controllerAdmin::formLoginSite();
}
//------Вход------------------------------------------
elseif ($path == 'login')
{
    // Форма входа
    $response = controllerAdmin::loginAction();
}
elseif ($path == 'logout'){

    $response = controllerAdmin::logoutAction();
}

    //-------------------------------------------listNews
elseif($path=='newsAdmin'){
    $response=controllerAdminNews::ItemsList();

}
//-------------------------------add items
    elseif($path=='newsAdd'){
        $response=controllerAdminNews::itemsAddForm();

    }    
    elseif($path == 'newsAddResult') {
    $response = controllerAdminNews::itemsAddResult();
}
//------------------------------------edit items
    elseif($path == 'newsEdit' && isset($_GET['id'])) {
        $response = controllerAdminNews::itemsEditForm($_GET['id']);

}
elseif($path == 'newsEditResult' && isset($_GET['id'])) {
    $response = controllerAdminNews::newsEditResult($_GET['id']);
}
//----------------------------------delete news
elseif($path == 'newsDel' && isset($_GET['id'])) {
    $response = controllerAdminNews::newsDeleteForm($_GET['id']);

}
elseif($path == 'newsDelResult' && isset($_GET['id'])) {
$response = controllerAdminNews::newsDeleteResult($_GET['id']);
}

    else{

    $response=controllerAdmin::error404();
    
    }


