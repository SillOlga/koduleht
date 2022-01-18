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
elseif($path=='newsAdmin'){
    $response=controllerAdminItems::ItemsList();

}
//-------------------------------add items
    elseif($path=='newsAdd'){
        $response=controllerAdminItems::itemsAddForm();

    }    
    elseif($path == 'newsAddResult') {
    $response = controllerAdminItems::itemsAddResult();
}
//------------------------------------edit items
    elseif($path == 'newsEdit' && isset($_GET['id'])) {
        $response = controllerAdminItems::itemsEditForm($_GET['id']);

}
elseif($path == 'newsEditResult' && isset($_GET['id'])) {
    $response = controllerAdminItems::itemsEditResult($_GET['id']);
}
//----------------------------------delete items
elseif($path == 'newsDel' && isset($_GET['id'])) {
    $response = controllerAdminItems::itemsDeleteForm($_GET['id']);

}
elseif($path == 'newsDelResult' && isset($_GET['id'])) {
$response = controllerAdminItems::itemsDeleteResult($_GET['id']);
}

    else{

    $response=controllerAdmin::error404();
    
    }


