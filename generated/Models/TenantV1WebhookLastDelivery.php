<?php

namespace Nerova\Sdk\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TenantV1WebhookLastDelivery implements Parsable 
{
    /**
     * @var DateTime|null $at The at property
    */
    private ?DateTime $at = null;
    
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
     * @return TenantV1WebhookLastDelivery
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TenantV1WebhookLastDelivery {
        return new TenantV1WebhookLastDelivery();
    }

    /**
     * Gets the at property value. The at property
     * @return DateTime|null
    */
    public function getAt(): ?DateTime {
        return $this->at;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'at' => fn(ParseNode $n) => $o->setAt($n->getDateTimeValue()),
            'responseStatusCode' => fn(ParseNode $n) => $o->setResponseStatusCode($n->getIntegerValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getStringValue()),
        ];
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
        $writer->writeDateTimeValue('at', $this->getAt());
        $writer->writeIntegerValue('responseStatusCode', $this->getResponseStatusCode());
        $writer->writeStringValue('status', $this->getStatus());
    }

    /**
     * Sets the at property value. The at property
     * @param DateTime|null $value Value to set for the at property.
    */
    public function setAt(?DateTime $value): void {
        $this->at = $value;
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
