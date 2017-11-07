<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetItems StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class GetItems extends AbstractStructBase
{
    /**
     * The iParentItemID
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $iParentItemID;
    /**
     * The aItemTypeArray
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Brainloop\Soap\ArrayType\ArrayOfItemType
     */
    public $aItemTypeArray;
    /**
     * The eFields
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $eFields;
    /**
     * The iStartRowIndex
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $iStartRowIndex;
    /**
     * The iMaxRowCount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $iMaxRowCount;
    /**
     * The eSortExpression
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $eSortExpression;
    /**
     * The eSortDirection
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $eSortDirection;
    /**
     * Constructor method for GetItems
     * @uses GetItems::setIParentItemID()
     * @uses GetItems::setAItemTypeArray()
     * @uses GetItems::setEFields()
     * @uses GetItems::setIStartRowIndex()
     * @uses GetItems::setIMaxRowCount()
     * @uses GetItems::setESortExpression()
     * @uses GetItems::setESortDirection()
     * @param int $iParentItemID
     * @param \Brainloop\Soap\ArrayType\ArrayOfItemType $aItemTypeArray
     * @param string $eFields
     * @param int $iStartRowIndex
     * @param int $iMaxRowCount
     * @param string $eSortExpression
     * @param string $eSortDirection
     */
    public function __construct($iParentItemID = null, \Brainloop\Soap\ArrayType\ArrayOfItemType $aItemTypeArray = null, $eFields = null, $iStartRowIndex = null, $iMaxRowCount = null, $eSortExpression = null, $eSortDirection = null)
    {
        $this
            ->setIParentItemID($iParentItemID)
            ->setAItemTypeArray($aItemTypeArray)
            ->setEFields($eFields)
            ->setIStartRowIndex($iStartRowIndex)
            ->setIMaxRowCount($iMaxRowCount)
            ->setESortExpression($eSortExpression)
            ->setESortDirection($eSortDirection);
    }
    /**
     * Get iParentItemID value
     * @return int|null
     */
    public function getIParentItemID()
    {
        return $this->iParentItemID;
    }
    /**
     * Set iParentItemID value
     * @param int $iParentItemID
     * @return \Brainloop\Soap\StructType\GetItems
     */
    public function setIParentItemID($iParentItemID = null)
    {
        // validation for constraint: int
        if (!is_null($iParentItemID) && !is_numeric($iParentItemID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($iParentItemID)), __LINE__);
        }
        $this->iParentItemID = $iParentItemID;
        return $this;
    }
    /**
     * Get aItemTypeArray value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Brainloop\Soap\ArrayType\ArrayOfItemType|null
     */
    public function getAItemTypeArray()
    {
        return isset($this->aItemTypeArray) ? $this->aItemTypeArray : null;
    }
    /**
     * Set aItemTypeArray value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Brainloop\Soap\ArrayType\ArrayOfItemType $aItemTypeArray
     * @return \Brainloop\Soap\StructType\GetItems
     */
    public function setAItemTypeArray(\Brainloop\Soap\ArrayType\ArrayOfItemType $aItemTypeArray = null)
    {
        if (is_null($aItemTypeArray) || (is_array($aItemTypeArray) && empty($aItemTypeArray))) {
            unset($this->aItemTypeArray);
        } else {
            $this->aItemTypeArray = $aItemTypeArray;
        }
        return $this;
    }
    /**
     * Get eFields value
     * @return string|null
     */
    public function getEFields()
    {
        return $this->eFields;
    }
    /**
     * Set eFields value
     * @uses \Brainloop\Soap\EnumType\ItemFields::valueIsValid()
     * @uses \Brainloop\Soap\EnumType\ItemFields::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $eFields
     * @return \Brainloop\Soap\StructType\GetItems
     */
    public function setEFields($eFields = null)
    {
        // validation for constraint: enumeration
        if (!\Brainloop\Soap\EnumType\ItemFields::valueIsValid($eFields)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $eFields, implode(', ', \Brainloop\Soap\EnumType\ItemFields::getValidValues())), __LINE__);
        }
        $this->eFields = $eFields;
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
     * @return \Brainloop\Soap\StructType\GetItems
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
     * Get iMaxRowCount value
     * @return int|null
     */
    public function getIMaxRowCount()
    {
        return $this->iMaxRowCount;
    }
    /**
     * Set iMaxRowCount value
     * @param int $iMaxRowCount
     * @return \Brainloop\Soap\StructType\GetItems
     */
    public function setIMaxRowCount($iMaxRowCount = null)
    {
        // validation for constraint: int
        if (!is_null($iMaxRowCount) && !is_numeric($iMaxRowCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($iMaxRowCount)), __LINE__);
        }
        $this->iMaxRowCount = $iMaxRowCount;
        return $this;
    }
    /**
     * Get eSortExpression value
     * @return string|null
     */
    public function getESortExpression()
    {
        return $this->eSortExpression;
    }
    /**
     * Set eSortExpression value
     * @uses \Brainloop\Soap\EnumType\ItemOrder::valueIsValid()
     * @uses \Brainloop\Soap\EnumType\ItemOrder::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $eSortExpression
     * @return \Brainloop\Soap\StructType\GetItems
     */
    public function setESortExpression($eSortExpression = null)
    {
        // validation for constraint: enumeration
        if (!\Brainloop\Soap\EnumType\ItemOrder::valueIsValid($eSortExpression)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $eSortExpression, implode(', ', \Brainloop\Soap\EnumType\ItemOrder::getValidValues())), __LINE__);
        }
        $this->eSortExpression = $eSortExpression;
        return $this;
    }
    /**
     * Get eSortDirection value
     * @return string|null
     */
    public function getESortDirection()
    {
        return $this->eSortDirection;
    }
    /**
     * Set eSortDirection value
     * @uses \Brainloop\Soap\EnumType\SortDirection::valueIsValid()
     * @uses \Brainloop\Soap\EnumType\SortDirection::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $eSortDirection
     * @return \Brainloop\Soap\StructType\GetItems
     */
    public function setESortDirection($eSortDirection = null)
    {
        // validation for constraint: enumeration
        if (!\Brainloop\Soap\EnumType\SortDirection::valueIsValid($eSortDirection)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $eSortDirection, implode(', ', \Brainloop\Soap\EnumType\SortDirection::getValidValues())), __LINE__);
        }
        $this->eSortDirection = $eSortDirection;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\GetItems
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
