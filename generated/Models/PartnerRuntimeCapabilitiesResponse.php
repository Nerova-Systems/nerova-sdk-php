<?php

namespace Nerova\Sdk\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PartnerRuntimeCapabilitiesResponse implements Parsable 
{
    /**
     * @var string|null $availability The availability property
    */
    private ?string $availability = null;
    
    /**
     * @var DateTime|null $observedAt The observedAt property
    */
    private ?DateTime $observedAt = null;
    
    /**
     * @var array<PartnerRuntimeCapabilityNode>|null $providers The providers property
    */
    private ?array $providers = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PartnerRuntimeCapabilitiesResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PartnerRuntimeCapabilitiesResponse {
        return new PartnerRuntimeCapabilitiesResponse();
    }

    /**
     * Gets the availability property value. The availability property
     * @return string|null
    */
    public function getAvailability(): ?string {
        return $this->availability;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'availability' => fn(ParseNode $n) => $o->setAvailability($n->getStringValue()),
            'observedAt' => fn(ParseNode $n) => $o->setObservedAt($n->getDateTimeValue()),
            'providers' => fn(ParseNode $n) => $o->setProviders($n->getCollectionOfObjectValues([PartnerRuntimeCapabilityNode::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the observedAt property value. The observedAt property
     * @return DateTime|null
    */
    public function getObservedAt(): ?DateTime {
        return $this->observedAt;
    }

    /**
     * Gets the providers property value. The providers property
     * @return array<PartnerRuntimeCapabilityNode>|null
    */
    public function getProviders(): ?array {
        return $this->providers;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('availability', $this->getAvailability());
        $writer->writeDateTimeValue('observedAt', $this->getObservedAt());
        $writer->writeCollectionOfObjectValues('providers', $this->getProviders());
    }

    /**
     * Sets the availability property value. The availability property
     * @param string|null $value Value to set for the availability property.
    */
    public function setAvailability(?string $value): void {
        $this->availability = $value;
    }

    /**
     * Sets the observedAt property value. The observedAt property
     * @param DateTime|null $value Value to set for the observedAt property.
    */
    public function setObservedAt(?DateTime $value): void {
        $this->observedAt = $value;
    }

    /**
     * Sets the providers property value. The providers property
     * @param array<PartnerRuntimeCapabilityNode>|null $value Value to set for the providers property.
    */
    public function setProviders(?array $value): void {
        $this->providers = $value;
    }

}
