<?php
namespace Team1\SliderBanner\Block\Widget;
use Magento\Framework\View\Element\Template;
use Magento\Widget\Block\BlockInterface;
class HeroBanner extends Template implements BlockInterface
{
    protected $_template = "widget/herobanner.phtml";
}