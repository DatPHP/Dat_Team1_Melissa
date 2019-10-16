<?php
namespace Team1\Article\Model\ResourceModel\Post;

use \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    /**
     * Remittance File Collection Constructor
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Team1\Article\Model\Post', 'Team1\Article\Model\ResourceModel\Post');
    }
}