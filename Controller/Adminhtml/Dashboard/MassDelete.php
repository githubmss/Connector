<?php
namespace Magentomobileshop\Connector\Controller\Adminhtml\Dashboard;

use Magentomobileshop\Connector\Model\ResourceModel\Dashboard\CollectionFactory;
use Magento\Backend\App\Action\Context;
use Magento\Framework\Controller\ResultFactory;
use Magento\Ui\Component\MassAction\Filter;

class MassDelete extends \Magento\Backend\App\Action
{
    private $filter;
    private $collectionFactory;//@codingStandardsIgnoreStart
    public function __construct(
        Context $context,
        Filter $filter,
        CollectionFactory $collectionFactory
    ) {
        $this->filter            = $filter;
        $this->collectionFactory = $collectionFactory;
        parent::__construct($context);
    }

    public function execute()
    {
        $collection    = $this->filter->getCollection($this->collectionFactory->create());
        $recordDeleted = 0;
        foreach ($collection->getItems() as $auctionProduct) {
            $this->_massDeleteMss($auctionProduct);
        }

        $this->messageManager->addSuccess(
            __('A total of %1 record(s) have been deleted.', count($collection->getItems()))
        );

        return $this->resultFactory->create(ResultFactory::TYPE_REDIRECT)->setPath('*/*/index');
    }
    protected function _isAllowed()
    {
        return $this->_authorization->isAllowed('Magentomobileshop_Connector::massdelete');
    }

    private function _massDeleteMss($auctionProduct)
    {
        $objectData = \Magento\Framework\App\ObjectManager::getInstance();
        $row        = $objectData->get('Magentomobileshop\Connector\Model\Dashboard')->load($auctionProduct->getId());
        return $row->delete();
    }//@codingStandardsIgnoreEnd
}
