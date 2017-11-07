<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetItemByName StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class GetItemByName extends AbstractStructBase
{
    /**
     * The iFolderID
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $iFolderID;
    /**
     * The sFileName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $sFileName;
    /**
     * Constructor method for GetItemByName
     * @uses GetItemByName::setIFolderID()
     * @uses GetItemByName::setSFileName()
     * @param int $iFolderID
     * @param string $sFileName
     */
    public function __construct($iFolderID = null, $sFileName = null)
    {
        $this
            ->setIFolderID($iFolderID)
            ->setSFileName($sFileName);
    }
    /**
     * Get iFolderID value
     * @return int|null
     */
    public function getIFolderID()
    {
        return $this->iFolderID;
    }
    /**
     * Set iFolderID value
     * @param int $iFolderID
     * @return \Brainloop\Soap\StructType\GetItemByName
     */
    public function setIFolderID($iFolderID = null)
    {
        // validation for constraint: int
        if (!is_null($iFolderID) && !is_numeric($iFolderID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($iFolderID)), __LINE__);
        }
        $this->iFolderID = $iFolderID;
        return $this;
    }
    /**
     * Get sFileName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSFileName()
    {
        return isset($this->sFileName) ? $this->sFileName : null;
    }
    /**
     * Set sFileName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $sFileName
     * @return \Brainloop\Soap\StructType\GetItemByName
     */
    public function setSFileName($sFileName = null)
    {
        // validation for constraint: string
        if (!is_null($sFileName) && !is_string($sFileName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($sFileName)), __LINE__);
        }
        if (is_null($sFileName) || (is_array($sFileName) && empty($sFileName))) {
            unset($this->sFileName);
        } else {
            $this->sFileName = $sFileName;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\GetItemByName
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
