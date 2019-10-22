<?php


namespace Team1\ProductSlider\Block\Widget;
use Magento\Framework\View\Element\Template;
use Magento\Widget\Block\BlockInterface;


class ProductSlider extends Template implements BlockInterface
{

    protected $_template = "widget/productslider.phtml";
    protected $categoryFactory;

    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Magento\Catalog\Model\CategoryFactory $categoryFactory
    ) {
        $this->categoryFactory = $categoryFactory;
        parent::__construct($context);
    }

    public function getCategoryProduct($categoryId, $sizeofview)
    {
        $category = $this->categoryFactory->create()->load($categoryId)
            ->getProductCollection()
            ->addAttributeToSelect('*')
            ->setPageSize($sizeofview);
        return $category;
    }


    public function getConfigs()
    {
        return $data = $this->getData();
    }

}