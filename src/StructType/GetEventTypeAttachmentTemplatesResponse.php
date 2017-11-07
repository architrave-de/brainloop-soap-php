<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetEventTypeAttachmentTemplatesResponse StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class GetEventTypeAttachmentTemplatesResponse extends AbstractStructBase
{
    /**
     * The GetEventTypeAttachmentTemplatesResult
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Brainloop\Soap\StructType\EventTypeAttachmentCollection
     */
    public $GetEventTypeAttachmentTemplatesResult;
    /**
     * Constructor method for GetEventTypeAttachmentTemplatesResponse
     * @uses GetEventTypeAttachmentTemplatesResponse::setGetEventTypeAttachmentTemplatesResult()
     * @param \Brainloop\Soap\StructType\EventTypeAttachmentCollection $getEventTypeAttachmentTemplatesResult
     */
    public function __construct(\Brainloop\Soap\StructType\EventTypeAttachmentCollection $getEventTypeAttachmentTemplatesResult = null)
    {
        $this
            ->setGetEventTypeAttachmentTemplatesResult($getEventTypeAttachmentTemplatesResult);
    }
    /**
     * Get GetEventTypeAttachmentTemplatesResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Brainloop\Soap\StructType\EventTypeAttachmentCollection|null
     */
    public function getGetEventTypeAttachmentTemplatesResult()
    {
        return isset($this->GetEventTypeAttachmentTemplatesResult) ? $this->GetEventTypeAttachmentTemplatesResult : null;
    }
    /**
     * Set GetEventTypeAttachmentTemplatesResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Brainloop\Soap\StructType\EventTypeAttachmentCollection $getEventTypeAttachmentTemplatesResult
     * @return \Brainloop\Soap\StructType\GetEventTypeAttachmentTemplatesResponse
     */
    public function setGetEventTypeAttachmentTemplatesResult(\Brainloop\Soap\StructType\EventTypeAttachmentCollection $getEventTypeAttachmentTemplatesResult = null)
    {
        if (is_null($getEventTypeAttachmentTemplatesResult) || (is_array($getEventTypeAttachmentTemplatesResult) && empty($getEventTypeAttachmentTemplatesResult))) {
            unset($this->GetEventTypeAttachmentTemplatesResult);
        } else {
            $this->GetEventTypeAttachmentTemplatesResult = $getEventTypeAttachmentTemplatesResult;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\GetEventTypeAttachmentTemplatesResponse
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
