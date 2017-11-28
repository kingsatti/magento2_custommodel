<?php


namespace QaisarSatti\HelloWorld\Model;



    class Helloworld extends \Magento\Framework\Model\AbstractModel  
    {   
        protected function _construct()
        {
            $this->_init('QaisarSatti\HelloWorld\Model\ResourceModel\Helloworld');
        }
    }