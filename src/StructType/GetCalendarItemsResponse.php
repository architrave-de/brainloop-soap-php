<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCalendarItemsResponse StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class GetCalendarItemsResponse extends AbstractStructBase
{
    /**
     * The GetCalendarItemsResult
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Brainloop\Soap\StructType\BLItemCollection
     */
    public $GetCalendarItemsResult;
    /**
     * Constructor method for GetCalendarItemsResponse
     * @uses GetCalendarItemsResponse::setGetCalendarItemsResult()
     * @param \Brainloop\Soap\StructType\BLItemCollection $getCalendarItemsResult
     */
    public function __construct(\Brainloop\Soap\StructType\BLItemCollection $getCalendarItemsResult = null)
    {
        $this
            ->setGetCalendarItemsResult($getCalendarItemsResult);
    }
    /**
     * Get GetCalendarItemsResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Brainloop\Soap\StructType\BLItemCollection|null
     */
    public function getGetCalendarItemsResult()
    {
        return isset($this->GetCalendarItemsResult) ? $this->GetCalendarItemsResult : null;
    }
    /**
     * Set GetCalendarItemsResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Brainloop\Soap\StructType\BLItemCollection $getCalendarItemsResult
     * @return \Brainloop\Soap\StructType\GetCalendarItemsResponse
     */
    public function setGetCalendarItemsResult(\Brainloop\Soap\StructType\BLItemCollection $getCalendarItemsResult = null)
    {
        if (is_null($getCalendarItemsResult) || (is_array($getCalendarItemsResult) && empty($getCalendarItemsResult))) {
            unset($this->GetCalendarItemsResult);
        } else {
            $this->GetCalendarItemsResult = $getCalendarItemsResult;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\GetCalendarItemsResponse
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
