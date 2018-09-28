<?php

namespace Magentomobileshop\Connector\Model;

class Dashboard extends \Magento\Framework\Model\AbstractModel
{
        const STATUS_ENABLED = 1;
        const STATUS_DISABLED = 0;
        //@codingStandardsIgnoreStart
    protected function _construct()
    {
        $this->_init('Magentomobileshop\Connector\Model\ResourceModel\Dashboard');
    }
    public function getAvailableStatuses()
    {
        $availableOptions = ['1' => 'Enable',
                           '0' => 'Disable'];
        return $availableOptions;
    }//@codingStandardsIgnoreEnd
}
