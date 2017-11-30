<?php

namespace QaisarSatti\HelloWorld\Controller\Index;

class Index extends \Magento\Framework\App\Action\Action

{

	protected $hello;

    public function __construct(\Magento\Framework\App\Action\Context $context,
                                \QaisarSatti\HelloWorld\Model\HelloworldFactory $helloworld)
    {
        $this->hello = $helloworld;
        parent::__construct($context);
    }

	public function execute()
	{   
        $model = $this->hello->create();
        $data=array('title'=>'Working','content'=>'this is sure working');
        $model->setData($data);
        $model->save();    
		$this->_view->loadLayout();
		$this->_view->renderLayout();
	}

}