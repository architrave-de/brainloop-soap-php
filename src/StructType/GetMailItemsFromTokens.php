<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMailItemsFromTokens StructType
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class GetMailItemsFromTokens extends AbstractStructBase
{
    /**
     * The mailItemFilter
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Brainloop\Soap\StructType\MailItemParameters
     */
    public $mailItemFilter;
    /**
     * Constructor method for GetMailItemsFromTokens
     * @uses GetMailItemsFromTokens::setMailItemFilter()
     * @param \Brainloop\Soap\StructType\MailItemParameters $mailItemFilter
     */
    public function __construct(\Brainloop\Soap\StructType\MailItemParameters $mailItemFilter = null)
    {
        $this
            ->setMailItemFilter($mailItemFilter);
    }
    /**
     * Get mailItemFilter value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Brainloop\Soap\StructType\MailItemParameters|null
     */
    public function getMailItemFilter()
    {
        return isset($this->mailItemFilter) ? $this->mailItemFilter : null;
    }
    /**
     * Set mailItemFilter value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Brainloop\Soap\StructType\MailItemParameters $mailItemFilter
     * @return \Brainloop\Soap\StructType\GetMailItemsFromTokens
     */
    public function setMailItemFilter(\Brainloop\Soap\StructType\MailItemParameters $mailItemFilter = null)
    {
        if (is_null($mailItemFilter) || (is_array($mailItemFilter) && empty($mailItemFilter))) {
            unset($this->mailItemFilter);
        } else {
            $this->mailItemFilter = $mailItemFilter;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\GetMailItemsFromTokens
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
