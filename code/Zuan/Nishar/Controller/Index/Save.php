<?php
 
namespace Zuan\Nishar\Controller\Index;
 
use Magento\Framework\App\Action\Context;
 
class Save extends \Magento\Framework\App\Action\Action
{
    protected $_resultPageFactory;

    protected $formData;

    protected $messageManager;
 
    public function __construct(Context $context, \Magento\Framework\View\Result\PageFactory $resultPageFactory,
                               \Zuan\Nishar\Model\Form $formData,\Magento\Framework\Event\ManagerInterface $messageManager)

    {
        $this->_resultPageFactory = $resultPageFactory;
        $this->formData=$formData;
        $this->messageManager=$messageManager;
        parent::__construct($context);
    }
 
    public function execute()
    {
        try{
        $data=$this->getRequest()->getParams();
        $id=$this->getRequest()->getParam('id');
        if($id){
            $model=$this->formData->load($id);
            $model->setData($data);
            $model->save();
            $this->messageManager->addSuccess(__("Form updated Successfuly"));
        }
        else{
        $model=$this->formData;
        $model->setData($data);
        $model->save();
        $this->messageManager->addSuccess(__("Form Saved Successfuly"));
        }
        }
        catch(\Exception $e)
        {
            $this->messageManager->addError(__("Error"));

        }
        return $this->_redirect('form/index/view');
    }
}