<?php

namespace Zuan\Nishar\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Form extends AbstractDb
{
    /**
     * Define main table
     */
    protected function _construct()
    {
        $this->_init('Nishar_Form', 'id');
    }
}