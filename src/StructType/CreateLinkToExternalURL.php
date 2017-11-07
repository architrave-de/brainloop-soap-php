<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateLinkToExternalURL StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class CreateLinkToExternalURL extends AbstractStructBase
{
    /**
     * The iParentFolderID
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $iParentFolderID;
    /**
     * The sName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $sName;
    /**
     * The sURL
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $sURL;
    /**
     * Constructor method for CreateLinkToExternalURL
     * @uses CreateLinkToExternalURL::setIParentFolderID()
     * @uses CreateLinkToExternalURL::setSName()
     * @uses CreateLinkToExternalURL::setSURL()
     * @param int $iParentFolderID
     * @param string $sName
     * @param string $sURL
     */
    public function __construct($iParentFolderID = null, $sName = null, $sURL = null)
    {
        $this
            ->setIParentFolderID($iParentFolderID)
            ->setSName($sName)
            ->setSURL($sURL);
    }
    /**
     * Get iParentFolderID value
     * @return int|null
     */
    public function getIParentFolderID()
    {
        return $this->iParentFolderID;
    }
    /**
     * Set iParentFolderID value
     * @param int $iParentFolderID
     * @return \Brainloop\Soap\StructType\CreateLinkToExternalURL
     */
    public function setIParentFolderID($iParentFolderID = null)
    {
        // validation for constraint: int
        if (!is_null($iParentFolderID) && !is_numeric($iParentFolderID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($iParentFolderID)), __LINE__);
        }
        $this->iParentFolderID = $iParentFolderID;
        return $this;
    }
    /**
     * Get sName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSName()
    {
        return isset($this->sName) ? $this->sName : null;
    }
    /**
     * Set sName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $sName
     * @return \Brainloop\Soap\StructType\CreateLinkToExternalURL
     */
    public function setSName($sName = null)
    {
        // validation for constraint: string
        if (!is_null($sName) && !is_string($sName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($sName)), __LINE__);
        }
        if (is_null($sName) || (is_array($sName) && empty($sName))) {
            unset($this->sName);
        } else {
            $this->sName = $sName;
        }
        return $this;
    }
    /**
     * Get sURL value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSURL()
    {
        return isset($this->sURL) ? $this->sURL : null;
    }
    /**
     * Set sURL value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $sURL
     * @return \Brainloop\Soap\StructType\CreateLinkToExternalURL
     */
    public function setSURL($sURL = null)
    {
        // validation for constraint: string
        if (!is_null($sURL) && !is_string($sURL)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($sURL)), __LINE__);
        }
        if (is_null($sURL) || (is_array($sURL) && empty($sURL))) {
            unset($this->sURL);
        } else {
            $this->sURL = $sURL;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\CreateLinkToExternalURL
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
