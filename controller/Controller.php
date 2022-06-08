<?php

class Controller {

    public static function StartSite() {
        $arr = Items::getLast10Items();
        include_once 'view/start.php';
    }

    public static function AllCategory() {
        $arr = Category::getAllCategory();
        include_once 'view/category.php';
    }

    public static function AllItems() {
        $arr = Items::getAllItems();
        include_once 'view/allitems.php';
    }

    public static function ItemsByCatID($id) {
        $arr = Items::getItemsByCategoryID($id);
        include_once 'view/catitems.php';
    }

    public static function ItemsByID($id)   {
        $n = Items::getItemsByID($id);
        include_once 'view/readitems.php';
    }

    public static function SearchItems($search)
    {
        $arr = Items::getSearchItems($search);
        include_once 'view/searchview.php';
    }

    public static function error404() {
        include_once 'view/error404.php';
    }
    public static function info() {
        include_once 'view/info.php';
    }
    
    public static function InsertComment($c, $id) {
        Comments::InsertComment($c, $id);
        //self::ItemsByID($id);
        header ('Location:items?id='.$id.'#ctable');
    }
// список комментариев
    public static function Comments($itemsid)    {
        $arr = Comments::getCommentByItemsID($itemsid);
        ViewComments::CommentsByItems($arr);

    }
// количество комментариев к новости
    public static function CommentsCount($itemsid)    {
        $arr = Comments::getCommentsCountByItemsID($itemsid);
        ViewComments::CommentsCount($arr);

    }
// ссылка - переход к списку комментариев
    public static function CommentsCountWithAncor($itemsid)    {
        $arr = Comments::getCommentsCountByItemsID($itemsid);
        ViewComments::CommentsCountWithAncor($arr);
    }
//--------------------------------------------РЕГИСТРАЦИЯ
    public static function registerForm()
    {
        include_once('view/formRegister.php');
    }
    public static function registerUser()
    {
        $result = Register::registerUser();

        include_once('view/answerRegister.php');
    }
    
}//class