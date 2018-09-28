<?php
namespace Magentomobileshop\Connector\Model\ResourceModel;

class Dashboard extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    private $idFieldName = 'id';//@codingStandardsIgnoreStart
    public function __construct(
        \Magento\Framework\Model\ResourceModel\Db\Context $context,
        $resourcePrefix = null
    ) {
        parent::__construct($context, $resourcePrefix);
    }

    protected function _construct()
    {
        $this->_init('magentomobileshop_dashboard', 'id');
    }//@codingStandardsIgnoreEnd
}
