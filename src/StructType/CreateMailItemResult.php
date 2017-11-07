<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateMailItemResult StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:CreateMailItemResult
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class CreateMailItemResult extends AbstractStructBase
{
    /**
     * The MailItem
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var \Brainloop\Soap\StructType\MailItem
     */
    public $MailItem;
    /**
     * Constructor method for CreateMailItemResult
     * @uses CreateMailItemResult::setMailItem()
     * @param \Brainloop\Soap\StructType\MailItem $mailItem
     */
    public function __construct(\Brainloop\Soap\StructType\MailItem $mailItem = null)
    {
        $this
            ->setMailItem($mailItem);
    }
    /**
     * Get MailItem value
     * @return \Brainloop\Soap\StructType\MailItem|null
     */
    public function getMailItem()
    {
        return $this->MailItem;
    }
    /**
     * Set MailItem value
     * @param \Brainloop\Soap\StructType\MailItem $mailItem
     * @return \Brainloop\Soap\StructType\CreateMailItemResult
     */
    public function setMailItem(\Brainloop\Soap\StructType\MailItem $mailItem = null)
    {
        $this->MailItem = $mailItem;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\CreateMailItemResult
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
