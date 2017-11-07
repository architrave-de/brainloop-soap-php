<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RevokeAllTokensForUserInDrc StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class RevokeAllTokensForUserInDrc extends AbstractStructBase
{
    /**
     * The drcId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $drcId;
    /**
     * The userId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $userId;
    /**
     * Constructor method for RevokeAllTokensForUserInDrc
     * @uses RevokeAllTokensForUserInDrc::setDrcId()
     * @uses RevokeAllTokensForUserInDrc::setUserId()
     * @param int $drcId
     * @param int $userId
     */
    public function __construct($drcId = null, $userId = null)
    {
        $this
            ->setDrcId($drcId)
            ->setUserId($userId);
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
     * @return \Brainloop\Soap\StructType\RevokeAllTokensForUserInDrc
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
     * Get userId value
     * @return int|null
     */
    public function getUserId()
    {
        return $this->userId;
    }
    /**
     * Set userId value
     * @param int $userId
     * @return \Brainloop\Soap\StructType\RevokeAllTokensForUserInDrc
     */
    public function setUserId($userId = null)
    {
        // validation for constraint: int
        if (!is_null($userId) && !is_numeric($userId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($userId)), __LINE__);
        }
        $this->userId = $userId;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\RevokeAllTokensForUserInDrc
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
