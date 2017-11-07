<?php

namespace Brainloop\Soap\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfReport ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfReport
 * @subpackage Arrays
 * @generated on Tue, 07 Nov 17 12 44
 */
class ArrayOfReport extends AbstractStructArrayBase
{
    /**
     * The Report
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Brainloop\Soap\StructType\Report[]
     */
    public $Report;
    /**
     * Constructor method for ArrayOfReport
     * @uses ArrayOfReport::setReport()
     * @param \Brainloop\Soap\StructType\Report[] $report
     */
    public function __construct(array $report = array())
    {
        $this
            ->setReport($report);
    }
    /**
     * Get Report value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Brainloop\Soap\StructType\Report[]|null
     */
    public function getReport()
    {
        return isset($this->Report) ? $this->Report : null;
    }
    /**
     * Set Report value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Brainloop\Soap\StructType\Report[] $report
     * @return \Brainloop\Soap\ArrayType\ArrayOfReport
     */
    public function setReport(array $report = array())
    {
        foreach ($report as $arrayOfReportReportItem) {
            // validation for constraint: itemType
            if (!$arrayOfReportReportItem instanceof \Brainloop\Soap\StructType\Report) {
                throw new \InvalidArgumentException(sprintf('The Report property can only contain items of \Brainloop\Soap\StructType\Report, "%s" given', is_object($arrayOfReportReportItem) ? get_class($arrayOfReportReportItem) : gettype($arrayOfReportReportItem)), __LINE__);
            }
        }
        if (is_null($report) || (is_array($report) && empty($report))) {
            unset($this->Report);
        } else {
            $this->Report = $report;
        }
        return $this;
    }
    /**
     * Add item to Report value
     * @throws \InvalidArgumentException
     * @param \Brainloop\Soap\StructType\Report $item
     * @return \Brainloop\Soap\ArrayType\ArrayOfReport
     */
    public function addToReport(\Brainloop\Soap\StructType\Report $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Brainloop\Soap\StructType\Report) {
            throw new \InvalidArgumentException(sprintf('The Report property can only contain items of \Brainloop\Soap\StructType\Report, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Report[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Brainloop\Soap\StructType\Report|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Brainloop\Soap\StructType\Report|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Brainloop\Soap\StructType\Report|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Brainloop\Soap\StructType\Report|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Brainloop\Soap\StructType\Report|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Report
     */
    public function getAttributeName()
    {
        return 'Report';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\ArrayType\ArrayOfReport
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
