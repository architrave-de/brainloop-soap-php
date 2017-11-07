<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReportColumnCollection StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ReportColumnCollection
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class ReportColumnCollection extends AbstractStructBase
{
    /**
     * The ReportColumn
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Brainloop\Soap\StructType\ReportColumn[]
     */
    public $ReportColumn;
    /**
     * Constructor method for ReportColumnCollection
     * @uses ReportColumnCollection::setReportColumn()
     * @param \Brainloop\Soap\StructType\ReportColumn[] $reportColumn
     */
    public function __construct(array $reportColumn = array())
    {
        $this
            ->setReportColumn($reportColumn);
    }
    /**
     * Get ReportColumn value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Brainloop\Soap\StructType\ReportColumn[]|null
     */
    public function getReportColumn()
    {
        return isset($this->ReportColumn) ? $this->ReportColumn : null;
    }
    /**
     * Set ReportColumn value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Brainloop\Soap\StructType\ReportColumn[] $reportColumn
     * @return \Brainloop\Soap\StructType\ReportColumnCollection
     */
    public function setReportColumn(array $reportColumn = array())
    {
        foreach ($reportColumn as $reportColumnCollectionReportColumnItem) {
            // validation for constraint: itemType
            if (!$reportColumnCollectionReportColumnItem instanceof \Brainloop\Soap\StructType\ReportColumn) {
                throw new \InvalidArgumentException(sprintf('The ReportColumn property can only contain items of \Brainloop\Soap\StructType\ReportColumn, "%s" given', is_object($reportColumnCollectionReportColumnItem) ? get_class($reportColumnCollectionReportColumnItem) : gettype($reportColumnCollectionReportColumnItem)), __LINE__);
            }
        }
        if (is_null($reportColumn) || (is_array($reportColumn) && empty($reportColumn))) {
            unset($this->ReportColumn);
        } else {
            $this->ReportColumn = $reportColumn;
        }
        return $this;
    }
    /**
     * Add item to ReportColumn value
     * @throws \InvalidArgumentException
     * @param \Brainloop\Soap\StructType\ReportColumn $item
     * @return \Brainloop\Soap\StructType\ReportColumnCollection
     */
    public function addToReportColumn(\Brainloop\Soap\StructType\ReportColumn $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Brainloop\Soap\StructType\ReportColumn) {
            throw new \InvalidArgumentException(sprintf('The ReportColumn property can only contain items of \Brainloop\Soap\StructType\ReportColumn, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ReportColumn[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\ReportColumnCollection
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
