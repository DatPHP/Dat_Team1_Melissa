<?php

namespace Team1\Banner\Controller\Index;

use Magento\Framework\App\Action\Context;
use Team1\Banner\Model\TestFactory;
class Save extends \Magento\Framework\App\Action\Action
{
    /**
     * @var Test
     */
    protected $_test;

    public function __construct(
        Context $context,
        TestFactory $test
    ) {
        $this->_test = $test;
        parent::__construct($context);
    }
    public function execute()
    {
        $data = $this->getRequest()->getParams();
        $test = $this->_test->create();
        $test->setData($data);
        if($test->save()){
            $this->messageManager->addSuccessMessage(__('You saved the data.'));
        }else{
            $this->messageManager->addErrorMessage(__('Data was not saved.'));
        }
        $resultRedirect = $this->resultRedirectFactory->create();
        $resultRedirect->setPath('Banner/index/index');
        return $resultRedirect;
    }
}