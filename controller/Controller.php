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
        include_once 'view/allnews.php';
    }

    public static function ItemsByCatID($id) {
        $arr = Items::getItemsByCategoryID($id);
        include_once 'view/catnews.php';
    }

    public static function ItemsByID($id)   {
        $n = Items::getItemsByID($id);
        include_once 'view/readnews.php';
    }

    public static function error404() {
        include_once 'view/error404.php';
    }
    public static function info() {
        include_once 'view/info.php';
    }
    
    public static function InsertComment($c, $id) {
        Comments::InsertComment($c, $id);
        //self::NewsByID($id);
        header ('Location:news?id='.$id.'#ctable');
    }
// список комментариев
    public static function Comments($newsid)    {
        $arr = Comments::getCommentByItemsID($newsid);
        ViewComments::CommentsByItems($arr);

    }
// количество комментариев к новости
    public static function CommentsCount($newsid)    {
        $arr = Comments::getCommentsCountByItemsID($newsid);
        ViewComments::CommentsCount($arr);

    }
// ссылка - переход к списку комментариев
    public static function CommentsCountWithAncor($newsid)    {
        $arr = Comments::getCommentsCountByItemsID($newsid);
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