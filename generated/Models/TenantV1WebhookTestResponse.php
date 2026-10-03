<?php

namespace Nerova\Sdk\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TenantV1WebhookTestResponse implements Parsable 
{
    /**
     * @var string|null $deliveryId The deliveryId property
    */
    private ?string $deliveryId = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TenantV1WebhookTestResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TenantV1WebhookTestResponse {
        return new TenantV1WebhookTestResponse();
    }

    /**
     * Gets the deliveryId property value. The deliveryId property
     * @return string|null
    */
    public function getDeliveryId(): ?string {
        return $this->deliveryId;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'deliveryId' => fn(ParseNode $n) => $o->setDeliveryId($n->getStringValue()),
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('deliveryId', $this->getDeliveryId());
    }

    /**
     * Sets the deliveryId property value. The deliveryId property
     * @param string|null $value Value to set for the deliveryId property.
    */
    public function setDeliveryId(?string $value): void {
        $this->deliveryId = $value;
    }

}
