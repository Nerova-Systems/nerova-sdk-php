<?php

namespace Nerova\Sdk\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PartnerNotificationItem implements Parsable 
{
    /**
     * @var string|null $category The category property
    */
    private ?string $category = null;
    
    /**
     * @var string|null $consentPurpose The consentPurpose property
    */
    private ?string $consentPurpose = null;
    
    /**
     * @var DateTime|null $createdAt The createdAt property
    */
    private ?DateTime $createdAt = null;
    
    /**
     * @var DateTime|null $deliveredAt The deliveredAt property
    */
    private ?DateTime $deliveredAt = null;
    
    /**
     * @var string|null $externalReference The externalReference property
    */
    private ?string $externalReference = null;
    
    /**
     * @var PartnerNotificationFailure|null $failure The failure property
    */
    private ?PartnerNotificationFailure $failure = null;
    
    /**
     * @var PartnerNotificationFeedback|null $feedback The feedback property
    */
    private ?PartnerNotificationFeedback $feedback = null;
    
    /**
     * @var PartnerRuntimeHostReference|null $hostReference The hostReference property
    */
    private ?PartnerRuntimeHostReference $hostReference = null;
    
    /**
     * @var string|null $id The id property
    */
    private ?string $id = null;
    
    /**
     * @var DateTime|null $readAt The readAt property
    */
    private ?DateTime $readAt = null;
    
    /**
     * @var string|null $recipientReference The recipientReference property
    */
    private ?string $recipientReference = null;
    
    /**
     * @var DateTime|null $sentAt The sentAt property
    */
    private ?DateTime $sentAt = null;
    
    /**
     * @var string|null $status The status property
    */
    private ?string $status = null;
    
    /**
     * @var string|null $templateName The templateName property
    */
    private ?string $templateName = null;
    
    /**
     * @var string|null $type The type property
    */
    private ?string $type = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PartnerNotificationItem
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PartnerNotificationItem {
        return new PartnerNotificationItem();
    }

    /**
     * Gets the category property value. The category property
     * @return string|null
    */
    public function getCategory(): ?string {
        return $this->category;
    }

    /**
     * Gets the consentPurpose property value. The consentPurpose property
     * @return string|null
    */
    public function getConsentPurpose(): ?string {
        return $this->consentPurpose;
    }

    /**
     * Gets the createdAt property value. The createdAt property
     * @return DateTime|null
    */
    public function getCreatedAt(): ?DateTime {
        return $this->createdAt;
    }

    /**
     * Gets the deliveredAt property value. The deliveredAt property
     * @return DateTime|null
    */
    public function getDeliveredAt(): ?DateTime {
        return $this->deliveredAt;
    }

    /**
     * Gets the externalReference property value. The externalReference property
     * @return string|null
    */
    public function getExternalReference(): ?string {
        return $this->externalReference;
    }

    /**
     * Gets the failure property value. The failure property
     * @return PartnerNotificationFailure|null
    */
    public function getFailure(): ?PartnerNotificationFailure {
        return $this->failure;
    }

    /**
     * Gets the feedback property value. The feedback property
     * @return PartnerNotificationFeedback|null
    */
    public function getFeedback(): ?PartnerNotificationFeedback {
        return $this->feedback;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'category' => fn(ParseNode $n) => $o->setCategory($n->getStringValue()),
            'consentPurpose' => fn(ParseNode $n) => $o->setConsentPurpose($n->getStringValue()),
            'createdAt' => fn(ParseNode $n) => $o->setCreatedAt($n->getDateTimeValue()),
            'deliveredAt' => fn(ParseNode $n) => $o->setDeliveredAt($n->getDateTimeValue()),
            'externalReference' => fn(ParseNode $n) => $o->setExternalReference($n->getStringValue()),
            'failure' => fn(ParseNode $n) => $o->setFailure($n->getObjectValue([PartnerNotificationFailure::class, 'createFromDiscriminatorValue'])),
            'feedback' => fn(ParseNode $n) => $o->setFeedback($n->getObjectValue([PartnerNotificationFeedback::class, 'createFromDiscriminatorValue'])),
            'hostReference' => fn(ParseNode $n) => $o->setHostReference($n->getObjectValue([PartnerRuntimeHostReference::class, 'createFromDiscriminatorValue'])),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'readAt' => fn(ParseNode $n) => $o->setReadAt($n->getDateTimeValue()),
            'recipientReference' => fn(ParseNode $n) => $o->setRecipientReference($n->getStringValue()),
            'sentAt' => fn(ParseNode $n) => $o->setSentAt($n->getDateTimeValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getStringValue()),
            'templateName' => fn(ParseNode $n) => $o->setTemplateName($n->getStringValue()),
            'type' => fn(ParseNode $n) => $o->setType($n->getStringValue()),
        ];
    }

    /**
     * Gets the hostReference property value. The hostReference property
     * @return PartnerRuntimeHostReference|null
    */
    public function getHostReference(): ?PartnerRuntimeHostReference {
        return $this->hostReference;
    }

    /**
     * Gets the id property value. The id property
     * @return string|null
    */
    public function getId(): ?string {
        return $this->id;
    }

    /**
     * Gets the readAt property value. The readAt property
     * @return DateTime|null
    */
    public function getReadAt(): ?DateTime {
        return $this->readAt;
    }

    /**
     * Gets the recipientReference property value. The recipientReference property
     * @return string|null
    */
    public function getRecipientReference(): ?string {
        return $this->recipientReference;
    }

    /**
     * Gets the sentAt property value. The sentAt property
     * @return DateTime|null
    */
    public function getSentAt(): ?DateTime {
        return $this->sentAt;
    }

    /**
     * Gets the status property value. The status property
     * @return string|null
    */
    public function getStatus(): ?string {
        return $this->status;
    }

    /**
     * Gets the templateName property value. The templateName property
     * @return string|null
    */
    public function getTemplateName(): ?string {
        return $this->templateName;
    }

    /**
     * Gets the type property value. The type property
     * @return string|null
    */
    public function getType(): ?string {
        return $this->type;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('category', $this->getCategory());
        $writer->writeStringValue('consentPurpose', $this->getConsentPurpose());
        $writer->writeDateTimeValue('createdAt', $this->getCreatedAt());
        $writer->writeDateTimeValue('deliveredAt', $this->getDeliveredAt());
        $writer->writeStringValue('externalReference', $this->getExternalReference());
        $writer->writeObjectValue('failure', $this->getFailure());
        $writer->writeObjectValue('feedback', $this->getFeedback());
        $writer->writeObjectValue('hostReference', $this->getHostReference());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeDateTimeValue('readAt', $this->getReadAt());
        $writer->writeStringValue('recipientReference', $this->getRecipientReference());
        $writer->writeDateTimeValue('sentAt', $this->getSentAt());
        $writer->writeStringValue('status', $this->getStatus());
        $writer->writeStringValue('templateName', $this->getTemplateName());
        $writer->writeStringValue('type', $this->getType());
    }

    /**
     * Sets the category property value. The category property
     * @param string|null $value Value to set for the category property.
    */
    public function setCategory(?string $value): void {
        $this->category = $value;
    }

    /**
     * Sets the consentPurpose property value. The consentPurpose property
     * @param string|null $value Value to set for the consentPurpose property.
    */
    public function setConsentPurpose(?string $value): void {
        $this->consentPurpose = $value;
    }

    /**
     * Sets the createdAt property value. The createdAt property
     * @param DateTime|null $value Value to set for the createdAt property.
    */
    public function setCreatedAt(?DateTime $value): void {
        $this->createdAt = $value;
    }

    /**
     * Sets the deliveredAt property value. The deliveredAt property
     * @param DateTime|null $value Value to set for the deliveredAt property.
    */
    public function setDeliveredAt(?DateTime $value): void {
        $this->deliveredAt = $value;
    }

    /**
     * Sets the externalReference property value. The externalReference property
     * @param string|null $value Value to set for the externalReference property.
    */
    public function setExternalReference(?string $value): void {
        $this->externalReference = $value;
    }

    /**
     * Sets the failure property value. The failure property
     * @param PartnerNotificationFailure|null $value Value to set for the failure property.
    */
    public function setFailure(?PartnerNotificationFailure $value): void {
        $this->failure = $value;
    }

    /**
     * Sets the feedback property value. The feedback property
     * @param PartnerNotificationFeedback|null $value Value to set for the feedback property.
    */
    public function setFeedback(?PartnerNotificationFeedback $value): void {
        $this->feedback = $value;
    }

    /**
     * Sets the hostReference property value. The hostReference property
     * @param PartnerRuntimeHostReference|null $value Value to set for the hostReference property.
    */
    public function setHostReference(?PartnerRuntimeHostReference $value): void {
        $this->hostReference = $value;
    }

    /**
     * Sets the id property value. The id property
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->id = $value;
    }

    /**
     * Sets the readAt property value. The readAt property
     * @param DateTime|null $value Value to set for the readAt property.
    */
    public function setReadAt(?DateTime $value): void {
        $this->readAt = $value;
    }

    /**
     * Sets the recipientReference property value. The recipientReference property
     * @param string|null $value Value to set for the recipientReference property.
    */
    public function setRecipientReference(?string $value): void {
        $this->recipientReference = $value;
    }

    /**
     * Sets the sentAt property value. The sentAt property
     * @param DateTime|null $value Value to set for the sentAt property.
    */
    public function setSentAt(?DateTime $value): void {
        $this->sentAt = $value;
    }

    /**
     * Sets the status property value. The status property
     * @param string|null $value Value to set for the status property.
    */
    public function setStatus(?string $value): void {
        $this->status = $value;
    }

    /**
     * Sets the templateName property value. The templateName property
     * @param string|null $value Value to set for the templateName property.
    */
    public function setTemplateName(?string $value): void {
        $this->templateName = $value;
    }

    /**
     * Sets the type property value. The type property
     * @param string|null $value Value to set for the type property.
    */
    public function setType(?string $value): void {
        $this->type = $value;
    }

}
