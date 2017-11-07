<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSecurityCategoriesResponse StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class GetSecurityCategoriesResponse extends AbstractStructBase
{
    /**
     * The GetSecurityCategoriesResult
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Brainloop\Soap\StructType\BLItemCollection
     */
    public $GetSecurityCategoriesResult;
    /**
     * Constructor method for GetSecurityCategoriesResponse
     * @uses GetSecurityCategoriesResponse::setGetSecurityCategoriesResult()
     * @param \Brainloop\Soap\StructType\BLItemCollection $getSecurityCategoriesResult
     */
    public function __construct(\Brainloop\Soap\StructType\BLItemCollection $getSecurityCategoriesResult = null)
    {
        $this
            ->setGetSecurityCategoriesResult($getSecurityCategoriesResult);
    }
    /**
     * Get GetSecurityCategoriesResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Brainloop\Soap\StructType\BLItemCollection|null
     */
    public function getGetSecurityCategoriesResult()
    {
        return isset($this->GetSecurityCategoriesResult) ? $this->GetSecurityCategoriesResult : null;
    }
    /**
     * Set GetSecurityCategoriesResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Brainloop\Soap\StructType\BLItemCollection $getSecurityCategoriesResult
     * @return \Brainloop\Soap\StructType\GetSecurityCategoriesResponse
     */
    public function setGetSecurityCategoriesResult(\Brainloop\Soap\StructType\BLItemCollection $getSecurityCategoriesResult = null)
    {
        if (is_null($getSecurityCategoriesResult) || (is_array($getSecurityCategoriesResult) && empty($getSecurityCategoriesResult))) {
            unset($this->GetSecurityCategoriesResult);
        } else {
            $this->GetSecurityCategoriesResult = $getSecurityCategoriesResult;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\GetSecurityCategoriesResponse
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
