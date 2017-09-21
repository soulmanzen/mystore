<?php
/**
 * Class Mycompany_Helloworld_TestController
 */
class Mycompany_Helloworld_TestController extends Mage_Core_Controller_Front_Action
{
    public function categoriesAction()
    {
        $categories = Mage::getModel('catalog/category')->getCollection();
        echo '<pre>';
        print_r($categories);
    }
    public function categoryAction()
    {
        $id = (int) $this->getRequest()->getParam('id');
        if (empty($id)) {
            echo 'error: ID is invalid';
        } else {
            $category = Mage::getModel('catalog/category')->load($id);
            echo '<pre>';
            print_r($category);
        }
    }
}