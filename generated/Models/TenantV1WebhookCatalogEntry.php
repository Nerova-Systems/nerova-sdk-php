<?php

namespace Nerova\Sdk\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TenantV1WebhookCatalogEntry implements Parsable 
{
    /**
     * @var string|null $description The description property
    */
    private ?string $description = null;
    
    /**
     * @var bool|null $live The live property
    */
    private ?bool $live = null;
    
    /**
     * @var string|null $objectType The objectType property
    */
    private ?string $objectType = null;
    
    /**
     * @var string|null $type The type property
    */
    private ?string $type = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TenantV1WebhookCatalogEntry
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TenantV1WebhookCatalogEntry {
        return new TenantV1WebhookCatalogEntry();
    }

    /**
     * Gets the description property value. The description property
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'live' => fn(ParseNode $n) => $o->setLive($n->getBooleanValue()),
            'objectType' => fn(ParseNode $n) => $o->setObjectType($n->getStringValue()),
            'type' => fn(ParseNode $n) => $o->setType($n->getStringValue()),
        ];
    }

    /**
     * Gets the live property value. The live property
     * @return bool|null
    */
    public function getLive(): ?bool {
        return $this->live;
    }

    /**
     * Gets the objectType property value. The objectType property
     * @return string|null
    */
    public function getObjectType(): ?string {
        return $this->objectType;
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
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeBooleanValue('live', $this->getLive());
        $writer->writeStringValue('objectType', $this->getObjectType());
        $writer->writeStringValue('type', $this->getType());
    }

    /**
     * Sets the description property value. The description property
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->description = $value;
    }

    /**
     * Sets the live property value. The live property
     * @param bool|null $value Value to set for the live property.
    */
    public function setLive(?bool $value): void {
        $this->live = $value;
    }

    /**
     * Sets the objectType property value. The objectType property
     * @param string|null $value Value to set for the objectType property.
    */
    public function setObjectType(?string $value): void {
        $this->objectType = $value;
    }

    /**
     * Sets the type property value. The type property
     * @param string|null $value Value to set for the type property.
    */
    public function setType(?string $value): void {
        $this->type = $value;
    }

}
