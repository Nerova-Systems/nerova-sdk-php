<?php

namespace Nerova\Sdk\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PartnerRuntimeActionResponse implements Parsable 
{
    /**
     * @var string|null $actionId The actionId property
    */
    private ?string $actionId = null;
    
    /**
     * @var string|null $idempotencyStatus The idempotencyStatus property
    */
    private ?string $idempotencyStatus = null;
    
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
     * @var string|null $version The version property
    */
    private ?string $version = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PartnerRuntimeActionResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PartnerRuntimeActionResponse {
        return new PartnerRuntimeActionResponse();
    }

    /**
     * Gets the actionId property value. The actionId property
     * @return string|null
    */
    public function getActionId(): ?string {
        return $this->actionId;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'actionId' => fn(ParseNode $n) => $o->setActionId($n->getStringValue()),
            'idempotencyStatus' => fn(ParseNode $n) => $o->setIdempotencyStatus($n->getStringValue()),
            'resourceId' => fn(ParseNode $n) => $o->setResourceId($n->getStringValue()),
            'resourceType' => fn(ParseNode $n) => $o->setResourceType($n->getStringValue()),
            'state' => fn(ParseNode $n) => $o->setState($n->getStringValue()),
            'version' => fn(ParseNode $n) => $o->setVersion($n->getStringValue()),
        ];
    }

    /**
     * Gets the idempotencyStatus property value. The idempotencyStatus property
     * @return string|null
    */
    public function getIdempotencyStatus(): ?string {
        return $this->idempotencyStatus;
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
        $writer->writeStringValue('actionId', $this->getActionId());
        $writer->writeStringValue('idempotencyStatus', $this->getIdempotencyStatus());
        $writer->writeStringValue('resourceId', $this->getResourceId());
        $writer->writeStringValue('resourceType', $this->getResourceType());
        $writer->writeStringValue('state', $this->getState());
        $writer->writeStringValue('version', $this->getVersion());
    }

    /**
     * Sets the actionId property value. The actionId property
     * @param string|null $value Value to set for the actionId property.
    */
    public function setActionId(?string $value): void {
        $this->actionId = $value;
    }

    /**
     * Sets the idempotencyStatus property value. The idempotencyStatus property
     * @param string|null $value Value to set for the idempotencyStatus property.
    */
    public function setIdempotencyStatus(?string $value): void {
        $this->idempotencyStatus = $value;
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

    /**
     * Sets the version property value. The version property
     * @param string|null $value Value to set for the version property.
    */
    public function setVersion(?string $value): void {
        $this->version = $value;
    }

}
