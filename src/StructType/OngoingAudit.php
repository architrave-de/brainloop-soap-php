<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OngoingAudit StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:OngoingAudit
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class OngoingAudit extends Audit
{
    /**
     * The AuditTask
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $AuditTask;
    /**
     * Constructor method for OngoingAudit
     * @uses OngoingAudit::setAuditTask()
     * @param string $auditTask
     */
    public function __construct($auditTask = null)
    {
        $this
            ->setAuditTask($auditTask);
    }
    /**
     * Get AuditTask value
     * @return string|null
     */
    public function getAuditTask()
    {
        return $this->AuditTask;
    }
    /**
     * Set AuditTask value
     * @param string $auditTask
     * @return \Brainloop\Soap\StructType\OngoingAudit
     */
    public function setAuditTask($auditTask = null)
    {
        // validation for constraint: string
        if (!is_null($auditTask) && !is_string($auditTask)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($auditTask)), __LINE__);
        }
        $this->AuditTask = $auditTask;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\OngoingAudit
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
