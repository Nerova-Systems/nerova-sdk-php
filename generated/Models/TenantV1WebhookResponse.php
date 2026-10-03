<?php

namespace Nerova\Sdk\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class TenantV1WebhookResponse implements Parsable 
{
    /**
     * @var string|null $apiVersion The apiVersion property
    */
    private ?string $apiVersion = null;
    
    /**
     * @var DateTime|null $createdAt The createdAt property
    */
    private ?DateTime $createdAt = null;
    
    /**
     * @var string|null $description The description property
    */
    private ?string $description = null;
    
    /**
     * @var array<string>|null $eventFilters The eventFilters property
    */
    private ?array $eventFilters = null;
    
    /**
     * @var string|null $id The id property
    */
    private ?string $id = null;
    
    /**
     * @var TenantV1WebhookLastDelivery|null $lastDelivery The lastDelivery property
    */
    private ?TenantV1WebhookLastDelivery $lastDelivery = null;
    
    /**
     * @var string|null $mode The mode property
    */
    private ?string $mode = null;
    
    /**
     * @var DateTime|null $pausedAt The pausedAt property
    */
    private ?DateTime $pausedAt = null;
    
    /**
     * @var string|null $pausedReason The pausedReason property
    */
    private ?string $pausedReason = null;
    
    /**
     * @var DateTime|null $previousSecretExpiresAt The previousSecretExpiresAt property
    */
    private ?DateTime $previousSecretExpiresAt = null;
    
    /**
     * @var string|null $secret The secret property
    */
    private ?string $secret = null;
    
    /**
     * @var string|null $status The status property
    */
    private ?string $status = null;
    
    /**
     * @var string|null $url The url property
    */
    private ?string $url = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TenantV1WebhookResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TenantV1WebhookResponse {
        return new TenantV1WebhookResponse();
    }

    /**
     * Gets the apiVersion property value. The apiVersion property
     * @return string|null
    */
    public function getApiVersion(): ?string {
        return $this->apiVersion;
    }

    /**
     * Gets the createdAt property value. The createdAt property
     * @return DateTime|null
    */
    public function getCreatedAt(): ?DateTime {
        return $this->createdAt;
    }

    /**
     * Gets the description property value. The description property
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * Gets the eventFilters property value. The eventFilters property
     * @return array<string>|null
    */
    public function getEventFilters(): ?array {
        return $this->eventFilters;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'apiVersion' => fn(ParseNode $n) => $o->setApiVersion($n->getStringValue()),
            'createdAt' => fn(ParseNode $n) => $o->setCreatedAt($n->getDateTimeValue()),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'eventFilters' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setEventFilters($val);
            },
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'lastDelivery' => fn(ParseNode $n) => $o->setLastDelivery($n->getObjectValue([TenantV1WebhookLastDelivery::class, 'createFromDiscriminatorValue'])),
            'mode' => fn(ParseNode $n) => $o->setMode($n->getStringValue()),
            'pausedAt' => fn(ParseNode $n) => $o->setPausedAt($n->getDateTimeValue()),
            'pausedReason' => fn(ParseNode $n) => $o->setPausedReason($n->getStringValue()),
            'previousSecretExpiresAt' => fn(ParseNode $n) => $o->setPreviousSecretExpiresAt($n->getDateTimeValue()),
            'secret' => fn(ParseNode $n) => $o->setSecret($n->getStringValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getStringValue()),
            'url' => fn(ParseNode $n) => $o->setUrl($n->getStringValue()),
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
     * Gets the lastDelivery property value. The lastDelivery property
     * @return TenantV1WebhookLastDelivery|null
    */
    public function getLastDelivery(): ?TenantV1WebhookLastDelivery {
        return $this->lastDelivery;
    }

    /**
     * Gets the mode property value. The mode property
     * @return string|null
    */
    public function getMode(): ?string {
        return $this->mode;
    }

    /**
     * Gets the pausedAt property value. The pausedAt property
     * @return DateTime|null
    */
    public function getPausedAt(): ?DateTime {
        return $this->pausedAt;
    }

    /**
     * Gets the pausedReason property value. The pausedReason property
     * @return string|null
    */
    public function getPausedReason(): ?string {
        return $this->pausedReason;
    }

    /**
     * Gets the previousSecretExpiresAt property value. The previousSecretExpiresAt property
     * @return DateTime|null
    */
    public function getPreviousSecretExpiresAt(): ?DateTime {
        return $this->previousSecretExpiresAt;
    }

    /**
     * Gets the secret property value. The secret property
     * @return string|null
    */
    public function getSecret(): ?string {
        return $this->secret;
    }

    /**
     * Gets the status property value. The status property
     * @return string|null
    */
    public function getStatus(): ?string {
        return $this->status;
    }

    /**
     * Gets the url property value. The url property
     * @return string|null
    */
    public function getUrl(): ?string {
        return $this->url;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('apiVersion', $this->getApiVersion());
        $writer->writeDateTimeValue('createdAt', $this->getCreatedAt());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeCollectionOfPrimitiveValues('eventFilters', $this->getEventFilters());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeObjectValue('lastDelivery', $this->getLastDelivery());
        $writer->writeStringValue('mode', $this->getMode());
        $writer->writeDateTimeValue('pausedAt', $this->getPausedAt());
        $writer->writeStringValue('pausedReason', $this->getPausedReason());
        $writer->writeDateTimeValue('previousSecretExpiresAt', $this->getPreviousSecretExpiresAt());
        $writer->writeStringValue('secret', $this->getSecret());
        $writer->writeStringValue('status', $this->getStatus());
        $writer->writeStringValue('url', $this->getUrl());
    }

    /**
     * Sets the apiVersion property value. The apiVersion property
     * @param string|null $value Value to set for the apiVersion property.
    */
    public function setApiVersion(?string $value): void {
        $this->apiVersion = $value;
    }

    /**
     * Sets the createdAt property value. The createdAt property
     * @param DateTime|null $value Value to set for the createdAt property.
    */
    public function setCreatedAt(?DateTime $value): void {
        $this->createdAt = $value;
    }

    /**
     * Sets the description property value. The description property
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->description = $value;
    }

    /**
     * Sets the eventFilters property value. The eventFilters property
     * @param array<string>|null $value Value to set for the eventFilters property.
    */
    public function setEventFilters(?array $value): void {
        $this->eventFilters = $value;
    }

    /**
     * Sets the id property value. The id property
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->id = $value;
    }

    /**
     * Sets the lastDelivery property value. The lastDelivery property
     * @param TenantV1WebhookLastDelivery|null $value Value to set for the lastDelivery property.
    */
    public function setLastDelivery(?TenantV1WebhookLastDelivery $value): void {
        $this->lastDelivery = $value;
    }

    /**
     * Sets the mode property value. The mode property
     * @param string|null $value Value to set for the mode property.
    */
    public function setMode(?string $value): void {
        $this->mode = $value;
    }

    /**
     * Sets the pausedAt property value. The pausedAt property
     * @param DateTime|null $value Value to set for the pausedAt property.
    */
    public function setPausedAt(?DateTime $value): void {
        $this->pausedAt = $value;
    }

    /**
     * Sets the pausedReason property value. The pausedReason property
     * @param string|null $value Value to set for the pausedReason property.
    */
    public function setPausedReason(?string $value): void {
        $this->pausedReason = $value;
    }

    /**
     * Sets the previousSecretExpiresAt property value. The previousSecretExpiresAt property
     * @param DateTime|null $value Value to set for the previousSecretExpiresAt property.
    */
    public function setPreviousSecretExpiresAt(?DateTime $value): void {
        $this->previousSecretExpiresAt = $value;
    }

    /**
     * Sets the secret property value. The secret property
     * @param string|null $value Value to set for the secret property.
    */
    public function setSecret(?string $value): void {
        $this->secret = $value;
    }

    /**
     * Sets the status property value. The status property
     * @param string|null $value Value to set for the status property.
    */
    public function setStatus(?string $value): void {
        $this->status = $value;
    }

    /**
     * Sets the url property value. The url property
     * @param string|null $value Value to set for the url property.
    */
    public function setUrl(?string $value): void {
        $this->url = $value;
    }

}
