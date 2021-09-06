<?php
 
namespace Zuan\Nishar\Controller\Index;
 
use Magento\Framework\App\Action\Context;
 
class Delete extends \Magento\Framework\App\Action\Action
{
    protected $_resultPageFactory;

    protected $formData;

    protected $messageManager;
 
    public function __construct(Context $context, \Magento\Framework\View\Result\PageFactory $resultPageFactory,\Zuan\Nishar\Model\Form $formData,
    \Magento\Framework\Event\ManagerInterface $messageManager)
    {
        $this->_resultPageFactory = $resultPageFactory;
        $this->formData = $formData;
        $this->messageManager=$messageManager;
        parent::__construct($context);
    }
 
    public function execute()
    {
    try{
    $id = $this->getRequest()->getParam('id');
    $delete = $this->formData->load($id);
    $delete->delete();
    $this->messageManager->addSuccess(__("Form deleted Successfuly"));
    }
    catch(\Exception $e)
    {
        $this->messageManager->addError(__("Error"));

    }
    return $this->_redirect('form/index/view');
    }
}