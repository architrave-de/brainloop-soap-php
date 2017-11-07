<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSystemAnnouncementsResponse StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class GetSystemAnnouncementsResponse extends AbstractStructBase
{
    /**
     * The GetSystemAnnouncementsResult
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Brainloop\Soap\StructType\ArticleCollection
     */
    public $GetSystemAnnouncementsResult;
    /**
     * Constructor method for GetSystemAnnouncementsResponse
     * @uses GetSystemAnnouncementsResponse::setGetSystemAnnouncementsResult()
     * @param \Brainloop\Soap\StructType\ArticleCollection $getSystemAnnouncementsResult
     */
    public function __construct(\Brainloop\Soap\StructType\ArticleCollection $getSystemAnnouncementsResult = null)
    {
        $this
            ->setGetSystemAnnouncementsResult($getSystemAnnouncementsResult);
    }
    /**
     * Get GetSystemAnnouncementsResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Brainloop\Soap\StructType\ArticleCollection|null
     */
    public function getGetSystemAnnouncementsResult()
    {
        return isset($this->GetSystemAnnouncementsResult) ? $this->GetSystemAnnouncementsResult : null;
    }
    /**
     * Set GetSystemAnnouncementsResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Brainloop\Soap\StructType\ArticleCollection $getSystemAnnouncementsResult
     * @return \Brainloop\Soap\StructType\GetSystemAnnouncementsResponse
     */
    public function setGetSystemAnnouncementsResult(\Brainloop\Soap\StructType\ArticleCollection $getSystemAnnouncementsResult = null)
    {
        if (is_null($getSystemAnnouncementsResult) || (is_array($getSystemAnnouncementsResult) && empty($getSystemAnnouncementsResult))) {
            unset($this->GetSystemAnnouncementsResult);
        } else {
            $this->GetSystemAnnouncementsResult = $getSystemAnnouncementsResult;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\GetSystemAnnouncementsResponse
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
