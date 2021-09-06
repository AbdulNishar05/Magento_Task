<?php

namespace Zuan\Nishar\Model\ResourceModel\Form;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    /**
     * Define model & resource model
     */
    protected function _construct()
    {
        $this->_init(
            'Zuan\Nishar\Model\Form',
            'Zuan\Nishar\Model\ResourceModel\Form'
        );
    }
}