<?php
// вычислить маршрут из адресной строки
    $host = explode('?', $_SERVER['REQUEST_URI']) [0];
    $num = substr_count($host, '/');
    $path = explode('/', $host) [$num];


    if($path == '' OR $path == 'index' OR $path == 'index.php'){
        $response = Controller::StartSite();
    }

    elseif($path == 'all') {
        $response = Controller::AllItems();
    }
    elseif($path == 'category' and isset($_GET['id'])) {
        $response = Controller::ItemsByCatID($_GET['id']);
    }
    elseif($path == 'news' and isset($_GET['id'])) {
        $response = Controller::ItemsByID($_GET['id']);
    }

    elseif($path == 'search' and isset($_GET['search'])) {
        $response = Controller::SearchItems($_GET['search']);
    }

    elseif ($path == 'insertcomment' and isset($_GET['comment'], $_GET['id']))
    {
        $response = Controller::InsertComment($_GET['comment'], $_GET['id']);
        
    }
    //----------------register user
elseif ($path == 'registerForm' )
{    // form register

    $response = Controller::registerForm();
}
elseif ($path == 'registerAnswer' )
{    // register user

    $response = Controller::registerUser();
}

//--------------------------delete news
elseif ($path =='newsDel' && isset($_GET['id'])){
    $response=controllerAdminItems::itemsDeleteForm($_GET['id']);

}
elseif ($path == 'newsDelResult' && isset($_GET['id'])) {
    $response=controllerAdminItems::itemsDeleteResult($_GET['id']);

}
elseif ($path == 'info') {
    $response=Controller::info();

}else{
    $response = Controller::error404();
}
?>
    
            
    



