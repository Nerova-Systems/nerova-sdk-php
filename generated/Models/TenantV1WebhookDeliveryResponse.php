<?php

namespace Nerova\Sdk\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TenantV1WebhookDeliveryResponse implements Parsable 
{
    /**
     * @var int|null $attemptCount The attemptCount property
    */
    private ?int $attemptCount = null;
    
    /**
     * @var DateTime|null $createdAt The createdAt property
    */
    private ?DateTime $createdAt = null;
    
    /**
     * @var int|null $durationMs The durationMs property
    */
    private ?int $durationMs = null;
    
    /**
     * @var string|null $endpointId The endpointId property
    */
    private ?string $endpointId = null;
    
    /**
     * @var string|null $eventId The eventId property
    */
    private ?string $eventId = null;
    
    /**
     * @var string|null $eventType The eventType property
    */
    private ?string $eventType = null;
    
    /**
     * @var string|null $id The id property
    */
    private ?string $id = null;
    
    /**
     * @var DateTime|null $lastAttemptAt The lastAttemptAt property
    */
    private ?DateTime $lastAttemptAt = null;
    
    /**
     * @var int|null $maxAttempts The maxAttempts property
    */
    private ?int $maxAttempts = null;
    
    /**
     * @var DateTime|null $nextAttemptAt The nextAttemptAt property
    */
    private ?DateTime $nextAttemptAt = null;
    
    /**
     * @var string|null $requestUrl The requestUrl property
    */
    private ?string $requestUrl = null;
    
    /**
     * @var int|null $responseStatusCode The responseStatusCode property
    */
    private ?int $responseStatusCode = null;
    
    /**
     * @var string|null $status The status property
    */
    private ?string $status = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TenantV1WebhookDeliveryResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TenantV1WebhookDeliveryResponse {
        return new TenantV1WebhookDeliveryResponse();
    }

    /**
     * Gets the attemptCount property value. The attemptCount property
     * @return int|null
    */
    public function getAttemptCount(): ?int {
        return $this->attemptCount;
    }

    /**
     * Gets the createdAt property value. The createdAt property
     * @return DateTime|null
    */
    public function getCreatedAt(): ?DateTime {
        return $this->createdAt;
    }

    /**
     * Gets the durationMs property value. The durationMs property
     * @return int|null
    */
    public function getDurationMs(): ?int {
        return $this->durationMs;
    }

    /**
     * Gets the endpointId property value. The endpointId property
     * @return string|null
    */
    public function getEndpointId(): ?string {
        return $this->endpointId;
    }

    /**
     * Gets the eventId property value. The eventId property
     * @return string|null
    */
    public function getEventId(): ?string {
        return $this->eventId;
    }

    /**
     * Gets the eventType property value. The eventType property
     * @return string|null
    */
    public function getEventType(): ?string {
        return $this->eventType;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'attemptCount' => fn(ParseNode $n) => $o->setAttemptCount($n->getIntegerValue()),
            'createdAt' => fn(ParseNode $n) => $o->setCreatedAt($n->getDateTimeValue()),
            'durationMs' => fn(ParseNode $n) => $o->setDurationMs($n->getIntegerValue()),
            'endpointId' => fn(ParseNode $n) => $o->setEndpointId($n->getStringValue()),
            'eventId' => fn(ParseNode $n) => $o->setEventId($n->getStringValue()),
            'eventType' => fn(ParseNode $n) => $o->setEventType($n->getStringValue()),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'lastAttemptAt' => fn(ParseNode $n) => $o->setLastAttemptAt($n->getDateTimeValue()),
            'maxAttempts' => fn(ParseNode $n) => $o->setMaxAttempts($n->getIntegerValue()),
            'nextAttemptAt' => fn(ParseNode $n) => $o->setNextAttemptAt($n->getDateTimeValue()),
            'requestUrl' => fn(ParseNode $n) => $o->setRequestUrl($n->getStringValue()),
            'responseStatusCode' => fn(ParseNode $n) => $o->setResponseStatusCode($n->getIntegerValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getStringValue()),
        ];
    }

    /**
     * Gets the id property value. The id property
     * @return string|null
    */
    public function getId(): ?string {
        return $this->id;
    }

    /**
     * Gets the lastAttemptAt property value. The lastAttemptAt property
     * @return DateTime|null
    */
    public function getLastAttemptAt(): ?DateTime {
        return $this->lastAttemptAt;
    }

    /**
     * Gets the maxAttempts property value. The maxAttempts property
     * @return int|null
    */
    public function getMaxAttempts(): ?int {
        return $this->maxAttempts;
    }

    /**
     * Gets the nextAttemptAt property value. The nextAttemptAt property
     * @return DateTime|null
    */
    public function getNextAttemptAt(): ?DateTime {
        return $this->nextAttemptAt;
    }

    /**
     * Gets the requestUrl property value. The requestUrl property
     * @return string|null
    */
    public function getRequestUrl(): ?string {
        return $this->requestUrl;
    }

    /**
     * Gets the responseStatusCode property value. The responseStatusCode property
     * @return int|null
    */
    public function getResponseStatusCode(): ?int {
        return $this->responseStatusCode;
    }

    /**
     * Gets the status property value. The status property
     * @return string|null
    */
    public function getStatus(): ?string {
        return $this->status;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('attemptCount', $this->getAttemptCount());
        $writer->writeDateTimeValue('createdAt', $this->getCreatedAt());
        $writer->writeIntegerValue('durationMs', $this->getDurationMs());
        $writer->writeStringValue('endpointId', $this->getEndpointId());
        $writer->writeStringValue('eventId', $this->getEventId());
        $writer->writeStringValue('eventType', $this->getEventType());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeDateTimeValue('lastAttemptAt', $this->getLastAttemptAt());
        $writer->writeIntegerValue('maxAttempts', $this->getMaxAttempts());
        $writer->writeDateTimeValue('nextAttemptAt', $this->getNextAttemptAt());
        $writer->writeStringValue('requestUrl', $this->getRequestUrl());
        $writer->writeIntegerValue('responseStatusCode', $this->getResponseStatusCode());
        $writer->writeStringValue('status', $this->getStatus());
    }

    /**
     * Sets the attemptCount property value. The attemptCount property
     * @param int|null $value Value to set for the attemptCount property.
    */
    public function setAttemptCount(?int $value): void {
        $this->attemptCount = $value;
    }

    /**
     * Sets the createdAt property value. The createdAt property
     * @param DateTime|null $value Value to set for the createdAt property.
    */
    public function setCreatedAt(?DateTime $value): void {
        $this->createdAt = $value;
    }

    /**
     * Sets the durationMs property value. The durationMs property
     * @param int|null $value Value to set for the durationMs property.
    */
    public function setDurationMs(?int $value): void {
        $this->durationMs = $value;
    }

    /**
     * Sets the endpointId property value. The endpointId property
     * @param string|null $value Value to set for the endpointId property.
    */
    public function setEndpointId(?string $value): void {
        $this->endpointId = $value;
    }

    /**
     * Sets the eventId property value. The eventId property
     * @param string|null $value Value to set for the eventId property.
    */
    public function setEventId(?string $value): void {
        $this->eventId = $value;
    }

    /**
     * Sets the eventType property value. The eventType property
     * @param string|null $value Value to set for the eventType property.
    */
    public function setEventType(?string $value): void {
        $this->eventType = $value;
    }

    /**
     * Sets the id property value. The id property
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->id = $value;
    }

    /**
     * Sets the lastAttemptAt property value. The lastAttemptAt property
     * @param DateTime|null $value Value to set for the lastAttemptAt property.
    */
    public function setLastAttemptAt(?DateTime $value): void {
        $this->lastAttemptAt = $value;
    }

    /**
     * Sets the maxAttempts property value. The maxAttempts property
     * @param int|null $value Value to set for the maxAttempts property.
    */
    public function setMaxAttempts(?int $value): void {
        $this->maxAttempts = $value;
    }

    /**
     * Sets the nextAttemptAt property value. The nextAttemptAt property
     * @param DateTime|null $value Value to set for the nextAttemptAt property.
    */
    public function setNextAttemptAt(?DateTime $value): void {
        $this->nextAttemptAt = $value;
    }

    /**
     * Sets the requestUrl property value. The requestUrl property
     * @param string|null $value Value to set for the requestUrl property.
    */
    public function setRequestUrl(?string $value): void {
        $this->requestUrl = $value;
    }

    /**
     * Sets the responseStatusCode property value. The responseStatusCode property
     * @param int|null $value Value to set for the responseStatusCode property.
    */
    public function setResponseStatusCode(?int $value): void {
        $this->responseStatusCode = $value;
    }

    /**
     * Sets the status property value. The status property
     * @param string|null $value Value to set for the status property.
    */
    public function setStatus(?string $value): void {
        $this->status = $value;
    }

}
