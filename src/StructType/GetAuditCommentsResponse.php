<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAuditCommentsResponse StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class GetAuditCommentsResponse extends AbstractStructBase
{
    /**
     * The GetAuditCommentsResult
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Brainloop\Soap\ArrayType\ArrayOfAuditComments
     */
    public $GetAuditCommentsResult;
    /**
     * Constructor method for GetAuditCommentsResponse
     * @uses GetAuditCommentsResponse::setGetAuditCommentsResult()
     * @param \Brainloop\Soap\ArrayType\ArrayOfAuditComments $getAuditCommentsResult
     */
    public function __construct(\Brainloop\Soap\ArrayType\ArrayOfAuditComments $getAuditCommentsResult = null)
    {
        $this
            ->setGetAuditCommentsResult($getAuditCommentsResult);
    }
    /**
     * Get GetAuditCommentsResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Brainloop\Soap\ArrayType\ArrayOfAuditComments|null
     */
    public function getGetAuditCommentsResult()
    {
        return isset($this->GetAuditCommentsResult) ? $this->GetAuditCommentsResult : null;
    }
    /**
     * Set GetAuditCommentsResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Brainloop\Soap\ArrayType\ArrayOfAuditComments $getAuditCommentsResult
     * @return \Brainloop\Soap\StructType\GetAuditCommentsResponse
     */
    public function setGetAuditCommentsResult(\Brainloop\Soap\ArrayType\ArrayOfAuditComments $getAuditCommentsResult = null)
    {
        if (is_null($getAuditCommentsResult) || (is_array($getAuditCommentsResult) && empty($getAuditCommentsResult))) {
            unset($this->GetAuditCommentsResult);
        } else {
            $this->GetAuditCommentsResult = $getAuditCommentsResult;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\GetAuditCommentsResponse
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
