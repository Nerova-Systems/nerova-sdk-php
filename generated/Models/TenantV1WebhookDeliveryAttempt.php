<?php

namespace Nerova\Sdk\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TenantV1WebhookDeliveryAttempt implements Parsable 
{
    /**
     * @var DateTime|null $at The at property
    */
    private ?DateTime $at = null;
    
    /**
     * @var int|null $durationMs The durationMs property
    */
    private ?int $durationMs = null;
    
    /**
     * @var string|null $error The error property
    */
    private ?string $error = null;
    
    /**
     * @var int|null $statusCode The statusCode property
    */
    private ?int $statusCode = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TenantV1WebhookDeliveryAttempt
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TenantV1WebhookDeliveryAttempt {
        return new TenantV1WebhookDeliveryAttempt();
    }

    /**
     * Gets the at property value. The at property
     * @return DateTime|null
    */
    public function getAt(): ?DateTime {
        return $this->at;
    }

    /**
     * Gets the durationMs property value. The durationMs property
     * @return int|null
    */
    public function getDurationMs(): ?int {
        return $this->durationMs;
    }

    /**
     * Gets the error property value. The error property
     * @return string|null
    */
    public function getError(): ?string {
        return $this->error;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'at' => fn(ParseNode $n) => $o->setAt($n->getDateTimeValue()),
            'durationMs' => fn(ParseNode $n) => $o->setDurationMs($n->getIntegerValue()),
            'error' => fn(ParseNode $n) => $o->setError($n->getStringValue()),
            'statusCode' => fn(ParseNode $n) => $o->setStatusCode($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the statusCode property value. The statusCode property
     * @return int|null
    */
    public function getStatusCode(): ?int {
        return $this->statusCode;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeDateTimeValue('at', $this->getAt());
        $writer->writeIntegerValue('durationMs', $this->getDurationMs());
        $writer->writeStringValue('error', $this->getError());
        $writer->writeIntegerValue('statusCode', $this->getStatusCode());
    }

    /**
     * Sets the at property value. The at property
     * @param DateTime|null $value Value to set for the at property.
    */
    public function setAt(?DateTime $value): void {
        $this->at = $value;
    }

    /**
     * Sets the durationMs property value. The durationMs property
     * @param int|null $value Value to set for the durationMs property.
    */
    public function setDurationMs(?int $value): void {
        $this->durationMs = $value;
    }

    /**
     * Sets the error property value. The error property
     * @param string|null $value Value to set for the error property.
    */
    public function setError(?string $value): void {
        $this->error = $value;
    }

    /**
     * Sets the statusCode property value. The statusCode property
     * @param int|null $value Value to set for the statusCode property.
    */
    public function setStatusCode(?int $value): void {
        $this->statusCode = $value;
    }

}
