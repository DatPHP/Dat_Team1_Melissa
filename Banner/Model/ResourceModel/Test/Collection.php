<?php
namespace Team1\Banner\Model\ResourceModel\Test;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    /**
     * Define model & resource model
     */
    protected function _construct()
    {
        $this->_init(
            'Team1\Banner\Model\Test',
            'Team1\Banner\Model\ResourceModel\Test'
        );
    }
}