<?php

namespace Nerova\Sdk\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PartnerNotificationConsentResponse implements Parsable 
{
    /**
     * @var array<PartnerNotificationConsentEvent>|null $events The events property
    */
    private ?array $events = null;
    
    /**
     * @var string|null $marketingStatus The marketingStatus property
    */
    private ?string $marketingStatus = null;
    
    /**
     * @var string|null $recipientReference The recipientReference property
    */
    private ?string $recipientReference = null;
    
    /**
     * @var DateTime|null $updatedAt The updatedAt property
    */
    private ?DateTime $updatedAt = null;
    
    /**
     * @var string|null $utilityStatus The utilityStatus property
    */
    private ?string $utilityStatus = null;
    
    /**
     * @var string|null $version The version property
    */
    private ?string $version = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PartnerNotificationConsentResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PartnerNotificationConsentResponse {
        return new PartnerNotificationConsentResponse();
    }

    /**
     * Gets the events property value. The events property
     * @return array<PartnerNotificationConsentEvent>|null
    */
    public function getEvents(): ?array {
        return $this->events;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'events' => fn(ParseNode $n) => $o->setEvents($n->getCollectionOfObjectValues([PartnerNotificationConsentEvent::class, 'createFromDiscriminatorValue'])),
            'marketingStatus' => fn(ParseNode $n) => $o->setMarketingStatus($n->getStringValue()),
            'recipientReference' => fn(ParseNode $n) => $o->setRecipientReference($n->getStringValue()),
            'updatedAt' => fn(ParseNode $n) => $o->setUpdatedAt($n->getDateTimeValue()),
            'utilityStatus' => fn(ParseNode $n) => $o->setUtilityStatus($n->getStringValue()),
            'version' => fn(ParseNode $n) => $o->setVersion($n->getStringValue()),
        ];
    }

    /**
     * Gets the marketingStatus property value. The marketingStatus property
     * @return string|null
    */
    public function getMarketingStatus(): ?string {
        return $this->marketingStatus;
    }

    /**
     * Gets the recipientReference property value. The recipientReference property
     * @return string|null
    */
    public function getRecipientReference(): ?string {
        return $this->recipientReference;
    }

    /**
     * Gets the updatedAt property value. The updatedAt property
     * @return DateTime|null
    */
    public function getUpdatedAt(): ?DateTime {
        return $this->updatedAt;
    }

    /**
     * Gets the utilityStatus property value. The utilityStatus property
     * @return string|null
    */
    public function getUtilityStatus(): ?string {
        return $this->utilityStatus;
    }

    /**
     * Gets the version property value. The version property
     * @return string|null
    */
    public function getVersion(): ?string {
        return $this->version;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('events', $this->getEvents());
        $writer->writeStringValue('marketingStatus', $this->getMarketingStatus());
        $writer->writeStringValue('recipientReference', $this->getRecipientReference());
        $writer->writeDateTimeValue('updatedAt', $this->getUpdatedAt());
        $writer->writeStringValue('utilityStatus', $this->getUtilityStatus());
        $writer->writeStringValue('version', $this->getVersion());
    }

    /**
     * Sets the events property value. The events property
     * @param array<PartnerNotificationConsentEvent>|null $value Value to set for the events property.
    */
    public function setEvents(?array $value): void {
        $this->events = $value;
    }

    /**
     * Sets the marketingStatus property value. The marketingStatus property
     * @param string|null $value Value to set for the marketingStatus property.
    */
    public function setMarketingStatus(?string $value): void {
        $this->marketingStatus = $value;
    }

    /**
     * Sets the recipientReference property value. The recipientReference property
     * @param string|null $value Value to set for the recipientReference property.
    */
    public function setRecipientReference(?string $value): void {
        $this->recipientReference = $value;
    }

    /**
     * Sets the updatedAt property value. The updatedAt property
     * @param DateTime|null $value Value to set for the updatedAt property.
    */
    public function setUpdatedAt(?DateTime $value): void {
        $this->updatedAt = $value;
    }

    /**
     * Sets the utilityStatus property value. The utilityStatus property
     * @param string|null $value Value to set for the utilityStatus property.
    */
    public function setUtilityStatus(?string $value): void {
        $this->utilityStatus = $value;
    }

    /**
     * Sets the version property value. The version property
     * @param string|null $value Value to set for the version property.
    */
    public function setVersion(?string $value): void {
        $this->version = $value;
    }

}
