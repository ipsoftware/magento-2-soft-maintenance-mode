<?php
/**
 * @category    Ipsoftware
 * @package     Ipsoftware_SoftMaintenanceMode
 * @author      Igor Pochyly
 */

namespace Ipsoftware\SoftMaintenanceMode\Plugin;

use \Magento\Framework\Exception\State\UserLockedException;
use \Ipsoftware\SoftMaintenanceMode\Enum\Enum;

class AuthenticatePlugin extends \Ipsoftware\SoftMaintenanceMode\Plugin\AbstractPlugin
{
    const MODULE_STATUS = 'softmaintenance/general/enable';

    /**
     * @param $subject
     * @param $customerId
     * @param $password
     * @throws UserLockedException
     */
    public function beforeAuthenticate($subject, $customerId, $password)
    {
        if ($this->scopeConfig->getValue(Enum::MODULE_STATUS, $this->scope)) {
            throw new UserLockedException(__('The account is locked.'));
        }
    }
}