<?php

class Mycompany_Helloworld_Model_Blogpost extends Mage_Core_Model_Abstract
{
    protected function _construct()
    {
        $this->_init('mycompanyhelloworld/blogpost');
    }
}
//Mage::getModel('mycompanyhelloworld/blogpost');