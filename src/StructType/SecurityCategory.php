<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SecurityCategory StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:SecurityCategory
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class SecurityCategory extends BLItem
{
    /**
     * The AllowExternalBrainmarkDownload
     * @var bool
     */
    public $AllowExternalBrainmarkDownload;
    /**
     * The AllowExternalOriginalDownload
     * @var bool
     */
    public $AllowExternalOriginalDownload;
    /**
     * The HtmlColor
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $HtmlColor;
    /**
     * The MinLinkSecurity
     * @var int
     */
    public $MinLinkSecurity;
    /**
     * Constructor method for SecurityCategory
     * @uses SecurityCategory::setAllowExternalBrainmarkDownload()
     * @uses SecurityCategory::setAllowExternalOriginalDownload()
     * @uses SecurityCategory::setHtmlColor()
     * @uses SecurityCategory::setMinLinkSecurity()
     * @param bool $allowExternalBrainmarkDownload
     * @param bool $allowExternalOriginalDownload
     * @param string $htmlColor
     * @param int $minLinkSecurity
     */
    public function __construct($allowExternalBrainmarkDownload = null, $allowExternalOriginalDownload = null, $htmlColor = null, $minLinkSecurity = null)
    {
        $this
            ->setAllowExternalBrainmarkDownload($allowExternalBrainmarkDownload)
            ->setAllowExternalOriginalDownload($allowExternalOriginalDownload)
            ->setHtmlColor($htmlColor)
            ->setMinLinkSecurity($minLinkSecurity);
    }
    /**
     * Get AllowExternalBrainmarkDownload value
     * @return bool|null
     */
    public function getAllowExternalBrainmarkDownload()
    {
        return $this->AllowExternalBrainmarkDownload;
    }
    /**
     * Set AllowExternalBrainmarkDownload value
     * @param bool $allowExternalBrainmarkDownload
     * @return \Brainloop\Soap\StructType\SecurityCategory
     */
    public function setAllowExternalBrainmarkDownload($allowExternalBrainmarkDownload = null)
    {
        // validation for constraint: boolean
        if (!is_null($allowExternalBrainmarkDownload) && !is_bool($allowExternalBrainmarkDownload)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($allowExternalBrainmarkDownload)), __LINE__);
        }
        $this->AllowExternalBrainmarkDownload = $allowExternalBrainmarkDownload;
        return $this;
    }
    /**
     * Get AllowExternalOriginalDownload value
     * @return bool|null
     */
    public function getAllowExternalOriginalDownload()
    {
        return $this->AllowExternalOriginalDownload;
    }
    /**
     * Set AllowExternalOriginalDownload value
     * @param bool $allowExternalOriginalDownload
     * @return \Brainloop\Soap\StructType\SecurityCategory
     */
    public function setAllowExternalOriginalDownload($allowExternalOriginalDownload = null)
    {
        // validation for constraint: boolean
        if (!is_null($allowExternalOriginalDownload) && !is_bool($allowExternalOriginalDownload)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($allowExternalOriginalDownload)), __LINE__);
        }
        $this->AllowExternalOriginalDownload = $allowExternalOriginalDownload;
        return $this;
    }
    /**
     * Get HtmlColor value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getHtmlColor()
    {
        return isset($this->HtmlColor) ? $this->HtmlColor : null;
    }
    /**
     * Set HtmlColor value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $htmlColor
     * @return \Brainloop\Soap\StructType\SecurityCategory
     */
    public function setHtmlColor($htmlColor = null)
    {
        // validation for constraint: string
        if (!is_null($htmlColor) && !is_string($htmlColor)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($htmlColor)), __LINE__);
        }
        if (is_null($htmlColor) || (is_array($htmlColor) && empty($htmlColor))) {
            unset($this->HtmlColor);
        } else {
            $this->HtmlColor = $htmlColor;
        }
        return $this;
    }
    /**
     * Get MinLinkSecurity value
     * @return int|null
     */
    public function getMinLinkSecurity()
    {
        return $this->MinLinkSecurity;
    }
    /**
     * Set MinLinkSecurity value
     * @param int $minLinkSecurity
     * @return \Brainloop\Soap\StructType\SecurityCategory
     */
    public function setMinLinkSecurity($minLinkSecurity = null)
    {
        // validation for constraint: int
        if (!is_null($minLinkSecurity) && !is_numeric($minLinkSecurity)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($minLinkSecurity)), __LINE__);
        }
        $this->MinLinkSecurity = $minLinkSecurity;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\SecurityCategory
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
