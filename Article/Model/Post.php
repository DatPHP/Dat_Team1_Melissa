<?php
namespace Mageplaza\HelloWorld\Model;
class Post extends \Magento\Framework\Model\AbstractModel implements \Magento\Framework\DataObject\IdentityInterface
{
    const CACHE_TAG = 'Team1_article_post';

    protected $_cacheTag = 'Team1_article_post';

    protected $_eventPrefix = 'Team1_article_post';

    protected function _construct()
    {
        $this->_init('Team1\Article\Model\ResourceModel\Post');
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