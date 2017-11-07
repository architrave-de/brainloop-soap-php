<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RemoveUsersFromDrcSecurityGroup StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class RemoveUsersFromDrcSecurityGroup extends AbstractStructBase
{
    /**
     * The iSecurityGroupID
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $iSecurityGroupID;
    /**
     * The aUserIDs
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Brainloop\Soap\ArrayType\ArrayOfint
     */
    public $aUserIDs;
    /**
     * Constructor method for RemoveUsersFromDrcSecurityGroup
     * @uses RemoveUsersFromDrcSecurityGroup::setISecurityGroupID()
     * @uses RemoveUsersFromDrcSecurityGroup::setAUserIDs()
     * @param int $iSecurityGroupID
     * @param \Brainloop\Soap\ArrayType\ArrayOfint $aUserIDs
     */
    public function __construct($iSecurityGroupID = null, \Brainloop\Soap\ArrayType\ArrayOfint $aUserIDs = null)
    {
        $this
            ->setISecurityGroupID($iSecurityGroupID)
            ->setAUserIDs($aUserIDs);
    }
    /**
     * Get iSecurityGroupID value
     * @return int|null
     */
    public function getISecurityGroupID()
    {
        return $this->iSecurityGroupID;
    }
    /**
     * Set iSecurityGroupID value
     * @param int $iSecurityGroupID
     * @return \Brainloop\Soap\StructType\RemoveUsersFromDrcSecurityGroup
     */
    public function setISecurityGroupID($iSecurityGroupID = null)
    {
        // validation for constraint: int
        if (!is_null($iSecurityGroupID) && !is_numeric($iSecurityGroupID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($iSecurityGroupID)), __LINE__);
        }
        $this->iSecurityGroupID = $iSecurityGroupID;
        return $this;
    }
    /**
     * Get aUserIDs value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Brainloop\Soap\ArrayType\ArrayOfint|null
     */
    public function getAUserIDs()
    {
        return isset($this->aUserIDs) ? $this->aUserIDs : null;
    }
    /**
     * Set aUserIDs value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Brainloop\Soap\ArrayType\ArrayOfint $aUserIDs
     * @return \Brainloop\Soap\StructType\RemoveUsersFromDrcSecurityGroup
     */
    public function setAUserIDs(\Brainloop\Soap\ArrayType\ArrayOfint $aUserIDs = null)
    {
        if (is_null($aUserIDs) || (is_array($aUserIDs) && empty($aUserIDs))) {
            unset($this->aUserIDs);
        } else {
            $this->aUserIDs = $aUserIDs;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\RemoveUsersFromDrcSecurityGroup
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
