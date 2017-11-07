<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetWatchlistItemsResponse StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class GetWatchlistItemsResponse extends AbstractStructBase
{
    /**
     * The GetWatchlistItemsResult
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Brainloop\Soap\StructType\BLItemCollection
     */
    public $GetWatchlistItemsResult;
    /**
     * Constructor method for GetWatchlistItemsResponse
     * @uses GetWatchlistItemsResponse::setGetWatchlistItemsResult()
     * @param \Brainloop\Soap\StructType\BLItemCollection $getWatchlistItemsResult
     */
    public function __construct(\Brainloop\Soap\StructType\BLItemCollection $getWatchlistItemsResult = null)
    {
        $this
            ->setGetWatchlistItemsResult($getWatchlistItemsResult);
    }
    /**
     * Get GetWatchlistItemsResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Brainloop\Soap\StructType\BLItemCollection|null
     */
    public function getGetWatchlistItemsResult()
    {
        return isset($this->GetWatchlistItemsResult) ? $this->GetWatchlistItemsResult : null;
    }
    /**
     * Set GetWatchlistItemsResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Brainloop\Soap\StructType\BLItemCollection $getWatchlistItemsResult
     * @return \Brainloop\Soap\StructType\GetWatchlistItemsResponse
     */
    public function setGetWatchlistItemsResult(\Brainloop\Soap\StructType\BLItemCollection $getWatchlistItemsResult = null)
    {
        if (is_null($getWatchlistItemsResult) || (is_array($getWatchlistItemsResult) && empty($getWatchlistItemsResult))) {
            unset($this->GetWatchlistItemsResult);
        } else {
            $this->GetWatchlistItemsResult = $getWatchlistItemsResult;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\GetWatchlistItemsResponse
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
