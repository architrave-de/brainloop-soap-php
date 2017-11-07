<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetEventTypeTemplatesResponse StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class GetEventTypeTemplatesResponse extends AbstractStructBase
{
    /**
     * The GetEventTypeTemplatesResult
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Brainloop\Soap\StructType\CalendarEventTemplateCollection
     */
    public $GetEventTypeTemplatesResult;
    /**
     * Constructor method for GetEventTypeTemplatesResponse
     * @uses GetEventTypeTemplatesResponse::setGetEventTypeTemplatesResult()
     * @param \Brainloop\Soap\StructType\CalendarEventTemplateCollection $getEventTypeTemplatesResult
     */
    public function __construct(\Brainloop\Soap\StructType\CalendarEventTemplateCollection $getEventTypeTemplatesResult = null)
    {
        $this
            ->setGetEventTypeTemplatesResult($getEventTypeTemplatesResult);
    }
    /**
     * Get GetEventTypeTemplatesResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Brainloop\Soap\StructType\CalendarEventTemplateCollection|null
     */
    public function getGetEventTypeTemplatesResult()
    {
        return isset($this->GetEventTypeTemplatesResult) ? $this->GetEventTypeTemplatesResult : null;
    }
    /**
     * Set GetEventTypeTemplatesResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Brainloop\Soap\StructType\CalendarEventTemplateCollection $getEventTypeTemplatesResult
     * @return \Brainloop\Soap\StructType\GetEventTypeTemplatesResponse
     */
    public function setGetEventTypeTemplatesResult(\Brainloop\Soap\StructType\CalendarEventTemplateCollection $getEventTypeTemplatesResult = null)
    {
        if (is_null($getEventTypeTemplatesResult) || (is_array($getEventTypeTemplatesResult) && empty($getEventTypeTemplatesResult))) {
            unset($this->GetEventTypeTemplatesResult);
        } else {
            $this->GetEventTypeTemplatesResult = $getEventTypeTemplatesResult;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\GetEventTypeTemplatesResponse
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
