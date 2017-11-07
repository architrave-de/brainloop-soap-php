<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CancelDocumentCheckOut StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class CancelDocumentCheckOut extends AbstractStructBase
{
    /**
     * The iDocumentID
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $iDocumentID;
    /**
     * The dtTimestamp
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $dtTimestamp;
    /**
     * Constructor method for CancelDocumentCheckOut
     * @uses CancelDocumentCheckOut::setIDocumentID()
     * @uses CancelDocumentCheckOut::setDtTimestamp()
     * @param int $iDocumentID
     * @param string $dtTimestamp
     */
    public function __construct($iDocumentID = null, $dtTimestamp = null)
    {
        $this
            ->setIDocumentID($iDocumentID)
            ->setDtTimestamp($dtTimestamp);
    }
    /**
     * Get iDocumentID value
     * @return int|null
     */
    public function getIDocumentID()
    {
        return $this->iDocumentID;
    }
    /**
     * Set iDocumentID value
     * @param int $iDocumentID
     * @return \Brainloop\Soap\StructType\CancelDocumentCheckOut
     */
    public function setIDocumentID($iDocumentID = null)
    {
        // validation for constraint: int
        if (!is_null($iDocumentID) && !is_numeric($iDocumentID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($iDocumentID)), __LINE__);
        }
        $this->iDocumentID = $iDocumentID;
        return $this;
    }
    /**
     * Get dtTimestamp value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDtTimestamp()
    {
        return isset($this->dtTimestamp) ? $this->dtTimestamp : null;
    }
    /**
     * Set dtTimestamp value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $dtTimestamp
     * @return \Brainloop\Soap\StructType\CancelDocumentCheckOut
     */
    public function setDtTimestamp($dtTimestamp = null)
    {
        // validation for constraint: string
        if (!is_null($dtTimestamp) && !is_string($dtTimestamp)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($dtTimestamp)), __LINE__);
        }
        if (is_null($dtTimestamp) || (is_array($dtTimestamp) && empty($dtTimestamp))) {
            unset($this->dtTimestamp);
        } else {
            $this->dtTimestamp = $dtTimestamp;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\CancelDocumentCheckOut
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
