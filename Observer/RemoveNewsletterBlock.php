<?php
/**
 * @category    Ipsoftware
 * @package     Ipsoftware_SoftMaintenanceMode
 * @author      Igor Pochyly
 */

namespace Ipsoftware\SoftMaintenanceMode\Observer;

use \Magento\Framework\Event\Observer;
use \Magento\Framework\Event\ObserverInterface;
use \Magento\Framework\App\Config\ScopeConfigInterface;
use \Magento\Store\Model\ScopeInterface;
use \Ipsoftware\SoftMaintenanceMode\Enum\Enum;

class RemoveNewsletterBlock implements ObserverInterface
{
    /**
     * @var ScopeConfigInterface
     */
    protected $scopeConfig;

    /**
     * RemoveNewsletterBlock constructor.
     * @param ScopeConfigInterface $scopeConfig
     */
    public function __construct(
         ScopeConfigInterface $scopeConfig
    )
    {
        $this->scopeConfig = $scopeConfig;
    }

    /**
     * @param Observer $observer
     */
    public function execute(Observer $observer)
    {
        /** @var \Magento\Framework\View\Layout $layout */
        $layout = $observer->getLayout();
        $block = $layout->getBlock('form.subscribe');
        if ($block) {
            $remove = $this->scopeConfig->getValue(
                Enum::MODULE_STATUS,
                ScopeInterface::SCOPE_STORE
            );

            if ($remove) {
                $layout->unsetElement('form.subscribe');
            }
        }
    }
}