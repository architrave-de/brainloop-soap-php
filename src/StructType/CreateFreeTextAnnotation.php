<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateFreeTextAnnotation StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class CreateFreeTextAnnotation extends AbstractStructBase
{
    /**
     * The iReviewID
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $iReviewID;
    /**
     * The iPage
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $iPage;
    /**
     * The oLocation
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Brainloop\Soap\StructType\AnnotationRegion
     */
    public $oLocation;
    /**
     * The sText
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $sText;
    /**
     * Constructor method for CreateFreeTextAnnotation
     * @uses CreateFreeTextAnnotation::setIReviewID()
     * @uses CreateFreeTextAnnotation::setIPage()
     * @uses CreateFreeTextAnnotation::setOLocation()
     * @uses CreateFreeTextAnnotation::setSText()
     * @param int $iReviewID
     * @param int $iPage
     * @param \Brainloop\Soap\StructType\AnnotationRegion $oLocation
     * @param string $sText
     */
    public function __construct($iReviewID = null, $iPage = null, \Brainloop\Soap\StructType\AnnotationRegion $oLocation = null, $sText = null)
    {
        $this
            ->setIReviewID($iReviewID)
            ->setIPage($iPage)
            ->setOLocation($oLocation)
            ->setSText($sText);
    }
    /**
     * Get iReviewID value
     * @return int|null
     */
    public function getIReviewID()
    {
        return $this->iReviewID;
    }
    /**
     * Set iReviewID value
     * @param int $iReviewID
     * @return \Brainloop\Soap\StructType\CreateFreeTextAnnotation
     */
    public function setIReviewID($iReviewID = null)
    {
        // validation for constraint: int
        if (!is_null($iReviewID) && !is_numeric($iReviewID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($iReviewID)), __LINE__);
        }
        $this->iReviewID = $iReviewID;
        return $this;
    }
    /**
     * Get iPage value
     * @return int|null
     */
    public function getIPage()
    {
        return $this->iPage;
    }
    /**
     * Set iPage value
     * @param int $iPage
     * @return \Brainloop\Soap\StructType\CreateFreeTextAnnotation
     */
    public function setIPage($iPage = null)
    {
        // validation for constraint: int
        if (!is_null($iPage) && !is_numeric($iPage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($iPage)), __LINE__);
        }
        $this->iPage = $iPage;
        return $this;
    }
    /**
     * Get oLocation value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Brainloop\Soap\StructType\AnnotationRegion|null
     */
    public function getOLocation()
    {
        return isset($this->oLocation) ? $this->oLocation : null;
    }
    /**
     * Set oLocation value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Brainloop\Soap\StructType\AnnotationRegion $oLocation
     * @return \Brainloop\Soap\StructType\CreateFreeTextAnnotation
     */
    public function setOLocation(\Brainloop\Soap\StructType\AnnotationRegion $oLocation = null)
    {
        if (is_null($oLocation) || (is_array($oLocation) && empty($oLocation))) {
            unset($this->oLocation);
        } else {
            $this->oLocation = $oLocation;
        }
        return $this;
    }
    /**
     * Get sText value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSText()
    {
        return isset($this->sText) ? $this->sText : null;
    }
    /**
     * Set sText value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $sText
     * @return \Brainloop\Soap\StructType\CreateFreeTextAnnotation
     */
    public function setSText($sText = null)
    {
        // validation for constraint: string
        if (!is_null($sText) && !is_string($sText)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($sText)), __LINE__);
        }
        if (is_null($sText) || (is_array($sText) && empty($sText))) {
            unset($this->sText);
        } else {
            $this->sText = $sText;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\CreateFreeTextAnnotation
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
