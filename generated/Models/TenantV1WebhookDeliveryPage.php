<?php

namespace Nerova\Sdk\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TenantV1WebhookDeliveryPage implements Parsable 
{
    /**
     * @var array<TenantV1WebhookDeliveryResponse>|null $items The items property
    */
    private ?array $items = null;
    
    /**
     * @var string|null $nextCursor The nextCursor property
    */
    private ?string $nextCursor = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TenantV1WebhookDeliveryPage
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TenantV1WebhookDeliveryPage {
        return new TenantV1WebhookDeliveryPage();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'items' => fn(ParseNode $n) => $o->setItems($n->getCollectionOfObjectValues([TenantV1WebhookDeliveryResponse::class, 'createFromDiscriminatorValue'])),
            'nextCursor' => fn(ParseNode $n) => $o->setNextCursor($n->getStringValue()),
        ];
    }

    /**
     * Gets the items property value. The items property
     * @return array<TenantV1WebhookDeliveryResponse>|null
    */
    public function getItems(): ?array {
        return $this->items;
    }

    /**
     * Gets the nextCursor property value. The nextCursor property
     * @return string|null
    */
    public function getNextCursor(): ?string {
        return $this->nextCursor;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('items', $this->getItems());
        $writer->writeStringValue('nextCursor', $this->getNextCursor());
    }

    /**
     * Sets the items property value. The items property
     * @param array<TenantV1WebhookDeliveryResponse>|null $value Value to set for the items property.
    */
    public function setItems(?array $value): void {
        $this->items = $value;
    }

    /**
     * Sets the nextCursor property value. The nextCursor property
     * @param string|null $value Value to set for the nextCursor property.
    */
    public function setNextCursor(?string $value): void {
        $this->nextCursor = $value;
    }

}
