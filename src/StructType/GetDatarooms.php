<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetDatarooms StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class GetDatarooms extends AbstractStructBase
{
    /**
     * The eDetails
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $eDetails;
    /**
     * The aProperties
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Brainloop\Soap\ArrayType\ArrayOfstring
     */
    public $aProperties;
    /**
     * The iStartRowIndex
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $iStartRowIndex;
    /**
     * The iMaximumRowCount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $iMaximumRowCount;
    /**
     * Constructor method for GetDatarooms
     * @uses GetDatarooms::setEDetails()
     * @uses GetDatarooms::setAProperties()
     * @uses GetDatarooms::setIStartRowIndex()
     * @uses GetDatarooms::setIMaximumRowCount()
     * @param string $eDetails
     * @param \Brainloop\Soap\ArrayType\ArrayOfstring $aProperties
     * @param int $iStartRowIndex
     * @param int $iMaximumRowCount
     */
    public function __construct($eDetails = null, \Brainloop\Soap\ArrayType\ArrayOfstring $aProperties = null, $iStartRowIndex = null, $iMaximumRowCount = null)
    {
        $this
            ->setEDetails($eDetails)
            ->setAProperties($aProperties)
            ->setIStartRowIndex($iStartRowIndex)
            ->setIMaximumRowCount($iMaximumRowCount);
    }
    /**
     * Get eDetails value
     * @return string|null
     */
    public function getEDetails()
    {
        return $this->eDetails;
    }
    /**
     * Set eDetails value
     * @uses \Brainloop\Soap\EnumType\DataroomFields::valueIsValid()
     * @uses \Brainloop\Soap\EnumType\DataroomFields::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $eDetails
     * @return \Brainloop\Soap\StructType\GetDatarooms
     */
    public function setEDetails($eDetails = null)
    {
        // validation for constraint: enumeration
        if (!\Brainloop\Soap\EnumType\DataroomFields::valueIsValid($eDetails)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $eDetails, implode(', ', \Brainloop\Soap\EnumType\DataroomFields::getValidValues())), __LINE__);
        }
        $this->eDetails = $eDetails;
        return $this;
    }
    /**
     * Get aProperties value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Brainloop\Soap\ArrayType\ArrayOfstring|null
     */
    public function getAProperties()
    {
        return isset($this->aProperties) ? $this->aProperties : null;
    }
    /**
     * Set aProperties value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Brainloop\Soap\ArrayType\ArrayOfstring $aProperties
     * @return \Brainloop\Soap\StructType\GetDatarooms
     */
    public function setAProperties(\Brainloop\Soap\ArrayType\ArrayOfstring $aProperties = null)
    {
        if (is_null($aProperties) || (is_array($aProperties) && empty($aProperties))) {
            unset($this->aProperties);
        } else {
            $this->aProperties = $aProperties;
        }
        return $this;
    }
    /**
     * Get iStartRowIndex value
     * @return int|null
     */
    public function getIStartRowIndex()
    {
        return $this->iStartRowIndex;
    }
    /**
     * Set iStartRowIndex value
     * @param int $iStartRowIndex
     * @return \Brainloop\Soap\StructType\GetDatarooms
     */
    public function setIStartRowIndex($iStartRowIndex = null)
    {
        // validation for constraint: int
        if (!is_null($iStartRowIndex) && !is_numeric($iStartRowIndex)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($iStartRowIndex)), __LINE__);
        }
        $this->iStartRowIndex = $iStartRowIndex;
        return $this;
    }
    /**
     * Get iMaximumRowCount value
     * @return int|null
     */
    public function getIMaximumRowCount()
    {
        return $this->iMaximumRowCount;
    }
    /**
     * Set iMaximumRowCount value
     * @param int $iMaximumRowCount
     * @return \Brainloop\Soap\StructType\GetDatarooms
     */
    public function setIMaximumRowCount($iMaximumRowCount = null)
    {
        // validation for constraint: int
        if (!is_null($iMaximumRowCount) && !is_numeric($iMaximumRowCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($iMaximumRowCount)), __LINE__);
        }
        $this->iMaximumRowCount = $iMaximumRowCount;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\GetDatarooms
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
