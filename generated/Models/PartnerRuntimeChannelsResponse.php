<?php

namespace Nerova\Sdk\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PartnerRuntimeChannelsResponse implements Parsable 
{
    /**
     * @var string|null $availability The availability property
    */
    private ?string $availability = null;
    
    /**
     * @var array<PartnerRuntimeChannel>|null $channels The channels property
    */
    private ?array $channels = null;
    
    /**
     * @var DateTime|null $observedAt The observedAt property
    */
    private ?DateTime $observedAt = null;
    
    /**
     * @var PartnerRuntimeOperability|null $operability The operability property
    */
    private ?PartnerRuntimeOperability $operability = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PartnerRuntimeChannelsResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PartnerRuntimeChannelsResponse {
        return new PartnerRuntimeChannelsResponse();
    }

    /**
     * Gets the availability property value. The availability property
     * @return string|null
    */
    public function getAvailability(): ?string {
        return $this->availability;
    }

    /**
     * Gets the channels property value. The channels property
     * @return array<PartnerRuntimeChannel>|null
    */
    public function getChannels(): ?array {
        return $this->channels;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'availability' => fn(ParseNode $n) => $o->setAvailability($n->getStringValue()),
            'channels' => fn(ParseNode $n) => $o->setChannels($n->getCollectionOfObjectValues([PartnerRuntimeChannel::class, 'createFromDiscriminatorValue'])),
            'observedAt' => fn(ParseNode $n) => $o->setObservedAt($n->getDateTimeValue()),
            'operability' => fn(ParseNode $n) => $o->setOperability($n->getObjectValue([PartnerRuntimeOperability::class, 'createFromDiscriminatorValue'])),
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
     * Gets the operability property value. The operability property
     * @return PartnerRuntimeOperability|null
    */
    public function getOperability(): ?PartnerRuntimeOperability {
        return $this->operability;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('availability', $this->getAvailability());
        $writer->writeCollectionOfObjectValues('channels', $this->getChannels());
        $writer->writeDateTimeValue('observedAt', $this->getObservedAt());
        $writer->writeObjectValue('operability', $this->getOperability());
    }

    /**
     * Sets the availability property value. The availability property
     * @param string|null $value Value to set for the availability property.
    */
    public function setAvailability(?string $value): void {
        $this->availability = $value;
    }

    /**
     * Sets the channels property value. The channels property
     * @param array<PartnerRuntimeChannel>|null $value Value to set for the channels property.
    */
    public function setChannels(?array $value): void {
        $this->channels = $value;
    }

    /**
     * Sets the observedAt property value. The observedAt property
     * @param DateTime|null $value Value to set for the observedAt property.
    */
    public function setObservedAt(?DateTime $value): void {
        $this->observedAt = $value;
    }

    /**
     * Sets the operability property value. The operability property
     * @param PartnerRuntimeOperability|null $value Value to set for the operability property.
    */
    public function setOperability(?PartnerRuntimeOperability $value): void {
        $this->operability = $value;
    }

}
