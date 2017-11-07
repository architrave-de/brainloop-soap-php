<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetDRCProperties StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class SetDRCProperties extends AbstractStructBase
{
    /**
     * The drcId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $drcId;
    /**
     * The aProperties
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Brainloop\Soap\ArrayType\ArrayOfPropertyAndValue
     */
    public $aProperties;
    /**
     * Constructor method for SetDRCProperties
     * @uses SetDRCProperties::setDrcId()
     * @uses SetDRCProperties::setAProperties()
     * @param int $drcId
     * @param \Brainloop\Soap\ArrayType\ArrayOfPropertyAndValue $aProperties
     */
    public function __construct($drcId = null, \Brainloop\Soap\ArrayType\ArrayOfPropertyAndValue $aProperties = null)
    {
        $this
            ->setDrcId($drcId)
            ->setAProperties($aProperties);
    }
    /**
     * Get drcId value
     * @return int|null
     */
    public function getDrcId()
    {
        return $this->drcId;
    }
    /**
     * Set drcId value
     * @param int $drcId
     * @return \Brainloop\Soap\StructType\SetDRCProperties
     */
    public function setDrcId($drcId = null)
    {
        // validation for constraint: int
        if (!is_null($drcId) && !is_numeric($drcId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($drcId)), __LINE__);
        }
        $this->drcId = $drcId;
        return $this;
    }
    /**
     * Get aProperties value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Brainloop\Soap\ArrayType\ArrayOfPropertyAndValue|null
     */
    public function getAProperties()
    {
        return isset($this->aProperties) ? $this->aProperties : null;
    }
    /**
     * Set aProperties value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Brainloop\Soap\ArrayType\ArrayOfPropertyAndValue $aProperties
     * @return \Brainloop\Soap\StructType\SetDRCProperties
     */
    public function setAProperties(\Brainloop\Soap\ArrayType\ArrayOfPropertyAndValue $aProperties = null)
    {
        if (is_null($aProperties) || (is_array($aProperties) && empty($aProperties))) {
            unset($this->aProperties);
        } else {
            $this->aProperties = $aProperties;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\SetDRCProperties
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
