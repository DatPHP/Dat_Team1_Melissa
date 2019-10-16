<?php
namespace Team1\Article\Model;
use Magento\Framework\Model\AbstractModel;
class Test extends AbstractModel
{
    /**
     * Define resource model
     */
    protected function _construct()
    {
        $this->_init('Team1\Article\Model\ResourceModel\Test');
    }
}