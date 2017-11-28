<?php

namespace QaisarSatti\HelloWorld\Model\ResourceModel;


use \Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Helloworld extends AbstractDb

{

    protected function _construct()

    {

        $this->_init('blog_posts', 'post_id');

    }

}