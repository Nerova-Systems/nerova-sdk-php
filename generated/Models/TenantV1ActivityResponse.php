<?php

namespace Nerova\Sdk\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TenantV1ActivityResponse implements Parsable 
{
    /**
     * @var DateTime|null $asOf The asOf property
    */
    private ?DateTime $asOf = null;
    
    /**
     * @var array<TenantV1ActivityItem>|null $items The items property
    */
    private ?array $items = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TenantV1ActivityResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TenantV1ActivityResponse {
        return new TenantV1ActivityResponse();
    }

    /**
     * Gets the asOf property value. The asOf property
     * @return DateTime|null
    */
    public function getAsOf(): ?DateTime {
        return $this->asOf;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'asOf' => fn(ParseNode $n) => $o->setAsOf($n->getDateTimeValue()),
            'items' => fn(ParseNode $n) => $o->setItems($n->getCollectionOfObjectValues([TenantV1ActivityItem::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the items property value. The items property
     * @return array<TenantV1ActivityItem>|null
    */
    public function getItems(): ?array {
        return $this->items;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeDateTimeValue('asOf', $this->getAsOf());
        $writer->writeCollectionOfObjectValues('items', $this->getItems());
    }

    /**
     * Sets the asOf property value. The asOf property
     * @param DateTime|null $value Value to set for the asOf property.
    */
    public function setAsOf(?DateTime $value): void {
        $this->asOf = $value;
    }

    /**
     * Sets the items property value. The items property
     * @param array<TenantV1ActivityItem>|null $value Value to set for the items property.
    */
    public function setItems(?array $value): void {
        $this->items = $value;
    }

}
