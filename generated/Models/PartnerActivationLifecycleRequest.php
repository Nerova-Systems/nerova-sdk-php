<?php

namespace Nerova\Sdk\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PartnerActivationLifecycleRequest implements Parsable 
{
    /**
     * @var int|null $expectedVersion The expectedVersion property
    */
    private ?int $expectedVersion = null;
    
    /**
     * @var string|null $reasonCode The reasonCode property
    */
    private ?string $reasonCode = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PartnerActivationLifecycleRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PartnerActivationLifecycleRequest {
        return new PartnerActivationLifecycleRequest();
    }

    /**
     * Gets the expectedVersion property value. The expectedVersion property
     * @return int|null
    */
    public function getExpectedVersion(): ?int {
        return $this->expectedVersion;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'expectedVersion' => fn(ParseNode $n) => $o->setExpectedVersion($n->getIntegerValue()),
            'reasonCode' => fn(ParseNode $n) => $o->setReasonCode($n->getStringValue()),
        ];
    }

    /**
     * Gets the reasonCode property value. The reasonCode property
     * @return string|null
    */
    public function getReasonCode(): ?string {
        return $this->reasonCode;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('expectedVersion', $this->getExpectedVersion());
        $writer->writeStringValue('reasonCode', $this->getReasonCode());
    }

    /**
     * Sets the expectedVersion property value. The expectedVersion property
     * @param int|null $value Value to set for the expectedVersion property.
    */
    public function setExpectedVersion(?int $value): void {
        $this->expectedVersion = $value;
    }

    /**
     * Sets the reasonCode property value. The reasonCode property
     * @param string|null $value Value to set for the reasonCode property.
    */
    public function setReasonCode(?string $value): void {
        $this->reasonCode = $value;
    }

}
