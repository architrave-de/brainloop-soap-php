<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Audit StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:Audit
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class Audit extends AbstractStructBase
{
    /**
     * The AuditEnd
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $AuditEnd;
    /**
     * The AuditStart
     * @var string
     */
    public $AuditStart;
    /**
     * The AuditedSpaceId
     * @var int
     */
    public $AuditedSpaceId;
    /**
     * The AuditedSpaceName
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $AuditedSpaceName;
    /**
     * The AuditorId
     * @var int
     */
    public $AuditorId;
    /**
     * The AuditorLogin
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $AuditorLogin;
    /**
     * Constructor method for Audit
     * @uses Audit::setAuditEnd()
     * @uses Audit::setAuditStart()
     * @uses Audit::setAuditedSpaceId()
     * @uses Audit::setAuditedSpaceName()
     * @uses Audit::setAuditorId()
     * @uses Audit::setAuditorLogin()
     * @param string $auditEnd
     * @param string $auditStart
     * @param int $auditedSpaceId
     * @param string $auditedSpaceName
     * @param int $auditorId
     * @param string $auditorLogin
     */
    public function __construct($auditEnd = null, $auditStart = null, $auditedSpaceId = null, $auditedSpaceName = null, $auditorId = null, $auditorLogin = null)
    {
        $this
            ->setAuditEnd($auditEnd)
            ->setAuditStart($auditStart)
            ->setAuditedSpaceId($auditedSpaceId)
            ->setAuditedSpaceName($auditedSpaceName)
            ->setAuditorId($auditorId)
            ->setAuditorLogin($auditorLogin);
    }
    /**
     * Get AuditEnd value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getAuditEnd()
    {
        return isset($this->AuditEnd) ? $this->AuditEnd : null;
    }
    /**
     * Set AuditEnd value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $auditEnd
     * @return \Brainloop\Soap\StructType\Audit
     */
    public function setAuditEnd($auditEnd = null)
    {
        // validation for constraint: string
        if (!is_null($auditEnd) && !is_string($auditEnd)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($auditEnd)), __LINE__);
        }
        if (is_null($auditEnd) || (is_array($auditEnd) && empty($auditEnd))) {
            unset($this->AuditEnd);
        } else {
            $this->AuditEnd = $auditEnd;
        }
        return $this;
    }
    /**
     * Get AuditStart value
     * @return string|null
     */
    public function getAuditStart()
    {
        return $this->AuditStart;
    }
    /**
     * Set AuditStart value
     * @param string $auditStart
     * @return \Brainloop\Soap\StructType\Audit
     */
    public function setAuditStart($auditStart = null)
    {
        // validation for constraint: string
        if (!is_null($auditStart) && !is_string($auditStart)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($auditStart)), __LINE__);
        }
        $this->AuditStart = $auditStart;
        return $this;
    }
    /**
     * Get AuditedSpaceId value
     * @return int|null
     */
    public function getAuditedSpaceId()
    {
        return $this->AuditedSpaceId;
    }
    /**
     * Set AuditedSpaceId value
     * @param int $auditedSpaceId
     * @return \Brainloop\Soap\StructType\Audit
     */
    public function setAuditedSpaceId($auditedSpaceId = null)
    {
        // validation for constraint: int
        if (!is_null($auditedSpaceId) && !is_numeric($auditedSpaceId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($auditedSpaceId)), __LINE__);
        }
        $this->AuditedSpaceId = $auditedSpaceId;
        return $this;
    }
    /**
     * Get AuditedSpaceName value
     * @return string|null
     */
    public function getAuditedSpaceName()
    {
        return $this->AuditedSpaceName;
    }
    /**
     * Set AuditedSpaceName value
     * @param string $auditedSpaceName
     * @return \Brainloop\Soap\StructType\Audit
     */
    public function setAuditedSpaceName($auditedSpaceName = null)
    {
        // validation for constraint: string
        if (!is_null($auditedSpaceName) && !is_string($auditedSpaceName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($auditedSpaceName)), __LINE__);
        }
        $this->AuditedSpaceName = $auditedSpaceName;
        return $this;
    }
    /**
     * Get AuditorId value
     * @return int|null
     */
    public function getAuditorId()
    {
        return $this->AuditorId;
    }
    /**
     * Set AuditorId value
     * @param int $auditorId
     * @return \Brainloop\Soap\StructType\Audit
     */
    public function setAuditorId($auditorId = null)
    {
        // validation for constraint: int
        if (!is_null($auditorId) && !is_numeric($auditorId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($auditorId)), __LINE__);
        }
        $this->AuditorId = $auditorId;
        return $this;
    }
    /**
     * Get AuditorLogin value
     * @return string|null
     */
    public function getAuditorLogin()
    {
        return $this->AuditorLogin;
    }
    /**
     * Set AuditorLogin value
     * @param string $auditorLogin
     * @return \Brainloop\Soap\StructType\Audit
     */
    public function setAuditorLogin($auditorLogin = null)
    {
        // validation for constraint: string
        if (!is_null($auditorLogin) && !is_string($auditorLogin)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($auditorLogin)), __LINE__);
        }
        $this->AuditorLogin = $auditorLogin;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\Audit
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
