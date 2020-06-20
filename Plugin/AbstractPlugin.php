<?php
/**
 * @category    Ipsoftware
 * @package     Ipsoftware_SoftMaintenanceMode
 * @author      Igor Pochyly
 */

namespace Ipsoftware\SoftMaintenanceMode\Plugin;

use \Magento\Framework\App\Http\Context;
use \Magento\Framework\App\Config\ScopeConfigInterface;
use \Magento\Store\Model\ScopeInterface;

/**
 * Class AbstractPlugin
 * @package Ipsoftware\SoftMaintenanceMode\Plugin
 */
abstract class AbstractPlugin
{
    /**
     * Scope config
     *
     * @var ScopeConfigInterface
     */
    protected $scopeConfig;

    /**
     * HTTP Context
     * Customer session is not initialized yet
     *
     * @var Context
     */
    protected $context;

    /**
     * @var string
     */
    protected $scope;

    /**
     * AbstractPlugin constructor.
     * @param ScopeConfigInterface $scopeConfig
     * @param Context $context
     */
    public function __construct(
        ScopeConfigInterface $scopeConfig,
        Context $context
    )
    {
        $this->scopeConfig = $scopeConfig;
        $this->context = $context;
        $this->scope = ScopeInterface::SCOPE_STORE;
    }
}