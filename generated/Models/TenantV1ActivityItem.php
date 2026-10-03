<?php

namespace Nerova\Sdk\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TenantV1ActivityItem implements Parsable 
{
    /**
     * @var DateTime|null $observedAt The observedAt property
    */
    private ?DateTime $observedAt = null;
    
    /**
     * @var string|null $resourceId The resourceId property
    */
    private ?string $resourceId = null;
    
    /**
     * @var string|null $resourceType The resourceType property
    */
    private ?string $resourceType = null;
    
    /**
     * @var string|null $state The state property
    */
    private ?string $state = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TenantV1ActivityItem
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TenantV1ActivityItem {
        return new TenantV1ActivityItem();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'observedAt' => fn(ParseNode $n) => $o->setObservedAt($n->getDateTimeValue()),
            'resourceId' => fn(ParseNode $n) => $o->setResourceId($n->getStringValue()),
            'resourceType' => fn(ParseNode $n) => $o->setResourceType($n->getStringValue()),
            'state' => fn(ParseNode $n) => $o->setState($n->getStringValue()),
        ];
    }

    /**
     * Gets the observedAt property value. The observedAt property
     * @return DateTime|null
    */
    public function getObservedAt(): ?DateTime {
        return $this->observedAt;
    }

    /**
     * Gets the resourceId property value. The resourceId property
     * @return string|null
    */
    public function getResourceId(): ?string {
        return $this->resourceId;
    }

    /**
     * Gets the resourceType property value. The resourceType property
     * @return string|null
    */
    public function getResourceType(): ?string {
        return $this->resourceType;
    }

    /**
     * Gets the state property value. The state property
     * @return string|null
    */
    public function getState(): ?string {
        return $this->state;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeDateTimeValue('observedAt', $this->getObservedAt());
        $writer->writeStringValue('resourceId', $this->getResourceId());
        $writer->writeStringValue('resourceType', $this->getResourceType());
        $writer->writeStringValue('state', $this->getState());
    }

    /**
     * Sets the observedAt property value. The observedAt property
     * @param DateTime|null $value Value to set for the observedAt property.
    */
    public function setObservedAt(?DateTime $value): void {
        $this->observedAt = $value;
    }

    /**
     * Sets the resourceId property value. The resourceId property
     * @param string|null $value Value to set for the resourceId property.
    */
    public function setResourceId(?string $value): void {
        $this->resourceId = $value;
    }

    /**
     * Sets the resourceType property value. The resourceType property
     * @param string|null $value Value to set for the resourceType property.
    */
    public function setResourceType(?string $value): void {
        $this->resourceType = $value;
    }

    /**
     * Sets the state property value. The state property
     * @param string|null $value Value to set for the state property.
    */
    public function setState(?string $value): void {
        $this->state = $value;
    }

}
