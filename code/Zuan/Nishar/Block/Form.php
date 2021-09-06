<?php
namespace Zuan\Nishar\Block;

use \Magento\Framework\View\Element\Template\Context;
 
class Form extends \Magento\Framework\View\Element\Template
{

    public function getActionUrl()
    {
        return $this->getUrl("form/index/save");
    }

    protected $formData;

    public function __construct(Context $context, array $data = [],\Zuan\Nishar\Model\Form $formData)
    {
        $this->formData = $formData;
        parent::__construct($context, $data);
    }

    public function getFormCollection()
    {
        return $this->formData->getCollection();
    }

    public function edit()
    {
        $id = $this->getRequest()->getParam('id');
        $edit = $this->formData->load($id);
        return $edit;
    }
}
?>