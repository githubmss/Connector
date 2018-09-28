<?php
namespace Magentomobileshop\Connector\Block\Adminhtml\System\Config;

use Magento\Backend\Block\Template\Context;
use Magento\Config\Block\System\Config\Form\Field;
use Magento\Framework\Data\Form\Element\AbstractElement;

class Authorize extends Field
{
    /**
     * @param Context $context
     * @param array $data
     *///@codingStandardsIgnoreStart
    public function __construct(
        Context $context,
        array $data = []
    ) {
        parent::__construct($context, $data);
    }

    /**
     * Remove scope label
     *
     * @param  AbstractElement $element
     * @return string
     */
    public function render(AbstractElement $element)
    {
        $storeScope     = \Magento\Store\Model\ScopeInterface::SCOPE_STORE;
        $_objectData = \Magento\Framework\App\ObjectManager::getInstance();
        $scopeConfig    = $_objectData->get('Magento\Framework\App\Config\ScopeConfigInterface');
        $html           = '';
        if (!$scopeConfig->getValue('payment/authorizenet/active')) {
            $html = "<div id='messages'><ul class='messages'>
            <li class='error-msg'>Authorize net directpost Payment method is Disabled,
             Kindly Enable method to make it work with mobile app.<span></span></li></ul></div>";
        }
        return $html;//@codingStandardsIgnoreEnd
    }
}
