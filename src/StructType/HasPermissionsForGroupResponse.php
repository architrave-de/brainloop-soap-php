<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HasPermissionsForGroupResponse StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class HasPermissionsForGroupResponse extends AbstractStructBase
{
    /**
     * The HasPermissionsForGroupResult
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Brainloop\Soap\StructType\Valueboolean
     */
    public $HasPermissionsForGroupResult;
    /**
     * Constructor method for HasPermissionsForGroupResponse
     * @uses HasPermissionsForGroupResponse::setHasPermissionsForGroupResult()
     * @param \Brainloop\Soap\StructType\Valueboolean $hasPermissionsForGroupResult
     */
    public function __construct(\Brainloop\Soap\StructType\Valueboolean $hasPermissionsForGroupResult = null)
    {
        $this
            ->setHasPermissionsForGroupResult($hasPermissionsForGroupResult);
    }
    /**
     * Get HasPermissionsForGroupResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Brainloop\Soap\StructType\Valueboolean|null
     */
    public function getHasPermissionsForGroupResult()
    {
        return isset($this->HasPermissionsForGroupResult) ? $this->HasPermissionsForGroupResult : null;
    }
    /**
     * Set HasPermissionsForGroupResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Brainloop\Soap\StructType\Valueboolean $hasPermissionsForGroupResult
     * @return \Brainloop\Soap\StructType\HasPermissionsForGroupResponse
     */
    public function setHasPermissionsForGroupResult(\Brainloop\Soap\StructType\Valueboolean $hasPermissionsForGroupResult = null)
    {
        if (is_null($hasPermissionsForGroupResult) || (is_array($hasPermissionsForGroupResult) && empty($hasPermissionsForGroupResult))) {
            unset($this->HasPermissionsForGroupResult);
        } else {
            $this->HasPermissionsForGroupResult = $hasPermissionsForGroupResult;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\HasPermissionsForGroupResponse
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
