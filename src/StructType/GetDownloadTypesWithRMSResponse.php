<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetDownloadTypesWithRMSResponse StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class GetDownloadTypesWithRMSResponse extends AbstractStructBase
{
    /**
     * The GetDownloadTypesWithRMSResult
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Brainloop\Soap\ArrayType\ArrayOfDownloadType
     */
    public $GetDownloadTypesWithRMSResult;
    /**
     * Constructor method for GetDownloadTypesWithRMSResponse
     * @uses GetDownloadTypesWithRMSResponse::setGetDownloadTypesWithRMSResult()
     * @param \Brainloop\Soap\ArrayType\ArrayOfDownloadType $getDownloadTypesWithRMSResult
     */
    public function __construct(\Brainloop\Soap\ArrayType\ArrayOfDownloadType $getDownloadTypesWithRMSResult = null)
    {
        $this
            ->setGetDownloadTypesWithRMSResult($getDownloadTypesWithRMSResult);
    }
    /**
     * Get GetDownloadTypesWithRMSResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Brainloop\Soap\ArrayType\ArrayOfDownloadType|null
     */
    public function getGetDownloadTypesWithRMSResult()
    {
        return isset($this->GetDownloadTypesWithRMSResult) ? $this->GetDownloadTypesWithRMSResult : null;
    }
    /**
     * Set GetDownloadTypesWithRMSResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Brainloop\Soap\ArrayType\ArrayOfDownloadType $getDownloadTypesWithRMSResult
     * @return \Brainloop\Soap\StructType\GetDownloadTypesWithRMSResponse
     */
    public function setGetDownloadTypesWithRMSResult(\Brainloop\Soap\ArrayType\ArrayOfDownloadType $getDownloadTypesWithRMSResult = null)
    {
        if (is_null($getDownloadTypesWithRMSResult) || (is_array($getDownloadTypesWithRMSResult) && empty($getDownloadTypesWithRMSResult))) {
            unset($this->GetDownloadTypesWithRMSResult);
        } else {
            $this->GetDownloadTypesWithRMSResult = $getDownloadTypesWithRMSResult;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\GetDownloadTypesWithRMSResponse
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
