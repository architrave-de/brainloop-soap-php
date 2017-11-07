<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HasDRPermissionsForUserResponse StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class HasDRPermissionsForUserResponse extends AbstractStructBase
{
    /**
     * The HasDRPermissionsForUserResult
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Brainloop\Soap\StructType\Valueboolean
     */
    public $HasDRPermissionsForUserResult;
    /**
     * Constructor method for HasDRPermissionsForUserResponse
     * @uses HasDRPermissionsForUserResponse::setHasDRPermissionsForUserResult()
     * @param \Brainloop\Soap\StructType\Valueboolean $hasDRPermissionsForUserResult
     */
    public function __construct(\Brainloop\Soap\StructType\Valueboolean $hasDRPermissionsForUserResult = null)
    {
        $this
            ->setHasDRPermissionsForUserResult($hasDRPermissionsForUserResult);
    }
    /**
     * Get HasDRPermissionsForUserResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Brainloop\Soap\StructType\Valueboolean|null
     */
    public function getHasDRPermissionsForUserResult()
    {
        return isset($this->HasDRPermissionsForUserResult) ? $this->HasDRPermissionsForUserResult : null;
    }
    /**
     * Set HasDRPermissionsForUserResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Brainloop\Soap\StructType\Valueboolean $hasDRPermissionsForUserResult
     * @return \Brainloop\Soap\StructType\HasDRPermissionsForUserResponse
     */
    public function setHasDRPermissionsForUserResult(\Brainloop\Soap\StructType\Valueboolean $hasDRPermissionsForUserResult = null)
    {
        if (is_null($hasDRPermissionsForUserResult) || (is_array($hasDRPermissionsForUserResult) && empty($hasDRPermissionsForUserResult))) {
            unset($this->HasDRPermissionsForUserResult);
        } else {
            $this->HasDRPermissionsForUserResult = $hasDRPermissionsForUserResult;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\HasDRPermissionsForUserResponse
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
