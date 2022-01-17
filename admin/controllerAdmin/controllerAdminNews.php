<?php
class controllerAdminNews{

    //list Items
    public static function ItemsList(){

        $arr=modelAdminNews::getItemsList();
        include_once 'viewAdmin/newsList.php';
        }
    //---------------------------------------add
    public static function itemsAddForm()
    {
        $arr = modelAdminCategory::getCategoryList();
        include_once('viewAdmin/newsAddForm.php');
    } 
    
    public static function itemsAddResult()
    {
        $test = modelAdminNews::getItemsAdd();
        include_once('viewAdmin/newsAddForm.php');
    }
    //-------------------------------------edit
    public static function itemsEditForm($id)
    {
        $arr = modelAdminCategory::getCategoryList();
        $detail=modelAdminNews::getItemsDetail($id);
        include_once('viewAdmin/newsEditForm.php');
    }

    public static function itemsEditResult($id)
    {
        $test = modelAdminNews::getItemsEdit($id);
        include_once('viewAdmin/newsEditForm.php');
    }
    //-------------------------------------delete
    public static function itemsDeleteForm($id)
    {
        $arr = modelAdminCategory::getCategoryList();
        $detail=modelAdminNews::getItemsDetail($id);
        include_once('viewAdmin/newsDeleteForm.php');
    }

    public static function itemsDeleteResult($id)
    {
        $test = modelAdminNews::getItemsDelete($id);
        include_once('viewAdmin/newsDeleteForm.php');
    }    

}//class
?>