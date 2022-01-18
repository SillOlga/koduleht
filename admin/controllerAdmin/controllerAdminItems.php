<?php
class controllerAdminItems{

    //list Items
    public static function ItemsList(){

        $arr=modelAdminItems::getItemsList();
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
        $test = modelAdminItems::getItemsAdd();
        include_once('viewAdmin/newsAddForm.php');
    }
    //-------------------------------------edit
    public static function itemsEditForm($id)
    {
        $arr = modelAdminCategory::getCategoryList();
        $detail=modelAdminItems::getItemsDetail($id);
        include_once('viewAdmin/newsEditForm.php');
    }

    public static function itemsEditResult($id)
    {
        $test = modelAdminItems::getItemsEdit($id);
        include_once('viewAdmin/newsEditForm.php');
    }
    //-------------------------------------delete
    public static function itemsDeleteForm($id)
    {
        $arr = modelAdminCategory::getCategoryList();
        $detail=modelAdminItems::getItemsDetail($id);
        include_once('viewAdmin/newsDeleteForm.php');
    }

    public static function itemsDeleteResult($id)
    {
        $test = modelAdminItems::getItemsDelete($id);
        include_once('viewAdmin/newsDeleteForm.php');
    }    

}//class
?>