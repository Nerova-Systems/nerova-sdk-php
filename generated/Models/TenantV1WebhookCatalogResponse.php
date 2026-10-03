<?php

namespace Nerova\Sdk\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TenantV1WebhookCatalogResponse implements Parsable 
{
    /**
     * @var string|null $currentApiVersion The currentApiVersion property
    */
    private ?string $currentApiVersion = null;
    
    /**
     * @var array<TenantV1WebhookCatalogEntry>|null $events The events property
    */
    private ?array $events = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TenantV1WebhookCatalogResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TenantV1WebhookCatalogResponse {
        return new TenantV1WebhookCatalogResponse();
    }

    /**
     * Gets the currentApiVersion property value. The currentApiVersion property
     * @return string|null
    */
    public function getCurrentApiVersion(): ?string {
        return $this->currentApiVersion;
    }

    /**
     * Gets the events property value. The events property
     * @return array<TenantV1WebhookCatalogEntry>|null
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
            'currentApiVersion' => fn(ParseNode $n) => $o->setCurrentApiVersion($n->getStringValue()),
            'events' => fn(ParseNode $n) => $o->setEvents($n->getCollectionOfObjectValues([TenantV1WebhookCatalogEntry::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('currentApiVersion', $this->getCurrentApiVersion());
        $writer->writeCollectionOfObjectValues('events', $this->getEvents());
    }

    /**
     * Sets the currentApiVersion property value. The currentApiVersion property
     * @param string|null $value Value to set for the currentApiVersion property.
    */
    public function setCurrentApiVersion(?string $value): void {
        $this->currentApiVersion = $value;
    }

    /**
     * Sets the events property value. The events property
     * @param array<TenantV1WebhookCatalogEntry>|null $value Value to set for the events property.
    */
    public function setEvents(?array $value): void {
        $this->events = $value;
    }

}
