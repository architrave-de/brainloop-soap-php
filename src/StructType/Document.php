<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Document StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:Document
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class Document extends VersionableItem
{
    /**
     * The CRC
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $CRC;
    /**
     * The CheckOutDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $CheckOutDate;
    /**
     * The CheckOutUser
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Brainloop\Soap\StructType\User
     */
    public $CheckOutUser;
    /**
     * The Index
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Index;
    /**
     * The IntIndex
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $IntIndex;
    /**
     * The IsEncrypted
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var bool
     */
    public $IsEncrypted;
    /**
     * The Size
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $Size;
    /**
     * The Status
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $Status;
    /**
     * Constructor method for Document
     * @uses Document::setCRC()
     * @uses Document::setCheckOutDate()
     * @uses Document::setCheckOutUser()
     * @uses Document::setIndex()
     * @uses Document::setIntIndex()
     * @uses Document::setIsEncrypted()
     * @uses Document::setSize()
     * @uses Document::setStatus()
     * @param string $cRC
     * @param string $checkOutDate
     * @param \Brainloop\Soap\StructType\User $checkOutUser
     * @param string $index
     * @param int $intIndex
     * @param bool $isEncrypted
     * @param int $size
     * @param string $status
     */
    public function __construct($cRC = null, $checkOutDate = null, \Brainloop\Soap\StructType\User $checkOutUser = null, $index = null, $intIndex = null, $isEncrypted = null, $size = null, $status = null)
    {
        $this
            ->setCRC($cRC)
            ->setCheckOutDate($checkOutDate)
            ->setCheckOutUser($checkOutUser)
            ->setIndex($index)
            ->setIntIndex($intIndex)
            ->setIsEncrypted($isEncrypted)
            ->setSize($size)
            ->setStatus($status);
    }
    /**
     * Get CRC value
     * @return string|null
     */
    public function getCRC()
    {
        return $this->CRC;
    }
    /**
     * Set CRC value
     * @param string $cRC
     * @return \Brainloop\Soap\StructType\Document
     */
    public function setCRC($cRC = null)
    {
        // validation for constraint: string
        if (!is_null($cRC) && !is_string($cRC)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($cRC)), __LINE__);
        }
        $this->CRC = $cRC;
        return $this;
    }
    /**
     * Get CheckOutDate value
     * @return string|null
     */
    public function getCheckOutDate()
    {
        return $this->CheckOutDate;
    }
    /**
     * Set CheckOutDate value
     * @param string $checkOutDate
     * @return \Brainloop\Soap\StructType\Document
     */
    public function setCheckOutDate($checkOutDate = null)
    {
        // validation for constraint: string
        if (!is_null($checkOutDate) && !is_string($checkOutDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($checkOutDate)), __LINE__);
        }
        $this->CheckOutDate = $checkOutDate;
        return $this;
    }
    /**
     * Get CheckOutUser value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Brainloop\Soap\StructType\User|null
     */
    public function getCheckOutUser()
    {
        return isset($this->CheckOutUser) ? $this->CheckOutUser : null;
    }
    /**
     * Set CheckOutUser value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Brainloop\Soap\StructType\User $checkOutUser
     * @return \Brainloop\Soap\StructType\Document
     */
    public function setCheckOutUser(\Brainloop\Soap\StructType\User $checkOutUser = null)
    {
        if (is_null($checkOutUser) || (is_array($checkOutUser) && empty($checkOutUser))) {
            unset($this->CheckOutUser);
        } else {
            $this->CheckOutUser = $checkOutUser;
        }
        return $this;
    }
    /**
     * Get Index value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getIndex()
    {
        return isset($this->Index) ? $this->Index : null;
    }
    /**
     * Set Index value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $index
     * @return \Brainloop\Soap\StructType\Document
     */
    public function setIndex($index = null)
    {
        // validation for constraint: string
        if (!is_null($index) && !is_string($index)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($index)), __LINE__);
        }
        if (is_null($index) || (is_array($index) && empty($index))) {
            unset($this->Index);
        } else {
            $this->Index = $index;
        }
        return $this;
    }
    /**
     * Get IntIndex value
     * @return int|null
     */
    public function getIntIndex()
    {
        return $this->IntIndex;
    }
    /**
     * Set IntIndex value
     * @param int $intIndex
     * @return \Brainloop\Soap\StructType\Document
     */
    public function setIntIndex($intIndex = null)
    {
        // validation for constraint: int
        if (!is_null($intIndex) && !is_numeric($intIndex)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($intIndex)), __LINE__);
        }
        $this->IntIndex = $intIndex;
        return $this;
    }
    /**
     * Get IsEncrypted value
     * @return bool|null
     */
    public function getIsEncrypted()
    {
        return $this->IsEncrypted;
    }
    /**
     * Set IsEncrypted value
     * @param bool $isEncrypted
     * @return \Brainloop\Soap\StructType\Document
     */
    public function setIsEncrypted($isEncrypted = null)
    {
        // validation for constraint: boolean
        if (!is_null($isEncrypted) && !is_bool($isEncrypted)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isEncrypted)), __LINE__);
        }
        $this->IsEncrypted = $isEncrypted;
        return $this;
    }
    /**
     * Get Size value
     * @return int|null
     */
    public function getSize()
    {
        return $this->Size;
    }
    /**
     * Set Size value
     * @param int $size
     * @return \Brainloop\Soap\StructType\Document
     */
    public function setSize($size = null)
    {
        // validation for constraint: int
        if (!is_null($size) && !is_numeric($size)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($size)), __LINE__);
        }
        $this->Size = $size;
        return $this;
    }
    /**
     * Get Status value
     * @return string|null
     */
    public function getStatus()
    {
        return $this->Status;
    }
    /**
     * Set Status value
     * @uses \Brainloop\Soap\EnumType\DocumentStatus::valueIsValid()
     * @uses \Brainloop\Soap\EnumType\DocumentStatus::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $status
     * @return \Brainloop\Soap\StructType\Document
     */
    public function setStatus($status = null)
    {
        // validation for constraint: enumeration
        if (!\Brainloop\Soap\EnumType\DocumentStatus::valueIsValid($status)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $status, implode(', ', \Brainloop\Soap\EnumType\DocumentStatus::getValidValues())), __LINE__);
        }
        $this->Status = $status;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\Document
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
