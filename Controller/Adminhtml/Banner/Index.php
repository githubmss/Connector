<?php

namespace Magentomobileshop\Connector\Controller\Adminhtml\Banner;

class Index extends \Magento\Backend\App\Action
{
    /**
     * Index action
     *
     * @return void
     */
    public function execute()
    {
        return $this->getResponse()->setBody('Banner Hello Support');
    }
}
