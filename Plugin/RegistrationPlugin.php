<?php
/**
 * @category    Ipsoftware
 * @package     Ipsoftware_SoftMaintenanceMode
 * @author      Igor Pochyly
 */

namespace Ipsoftware\SoftMaintenanceMode\Plugin;

use \Magento\Customer\Model\Registration;
use \Ipsoftware\SoftMaintenanceMode\Enum\Enum;

/**
 * Class RegistrationPlugin
 * @package Ipsoftware\SoftMaintenanceMode\Plugin
 */
class RegistrationPlugin extends \Ipsoftware\SoftMaintenanceMode\Plugin\AbstractPlugin
{

    /**
     * @param Registration $subject
     * @param $result
     * @return bool
     */
    public function afterIsAllowed(Registration $subject, $result)
    {
        if ($this->scopeConfig->getValue(Enum::MODULE_STATUS, $this->scope)) {
            return false;
        }
        return true;
    }
}