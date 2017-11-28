<?php


namespace QaisarSatti\HelloWorld\Model\ResourceModel\Helloworld;


use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;


class Collection extends AbstractCollection

{

    protected function _construct()
    {

        $this->_init(
        'QaisarSatti\HelloWorld\Model\Helloworld',
        'QaisarSatti\HelloWorld\Model\ResourceModel\Helloworld');

    }

}