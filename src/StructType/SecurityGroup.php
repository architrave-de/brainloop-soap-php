<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SecurityGroup StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:SecurityGroup
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class SecurityGroup extends AbstractStructBase
{
    /**
     * The ID
     * @var int
     */
    public $ID;
    /**
     * The Members
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Brainloop\Soap\ArrayType\ArrayOfint
     */
    public $Members;
    /**
     * The Name
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $Name;
    /**
     * The SubGroups
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Brainloop\Soap\ArrayType\ArrayOfint
     */
    public $SubGroups;
    /**
     * Constructor method for SecurityGroup
     * @uses SecurityGroup::setID()
     * @uses SecurityGroup::setMembers()
     * @uses SecurityGroup::setName()
     * @uses SecurityGroup::setSubGroups()
     * @param int $iD
     * @param \Brainloop\Soap\ArrayType\ArrayOfint $members
     * @param string $name
     * @param \Brainloop\Soap\ArrayType\ArrayOfint $subGroups
     */
    public function __construct($iD = null, \Brainloop\Soap\ArrayType\ArrayOfint $members = null, $name = null, \Brainloop\Soap\ArrayType\ArrayOfint $subGroups = null)
    {
        $this
            ->setID($iD)
            ->setMembers($members)
            ->setName($name)
            ->setSubGroups($subGroups);
    }
    /**
     * Get ID value
     * @return int|null
     */
    public function getID()
    {
        return $this->ID;
    }
    /**
     * Set ID value
     * @param int $iD
     * @return \Brainloop\Soap\StructType\SecurityGroup
     */
    public function setID($iD = null)
    {
        // validation for constraint: int
        if (!is_null($iD) && !is_numeric($iD)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($iD)), __LINE__);
        }
        $this->ID = $iD;
        return $this;
    }
    /**
     * Get Members value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Brainloop\Soap\ArrayType\ArrayOfint|null
     */
    public function getMembers()
    {
        return isset($this->Members) ? $this->Members : null;
    }
    /**
     * Set Members value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Brainloop\Soap\ArrayType\ArrayOfint $members
     * @return \Brainloop\Soap\StructType\SecurityGroup
     */
    public function setMembers(\Brainloop\Soap\ArrayType\ArrayOfint $members = null)
    {
        if (is_null($members) || (is_array($members) && empty($members))) {
            unset($this->Members);
        } else {
            $this->Members = $members;
        }
        return $this;
    }
    /**
     * Get Name value
     * @return string|null
     */
    public function getName()
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param string $name
     * @return \Brainloop\Soap\StructType\SecurityGroup
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($name)), __LINE__);
        }
        $this->Name = $name;
        return $this;
    }
    /**
     * Get SubGroups value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Brainloop\Soap\ArrayType\ArrayOfint|null
     */
    public function getSubGroups()
    {
        return isset($this->SubGroups) ? $this->SubGroups : null;
    }
    /**
     * Set SubGroups value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Brainloop\Soap\ArrayType\ArrayOfint $subGroups
     * @return \Brainloop\Soap\StructType\SecurityGroup
     */
    public function setSubGroups(\Brainloop\Soap\ArrayType\ArrayOfint $subGroups = null)
    {
        if (is_null($subGroups) || (is_array($subGroups) && empty($subGroups))) {
            unset($this->SubGroups);
        } else {
            $this->SubGroups = $subGroups;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\SecurityGroup
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
