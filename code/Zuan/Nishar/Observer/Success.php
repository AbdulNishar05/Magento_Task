<?php
namespace Zuan\Nishar\Observer;
use Magento\Framework\Event\ObserverInterface;

class Success implements ObserverInterface
{
    public function execute(\Magento\Framework\Event\Observer $observer)
    {
        $order=[];
        $order = $observer->getEvent()->getData('order');	


        
    }
}