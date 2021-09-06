<?php

namespace Zuan\Nishar\Model;

use Magento\Framework\Model\AbstractModel;

class Form extends AbstractModel
{
    /**
     * Define resource model
     */
    protected function _construct()
    {
        $this->_init('Zuan\Nishar\Model\ResourceModel\Form');
    }
}