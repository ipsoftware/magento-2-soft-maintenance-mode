<?php
/**
 * @category    Ipsoftware
 * @package     Ipsoftware_SoftMaintenanceMode
 * @author      Igor Pochyly
 */

namespace Ipsoftware\SoftMaintenanceMode\Plugin;

use \Ipsoftware\SoftMaintenanceMode\Enum\Enum;

/**
 * Class IsSalablePlugin
 * @package Ipsoftware\SoftMaintenanceMode\Plugin
 */
class IsSalablePlugin extends \Ipsoftware\SoftMaintenanceMode\Plugin\AbstractPlugin
{

    /**
     * @return bool
     */
    public function afterIsSalable(): bool
    {
        if ($this->scopeConfig->getValue(Enum::MODULE_STATUS, $this->scope)) {
            return false;
        }
        return true;
    }
}