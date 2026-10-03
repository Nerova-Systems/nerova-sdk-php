<?php

namespace Nerova\Sdk\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ProviderCapabilityEvidence implements Parsable 
{
    /**
     * @var ExternalBookingCapability|null $capability The capability property
    */
    private ?ExternalBookingCapability $capability = null;
    
    /**
     * @var string|null $evidence The evidence property
    */
    private ?string $evidence = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ProviderCapabilityEvidence
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ProviderCapabilityEvidence {
        return new ProviderCapabilityEvidence();
    }

    /**
     * Gets the capability property value. The capability property
     * @return ExternalBookingCapability|null
    */
    public function getCapability(): ?ExternalBookingCapability {
        return $this->capability;
    }

    /**
     * Gets the evidence property value. The evidence property
     * @return string|null
    */
    public function getEvidence(): ?string {
        return $this->evidence;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'capability' => fn(ParseNode $n) => $o->setCapability($n->getEnumValue(ExternalBookingCapability::class)),
            'evidence' => fn(ParseNode $n) => $o->setEvidence($n->getStringValue()),
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('capability', $this->getCapability());
        $writer->writeStringValue('evidence', $this->getEvidence());
    }

    /**
     * Sets the capability property value. The capability property
     * @param ExternalBookingCapability|null $value Value to set for the capability property.
    */
    public function setCapability(?ExternalBookingCapability $value): void {
        $this->capability = $value;
    }

    /**
     * Sets the evidence property value. The evidence property
     * @param string|null $value Value to set for the evidence property.
    */
    public function setEvidence(?string $value): void {
        $this->evidence = $value;
    }

}
