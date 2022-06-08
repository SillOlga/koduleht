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

    //-------------------------------------------listItems
elseif($path=='itemsAdmin'){
    $response=controllerAdminItems::ItemsList();

}
//-------------------------------add items
    elseif($path=='itemsAdd'){
        $response=controllerAdminItems::itemsAddForm();

    }    
    elseif($path == 'itemsAddResult') {
    $response = controllerAdminItems::itemsAddResult();
}
//------------------------------------edit items
    elseif($path == 'itemsEdit' && isset($_GET['id'])) {
        $response = controllerAdminItems::itemsEditForm($_GET['id']);

}
elseif($path == 'itemsEditResult' && isset($_GET['id'])) {
    $response = controllerAdminItems::itemsEditResult($_GET['id']);
}
//----------------------------------delete items
elseif($path == 'itemsDel' && isset($_GET['id'])) {
    $response = controllerAdminItems::itemsDeleteForm($_GET['id']);

}
elseif($path == 'itemsDelResult' && isset($_GET['id'])) {
$response = controllerAdminItems::itemsDeleteResult($_GET['id']);
}

    else{

    $response=controllerAdmin::error404();
    
    }


