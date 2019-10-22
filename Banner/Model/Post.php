<?php
namespace Mageplaza\HelloWorld\Model;
class Post extends \Magento\Framework\Model\AbstractModel implements \Magento\Framework\DataObject\IdentityInterface
{
    const CACHE_TAG = 'Team1_Banner_post';

    protected $_cacheTag = 'Team1_Banner_post';

    protected $_eventPrefix = 'Team1_Banner_post';

    protected function _construct()
    {
        $this->_init('Team1\Banner\Model\ResourceModel\Post');
    }

    public function getIdentities()
    {
        return [self::CACHE_TAG . '_' . $this->getId()];
    }

    public function getDefaultValues()
    {
        $values = [];

        return $values;
    }
}