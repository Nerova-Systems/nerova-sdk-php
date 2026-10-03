<?php

namespace Nerova\Sdk\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PartnerRuntimeHostReference implements Parsable 
{
    /**
     * @var string|null $owner The owner property
    */
    private ?string $owner = null;
    
    /**
     * @var string|null $resourceId The resourceId property
    */
    private ?string $resourceId = null;
    
    /**
     * @var string|null $resourceType The resourceType property
    */
    private ?string $resourceType = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PartnerRuntimeHostReference
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PartnerRuntimeHostReference {
        return new PartnerRuntimeHostReference();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'owner' => fn(ParseNode $n) => $o->setOwner($n->getStringValue()),
            'resourceId' => fn(ParseNode $n) => $o->setResourceId($n->getStringValue()),
            'resourceType' => fn(ParseNode $n) => $o->setResourceType($n->getStringValue()),
        ];
    }

    /**
     * Gets the owner property value. The owner property
     * @return string|null
    */
    public function getOwner(): ?string {
        return $this->owner;
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
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('owner', $this->getOwner());
        $writer->writeStringValue('resourceId', $this->getResourceId());
        $writer->writeStringValue('resourceType', $this->getResourceType());
    }

    /**
     * Sets the owner property value. The owner property
     * @param string|null $value Value to set for the owner property.
    */
    public function setOwner(?string $value): void {
        $this->owner = $value;
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

}
