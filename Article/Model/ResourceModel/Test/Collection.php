<?php
namespace Team1\Article\Model\ResourceModel\Test;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    /**
     * Define model & resource model
     */
    protected function _construct()
    {
        $this->_init(
            'Team1\Article\Model\Test',
            'Team1\Article\Model\ResourceModel\Test'
        );
    }
}