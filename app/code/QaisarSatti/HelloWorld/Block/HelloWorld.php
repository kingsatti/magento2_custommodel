<?php 


namespace QaisarSatti\HelloWorld\Block;

class HelloWorld extends \Magento\Framework\View\Element\Template
{
    protected $_helloworldFactory;
   public function __construct(
       \Magento\Backend\Block\Template\Context $context,
      \QaisarSatti\HelloWorld\Model\HelloworldFactory $helloworldFactory,
       array $data = []
   ) {
  
       $this->_helloworldFactory = $helloworldFactory;
       parent::__construct($context, $data);
   }
   public function getHelloCollection()
        {
            return $this->_helloworldFactory->create()->getCollection();
        }
   


}