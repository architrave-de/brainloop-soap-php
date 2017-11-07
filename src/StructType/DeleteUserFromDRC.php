<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteUserFromDRC StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class DeleteUserFromDRC extends AbstractStructBase
{
    /**
     * The iDrcId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $iDrcId;
    /**
     * The iUserId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $iUserId;
    /**
     * The iReplacementUserId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $iReplacementUserId;
    /**
     * Constructor method for DeleteUserFromDRC
     * @uses DeleteUserFromDRC::setIDrcId()
     * @uses DeleteUserFromDRC::setIUserId()
     * @uses DeleteUserFromDRC::setIReplacementUserId()
     * @param int $iDrcId
     * @param int $iUserId
     * @param int $iReplacementUserId
     */
    public function __construct($iDrcId = null, $iUserId = null, $iReplacementUserId = null)
    {
        $this
            ->setIDrcId($iDrcId)
            ->setIUserId($iUserId)
            ->setIReplacementUserId($iReplacementUserId);
    }
    /**
     * Get iDrcId value
     * @return int|null
     */
    public function getIDrcId()
    {
        return $this->iDrcId;
    }
    /**
     * Set iDrcId value
     * @param int $iDrcId
     * @return \Brainloop\Soap\StructType\DeleteUserFromDRC
     */
    public function setIDrcId($iDrcId = null)
    {
        // validation for constraint: int
        if (!is_null($iDrcId) && !is_numeric($iDrcId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($iDrcId)), __LINE__);
        }
        $this->iDrcId = $iDrcId;
        return $this;
    }
    /**
     * Get iUserId value
     * @return int|null
     */
    public function getIUserId()
    {
        return $this->iUserId;
    }
    /**
     * Set iUserId value
     * @param int $iUserId
     * @return \Brainloop\Soap\StructType\DeleteUserFromDRC
     */
    public function setIUserId($iUserId = null)
    {
        // validation for constraint: int
        if (!is_null($iUserId) && !is_numeric($iUserId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($iUserId)), __LINE__);
        }
        $this->iUserId = $iUserId;
        return $this;
    }
    /**
     * Get iReplacementUserId value
     * @return int|null
     */
    public function getIReplacementUserId()
    {
        return $this->iReplacementUserId;
    }
    /**
     * Set iReplacementUserId value
     * @param int $iReplacementUserId
     * @return \Brainloop\Soap\StructType\DeleteUserFromDRC
     */
    public function setIReplacementUserId($iReplacementUserId = null)
    {
        // validation for constraint: int
        if (!is_null($iReplacementUserId) && !is_numeric($iReplacementUserId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($iReplacementUserId)), __LINE__);
        }
        $this->iReplacementUserId = $iReplacementUserId;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\DeleteUserFromDRC
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
