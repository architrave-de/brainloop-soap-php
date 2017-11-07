<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HasPermissionsForUserResponse StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class HasPermissionsForUserResponse extends AbstractStructBase
{
    /**
     * The HasPermissionsForUserResult
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Brainloop\Soap\StructType\Valueboolean
     */
    public $HasPermissionsForUserResult;
    /**
     * Constructor method for HasPermissionsForUserResponse
     * @uses HasPermissionsForUserResponse::setHasPermissionsForUserResult()
     * @param \Brainloop\Soap\StructType\Valueboolean $hasPermissionsForUserResult
     */
    public function __construct(\Brainloop\Soap\StructType\Valueboolean $hasPermissionsForUserResult = null)
    {
        $this
            ->setHasPermissionsForUserResult($hasPermissionsForUserResult);
    }
    /**
     * Get HasPermissionsForUserResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Brainloop\Soap\StructType\Valueboolean|null
     */
    public function getHasPermissionsForUserResult()
    {
        return isset($this->HasPermissionsForUserResult) ? $this->HasPermissionsForUserResult : null;
    }
    /**
     * Set HasPermissionsForUserResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Brainloop\Soap\StructType\Valueboolean $hasPermissionsForUserResult
     * @return \Brainloop\Soap\StructType\HasPermissionsForUserResponse
     */
    public function setHasPermissionsForUserResult(\Brainloop\Soap\StructType\Valueboolean $hasPermissionsForUserResult = null)
    {
        if (is_null($hasPermissionsForUserResult) || (is_array($hasPermissionsForUserResult) && empty($hasPermissionsForUserResult))) {
            unset($this->HasPermissionsForUserResult);
        } else {
            $this->HasPermissionsForUserResult = $hasPermissionsForUserResult;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\HasPermissionsForUserResponse
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
