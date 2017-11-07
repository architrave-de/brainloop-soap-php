<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Article StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:Article
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class Article extends BLItem
{
    /**
     * The AttachmentItemID
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $AttachmentItemID;
    /**
     * The EndDate
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $EndDate;
    /**
     * The HtmlContent
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $HtmlContent;
    /**
     * The StartDate
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $StartDate;
    /**
     * The Subject
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $Subject;
    /**
     * The WikiContent
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $WikiContent;
    /**
     * Constructor method for Article
     * @uses Article::setAttachmentItemID()
     * @uses Article::setEndDate()
     * @uses Article::setHtmlContent()
     * @uses Article::setStartDate()
     * @uses Article::setSubject()
     * @uses Article::setWikiContent()
     * @param int $attachmentItemID
     * @param string $endDate
     * @param string $htmlContent
     * @param string $startDate
     * @param string $subject
     * @param string $wikiContent
     */
    public function __construct($attachmentItemID = null, $endDate = null, $htmlContent = null, $startDate = null, $subject = null, $wikiContent = null)
    {
        $this
            ->setAttachmentItemID($attachmentItemID)
            ->setEndDate($endDate)
            ->setHtmlContent($htmlContent)
            ->setStartDate($startDate)
            ->setSubject($subject)
            ->setWikiContent($wikiContent);
    }
    /**
     * Get AttachmentItemID value
     * @return int|null
     */
    public function getAttachmentItemID()
    {
        return $this->AttachmentItemID;
    }
    /**
     * Set AttachmentItemID value
     * @param int $attachmentItemID
     * @return \Brainloop\Soap\StructType\Article
     */
    public function setAttachmentItemID($attachmentItemID = null)
    {
        // validation for constraint: int
        if (!is_null($attachmentItemID) && !is_numeric($attachmentItemID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($attachmentItemID)), __LINE__);
        }
        $this->AttachmentItemID = $attachmentItemID;
        return $this;
    }
    /**
     * Get EndDate value
     * @return string|null
     */
    public function getEndDate()
    {
        return $this->EndDate;
    }
    /**
     * Set EndDate value
     * @param string $endDate
     * @return \Brainloop\Soap\StructType\Article
     */
    public function setEndDate($endDate = null)
    {
        // validation for constraint: string
        if (!is_null($endDate) && !is_string($endDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($endDate)), __LINE__);
        }
        $this->EndDate = $endDate;
        return $this;
    }
    /**
     * Get HtmlContent value
     * @return string|null
     */
    public function getHtmlContent()
    {
        return $this->HtmlContent;
    }
    /**
     * Set HtmlContent value
     * @param string $htmlContent
     * @return \Brainloop\Soap\StructType\Article
     */
    public function setHtmlContent($htmlContent = null)
    {
        // validation for constraint: string
        if (!is_null($htmlContent) && !is_string($htmlContent)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($htmlContent)), __LINE__);
        }
        $this->HtmlContent = $htmlContent;
        return $this;
    }
    /**
     * Get StartDate value
     * @return string|null
     */
    public function getStartDate()
    {
        return $this->StartDate;
    }
    /**
     * Set StartDate value
     * @param string $startDate
     * @return \Brainloop\Soap\StructType\Article
     */
    public function setStartDate($startDate = null)
    {
        // validation for constraint: string
        if (!is_null($startDate) && !is_string($startDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($startDate)), __LINE__);
        }
        $this->StartDate = $startDate;
        return $this;
    }
    /**
     * Get Subject value
     * @return string|null
     */
    public function getSubject()
    {
        return $this->Subject;
    }
    /**
     * Set Subject value
     * @param string $subject
     * @return \Brainloop\Soap\StructType\Article
     */
    public function setSubject($subject = null)
    {
        // validation for constraint: string
        if (!is_null($subject) && !is_string($subject)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($subject)), __LINE__);
        }
        $this->Subject = $subject;
        return $this;
    }
    /**
     * Get WikiContent value
     * @return string|null
     */
    public function getWikiContent()
    {
        return $this->WikiContent;
    }
    /**
     * Set WikiContent value
     * @param string $wikiContent
     * @return \Brainloop\Soap\StructType\Article
     */
    public function setWikiContent($wikiContent = null)
    {
        // validation for constraint: string
        if (!is_null($wikiContent) && !is_string($wikiContent)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($wikiContent)), __LINE__);
        }
        $this->WikiContent = $wikiContent;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\Article
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
