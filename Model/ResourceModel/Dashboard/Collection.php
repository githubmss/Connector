<?php
namespace Magentomobileshop\Connector\Model\ResourceModel\Dashboard;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    private $idFieldName = 'id';
    //@codingStandardsIgnoreStart
    protected function _construct()
    {
        $this->_init(

            'Magentomobileshop\Connector\Model\Dashboard',
            'Magentomobileshop\Connector\Model\ResourceModel\Dashboard'
        );
    }//@codingStandardsIgnoreEnd
}
