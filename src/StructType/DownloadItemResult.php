<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DownloadItemResult StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:DownloadItemResult
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class DownloadItemResult extends DownloadResult
{
    /**
     * The CheckOutDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
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
     * The IsCheckedOut
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsCheckedOut;
    /**
     * The IsPrintable
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var bool
     */
    public $IsPrintable;
    /**
     * The ItemID
     * @var int
     */
    public $ItemID;
    /**
     * The Version
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $Version;
    /**
     * Constructor method for DownloadItemResult
     * @uses DownloadItemResult::setCheckOutDate()
     * @uses DownloadItemResult::setCheckOutUser()
     * @uses DownloadItemResult::setIsCheckedOut()
     * @uses DownloadItemResult::setIsPrintable()
     * @uses DownloadItemResult::setItemID()
     * @uses DownloadItemResult::setVersion()
     * @param string $checkOutDate
     * @param \Brainloop\Soap\StructType\User $checkOutUser
     * @param bool $isCheckedOut
     * @param bool $isPrintable
     * @param int $itemID
     * @param int $version
     */
    public function __construct($checkOutDate = null, \Brainloop\Soap\StructType\User $checkOutUser = null, $isCheckedOut = null, $isPrintable = null, $itemID = null, $version = null)
    {
        $this
            ->setCheckOutDate($checkOutDate)
            ->setCheckOutUser($checkOutUser)
            ->setIsCheckedOut($isCheckedOut)
            ->setIsPrintable($isPrintable)
            ->setItemID($itemID)
            ->setVersion($version);
    }
    /**
     * Get CheckOutDate value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCheckOutDate()
    {
        return isset($this->CheckOutDate) ? $this->CheckOutDate : null;
    }
    /**
     * Set CheckOutDate value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $checkOutDate
     * @return \Brainloop\Soap\StructType\DownloadItemResult
     */
    public function setCheckOutDate($checkOutDate = null)
    {
        // validation for constraint: string
        if (!is_null($checkOutDate) && !is_string($checkOutDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($checkOutDate)), __LINE__);
        }
        if (is_null($checkOutDate) || (is_array($checkOutDate) && empty($checkOutDate))) {
            unset($this->CheckOutDate);
        } else {
            $this->CheckOutDate = $checkOutDate;
        }
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
     * @return \Brainloop\Soap\StructType\DownloadItemResult
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
     * Get IsCheckedOut value
     * @return bool|null
     */
    public function getIsCheckedOut()
    {
        return $this->IsCheckedOut;
    }
    /**
     * Set IsCheckedOut value
     * @param bool $isCheckedOut
     * @return \Brainloop\Soap\StructType\DownloadItemResult
     */
    public function setIsCheckedOut($isCheckedOut = null)
    {
        // validation for constraint: boolean
        if (!is_null($isCheckedOut) && !is_bool($isCheckedOut)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isCheckedOut)), __LINE__);
        }
        $this->IsCheckedOut = $isCheckedOut;
        return $this;
    }
    /**
     * Get IsPrintable value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return bool|null
     */
    public function getIsPrintable()
    {
        return isset($this->IsPrintable) ? $this->IsPrintable : null;
    }
    /**
     * Set IsPrintable value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param bool $isPrintable
     * @return \Brainloop\Soap\StructType\DownloadItemResult
     */
    public function setIsPrintable($isPrintable = null)
    {
        // validation for constraint: boolean
        if (!is_null($isPrintable) && !is_bool($isPrintable)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isPrintable)), __LINE__);
        }
        if (is_null($isPrintable) || (is_array($isPrintable) && empty($isPrintable))) {
            unset($this->IsPrintable);
        } else {
            $this->IsPrintable = $isPrintable;
        }
        return $this;
    }
    /**
     * Get ItemID value
     * @return int|null
     */
    public function getItemID()
    {
        return $this->ItemID;
    }
    /**
     * Set ItemID value
     * @param int $itemID
     * @return \Brainloop\Soap\StructType\DownloadItemResult
     */
    public function setItemID($itemID = null)
    {
        // validation for constraint: int
        if (!is_null($itemID) && !is_numeric($itemID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($itemID)), __LINE__);
        }
        $this->ItemID = $itemID;
        return $this;
    }
    /**
     * Get Version value
     * @return int|null
     */
    public function getVersion()
    {
        return $this->Version;
    }
    /**
     * Set Version value
     * @param int $version
     * @return \Brainloop\Soap\StructType\DownloadItemResult
     */
    public function setVersion($version = null)
    {
        // validation for constraint: int
        if (!is_null($version) && !is_numeric($version)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($version)), __LINE__);
        }
        $this->Version = $version;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\DownloadItemResult
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
