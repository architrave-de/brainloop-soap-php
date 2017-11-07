<?php

namespace Brainloop\Soap\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MailItem StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:MailItem
 * @subpackage Structs
 * @generated on Tue, 07 Nov 17 12 44
 */
class MailItem extends BLItem
{
    /**
     * The Connections
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var \Brainloop\Soap\ArrayType\ArrayOfMailItemConnection
     */
    public $Connections;
    /**
     * The DownloadType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $DownloadType;
    /**
     * The DueDate
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $DueDate;
    /**
     * The ExpireDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $ExpireDate;
    /**
     * The HasHtml
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $HasHtml;
    /**
     * The HtmlContent
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $HtmlContent;
    /**
     * The IsAuthorized
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsAuthorized;
    /**
     * The IsComplete
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var bool
     */
    public $IsComplete;
    /**
     * The IsExternal
     * @var bool
     */
    public $IsExternal;
    /**
     * The IsPublic
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var bool
     */
    public $IsPublic;
    /**
     * The MailType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $MailType;
    /**
     * The Recipients
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var \Brainloop\Soap\ArrayType\ArrayOfMailItemRecipientIDAndStatus
     */
    public $Recipients;
    /**
     * The Sender
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Brainloop\Soap\StructType\MailItemSender
     */
    public $Sender;
    /**
     * The SenderID
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $SenderID;
    /**
     * The Status
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Status;
    /**
     * The TokenURLs
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Brainloop\Soap\ArrayType\ArrayOfMailItemTokenURLs
     */
    public $TokenURLs;
    /**
     * Constructor method for MailItem
     * @uses MailItem::setConnections()
     * @uses MailItem::setDownloadType()
     * @uses MailItem::setDueDate()
     * @uses MailItem::setExpireDate()
     * @uses MailItem::setHasHtml()
     * @uses MailItem::setHtmlContent()
     * @uses MailItem::setIsAuthorized()
     * @uses MailItem::setIsComplete()
     * @uses MailItem::setIsExternal()
     * @uses MailItem::setIsPublic()
     * @uses MailItem::setMailType()
     * @uses MailItem::setRecipients()
     * @uses MailItem::setSender()
     * @uses MailItem::setSenderID()
     * @uses MailItem::setStatus()
     * @uses MailItem::setTokenURLs()
     * @param \Brainloop\Soap\ArrayType\ArrayOfMailItemConnection $connections
     * @param string $downloadType
     * @param string $dueDate
     * @param string $expireDate
     * @param bool $hasHtml
     * @param string $htmlContent
     * @param bool $isAuthorized
     * @param bool $isComplete
     * @param bool $isExternal
     * @param bool $isPublic
     * @param string $mailType
     * @param \Brainloop\Soap\ArrayType\ArrayOfMailItemRecipientIDAndStatus $recipients
     * @param \Brainloop\Soap\StructType\MailItemSender $sender
     * @param int $senderID
     * @param string $status
     * @param \Brainloop\Soap\ArrayType\ArrayOfMailItemTokenURLs $tokenURLs
     */
    public function __construct(\Brainloop\Soap\ArrayType\ArrayOfMailItemConnection $connections = null, $downloadType = null, $dueDate = null, $expireDate = null, $hasHtml = null, $htmlContent = null, $isAuthorized = null, $isComplete = null, $isExternal = null, $isPublic = null, $mailType = null, \Brainloop\Soap\ArrayType\ArrayOfMailItemRecipientIDAndStatus $recipients = null, \Brainloop\Soap\StructType\MailItemSender $sender = null, $senderID = null, $status = null, \Brainloop\Soap\ArrayType\ArrayOfMailItemTokenURLs $tokenURLs = null)
    {
        $this
            ->setConnections($connections)
            ->setDownloadType($downloadType)
            ->setDueDate($dueDate)
            ->setExpireDate($expireDate)
            ->setHasHtml($hasHtml)
            ->setHtmlContent($htmlContent)
            ->setIsAuthorized($isAuthorized)
            ->setIsComplete($isComplete)
            ->setIsExternal($isExternal)
            ->setIsPublic($isPublic)
            ->setMailType($mailType)
            ->setRecipients($recipients)
            ->setSender($sender)
            ->setSenderID($senderID)
            ->setStatus($status)
            ->setTokenURLs($tokenURLs);
    }
    /**
     * Get Connections value
     * @return \Brainloop\Soap\ArrayType\ArrayOfMailItemConnection|null
     */
    public function getConnections()
    {
        return $this->Connections;
    }
    /**
     * Set Connections value
     * @param \Brainloop\Soap\ArrayType\ArrayOfMailItemConnection $connections
     * @return \Brainloop\Soap\StructType\MailItem
     */
    public function setConnections(\Brainloop\Soap\ArrayType\ArrayOfMailItemConnection $connections = null)
    {
        $this->Connections = $connections;
        return $this;
    }
    /**
     * Get DownloadType value
     * @return string|null
     */
    public function getDownloadType()
    {
        return $this->DownloadType;
    }
    /**
     * Set DownloadType value
     * @uses \Brainloop\Soap\EnumType\MailItemDownloadType::valueIsValid()
     * @uses \Brainloop\Soap\EnumType\MailItemDownloadType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $downloadType
     * @return \Brainloop\Soap\StructType\MailItem
     */
    public function setDownloadType($downloadType = null)
    {
        // validation for constraint: enumeration
        if (!\Brainloop\Soap\EnumType\MailItemDownloadType::valueIsValid($downloadType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $downloadType, implode(', ', \Brainloop\Soap\EnumType\MailItemDownloadType::getValidValues())), __LINE__);
        }
        $this->DownloadType = $downloadType;
        return $this;
    }
    /**
     * Get DueDate value
     * @return string|null
     */
    public function getDueDate()
    {
        return $this->DueDate;
    }
    /**
     * Set DueDate value
     * @param string $dueDate
     * @return \Brainloop\Soap\StructType\MailItem
     */
    public function setDueDate($dueDate = null)
    {
        // validation for constraint: string
        if (!is_null($dueDate) && !is_string($dueDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($dueDate)), __LINE__);
        }
        $this->DueDate = $dueDate;
        return $this;
    }
    /**
     * Get ExpireDate value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getExpireDate()
    {
        return isset($this->ExpireDate) ? $this->ExpireDate : null;
    }
    /**
     * Set ExpireDate value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $expireDate
     * @return \Brainloop\Soap\StructType\MailItem
     */
    public function setExpireDate($expireDate = null)
    {
        // validation for constraint: string
        if (!is_null($expireDate) && !is_string($expireDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($expireDate)), __LINE__);
        }
        if (is_null($expireDate) || (is_array($expireDate) && empty($expireDate))) {
            unset($this->ExpireDate);
        } else {
            $this->ExpireDate = $expireDate;
        }
        return $this;
    }
    /**
     * Get HasHtml value
     * @return bool|null
     */
    public function getHasHtml()
    {
        return $this->HasHtml;
    }
    /**
     * Set HasHtml value
     * @param bool $hasHtml
     * @return \Brainloop\Soap\StructType\MailItem
     */
    public function setHasHtml($hasHtml = null)
    {
        // validation for constraint: boolean
        if (!is_null($hasHtml) && !is_bool($hasHtml)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($hasHtml)), __LINE__);
        }
        $this->HasHtml = $hasHtml;
        return $this;
    }
    /**
     * Get HtmlContent value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getHtmlContent()
    {
        return isset($this->HtmlContent) ? $this->HtmlContent : null;
    }
    /**
     * Set HtmlContent value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $htmlContent
     * @return \Brainloop\Soap\StructType\MailItem
     */
    public function setHtmlContent($htmlContent = null)
    {
        // validation for constraint: string
        if (!is_null($htmlContent) && !is_string($htmlContent)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($htmlContent)), __LINE__);
        }
        if (is_null($htmlContent) || (is_array($htmlContent) && empty($htmlContent))) {
            unset($this->HtmlContent);
        } else {
            $this->HtmlContent = $htmlContent;
        }
        return $this;
    }
    /**
     * Get IsAuthorized value
     * @return bool|null
     */
    public function getIsAuthorized()
    {
        return $this->IsAuthorized;
    }
    /**
     * Set IsAuthorized value
     * @param bool $isAuthorized
     * @return \Brainloop\Soap\StructType\MailItem
     */
    public function setIsAuthorized($isAuthorized = null)
    {
        // validation for constraint: boolean
        if (!is_null($isAuthorized) && !is_bool($isAuthorized)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isAuthorized)), __LINE__);
        }
        $this->IsAuthorized = $isAuthorized;
        return $this;
    }
    /**
     * Get IsComplete value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return bool|null
     */
    public function getIsComplete()
    {
        return isset($this->IsComplete) ? $this->IsComplete : null;
    }
    /**
     * Set IsComplete value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param bool $isComplete
     * @return \Brainloop\Soap\StructType\MailItem
     */
    public function setIsComplete($isComplete = null)
    {
        // validation for constraint: boolean
        if (!is_null($isComplete) && !is_bool($isComplete)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isComplete)), __LINE__);
        }
        if (is_null($isComplete) || (is_array($isComplete) && empty($isComplete))) {
            unset($this->IsComplete);
        } else {
            $this->IsComplete = $isComplete;
        }
        return $this;
    }
    /**
     * Get IsExternal value
     * @return bool|null
     */
    public function getIsExternal()
    {
        return $this->IsExternal;
    }
    /**
     * Set IsExternal value
     * @param bool $isExternal
     * @return \Brainloop\Soap\StructType\MailItem
     */
    public function setIsExternal($isExternal = null)
    {
        // validation for constraint: boolean
        if (!is_null($isExternal) && !is_bool($isExternal)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isExternal)), __LINE__);
        }
        $this->IsExternal = $isExternal;
        return $this;
    }
    /**
     * Get IsPublic value
     * @return bool|null
     */
    public function getIsPublic()
    {
        return $this->IsPublic;
    }
    /**
     * Set IsPublic value
     * @param bool $isPublic
     * @return \Brainloop\Soap\StructType\MailItem
     */
    public function setIsPublic($isPublic = null)
    {
        // validation for constraint: boolean
        if (!is_null($isPublic) && !is_bool($isPublic)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isPublic)), __LINE__);
        }
        $this->IsPublic = $isPublic;
        return $this;
    }
    /**
     * Get MailType value
     * @return string|null
     */
    public function getMailType()
    {
        return $this->MailType;
    }
    /**
     * Set MailType value
     * @uses \Brainloop\Soap\EnumType\MailItemType::valueIsValid()
     * @uses \Brainloop\Soap\EnumType\MailItemType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $mailType
     * @return \Brainloop\Soap\StructType\MailItem
     */
    public function setMailType($mailType = null)
    {
        // validation for constraint: enumeration
        if (!\Brainloop\Soap\EnumType\MailItemType::valueIsValid($mailType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $mailType, implode(', ', \Brainloop\Soap\EnumType\MailItemType::getValidValues())), __LINE__);
        }
        $this->MailType = $mailType;
        return $this;
    }
    /**
     * Get Recipients value
     * @return \Brainloop\Soap\ArrayType\ArrayOfMailItemRecipientIDAndStatus|null
     */
    public function getRecipients()
    {
        return $this->Recipients;
    }
    /**
     * Set Recipients value
     * @param \Brainloop\Soap\ArrayType\ArrayOfMailItemRecipientIDAndStatus $recipients
     * @return \Brainloop\Soap\StructType\MailItem
     */
    public function setRecipients(\Brainloop\Soap\ArrayType\ArrayOfMailItemRecipientIDAndStatus $recipients = null)
    {
        $this->Recipients = $recipients;
        return $this;
    }
    /**
     * Get Sender value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Brainloop\Soap\StructType\MailItemSender|null
     */
    public function getSender()
    {
        return isset($this->Sender) ? $this->Sender : null;
    }
    /**
     * Set Sender value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Brainloop\Soap\StructType\MailItemSender $sender
     * @return \Brainloop\Soap\StructType\MailItem
     */
    public function setSender(\Brainloop\Soap\StructType\MailItemSender $sender = null)
    {
        if (is_null($sender) || (is_array($sender) && empty($sender))) {
            unset($this->Sender);
        } else {
            $this->Sender = $sender;
        }
        return $this;
    }
    /**
     * Get SenderID value
     * @return int|null
     */
    public function getSenderID()
    {
        return $this->SenderID;
    }
    /**
     * Set SenderID value
     * @param int $senderID
     * @return \Brainloop\Soap\StructType\MailItem
     */
    public function setSenderID($senderID = null)
    {
        // validation for constraint: int
        if (!is_null($senderID) && !is_numeric($senderID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($senderID)), __LINE__);
        }
        $this->SenderID = $senderID;
        return $this;
    }
    /**
     * Get Status value
     * @return string|null
     */
    public function getStatus()
    {
        return $this->Status;
    }
    /**
     * Set Status value
     * @uses \Brainloop\Soap\EnumType\MailItemStatus::valueIsValid()
     * @uses \Brainloop\Soap\EnumType\MailItemStatus::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $status
     * @return \Brainloop\Soap\StructType\MailItem
     */
    public function setStatus($status = null)
    {
        // validation for constraint: enumeration
        if (!\Brainloop\Soap\EnumType\MailItemStatus::valueIsValid($status)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $status, implode(', ', \Brainloop\Soap\EnumType\MailItemStatus::getValidValues())), __LINE__);
        }
        $this->Status = $status;
        return $this;
    }
    /**
     * Get TokenURLs value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Brainloop\Soap\ArrayType\ArrayOfMailItemTokenURLs|null
     */
    public function getTokenURLs()
    {
        return isset($this->TokenURLs) ? $this->TokenURLs : null;
    }
    /**
     * Set TokenURLs value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Brainloop\Soap\ArrayType\ArrayOfMailItemTokenURLs $tokenURLs
     * @return \Brainloop\Soap\StructType\MailItem
     */
    public function setTokenURLs(\Brainloop\Soap\ArrayType\ArrayOfMailItemTokenURLs $tokenURLs = null)
    {
        if (is_null($tokenURLs) || (is_array($tokenURLs) && empty($tokenURLs))) {
            unset($this->TokenURLs);
        } else {
            $this->TokenURLs = $tokenURLs;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Brainloop\Soap\StructType\MailItem
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
