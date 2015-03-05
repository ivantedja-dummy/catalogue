<?php

class Tedja_Tcheckout_Model_Observer
{
    /**
     * Force send to no route
     *
     * @param   Varien_Event_Observer $observer
     * @return  Tedja_Tcheckout_Model_Observer
     */
    public function sendNoroute(Varien_Event_Observer $observer)
    {
        $controllerAction = $observer->getEvent()->getControllerAction();
        $controllerAction->norouteAction();
        $controllerAction->setFlag('', Mage_Core_Controller_Varien_Action::FLAG_NO_DISPATCH,true);
        return $this;
    }
}
