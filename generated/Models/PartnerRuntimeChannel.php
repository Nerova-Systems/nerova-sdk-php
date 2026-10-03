<?php

namespace Nerova\Sdk\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class PartnerRuntimeChannel implements Parsable 
{
    /**
     * @var string|null $channel The channel property
    */
    private ?string $channel = null;
    
    /**
     * @var string|null $featureStatus The featureStatus property
    */
    private ?string $featureStatus = null;
    
    /**
     * @var string|null $id The id property
    */
    private ?string $id = null;
    
    /**
     * @var array<string>|null $pausedDuties The pausedDuties property
    */
    private ?array $pausedDuties = null;
    
    /**
     * @var string|null $readiness The readiness property
    */
    private ?string $readiness = null;
    
    /**
     * @var PartnerRuntimeReauthorizationState|null $reauthorization The reauthorization property
    */
    private ?PartnerRuntimeReauthorizationState $reauthorization = null;
    
    /**
     * @var string|null $state The state property
    */
    private ?string $state = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PartnerRuntimeChannel
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PartnerRuntimeChannel {
        return new PartnerRuntimeChannel();
    }

    /**
     * Gets the channel property value. The channel property
     * @return string|null
    */
    public function getChannel(): ?string {
        return $this->channel;
    }

    /**
     * Gets the featureStatus property value. The featureStatus property
     * @return string|null
    */
    public function getFeatureStatus(): ?string {
        return $this->featureStatus;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'channel' => fn(ParseNode $n) => $o->setChannel($n->getStringValue()),
            'featureStatus' => fn(ParseNode $n) => $o->setFeatureStatus($n->getStringValue()),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'pausedDuties' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setPausedDuties($val);
            },
            'readiness' => fn(ParseNode $n) => $o->setReadiness($n->getStringValue()),
            'reauthorization' => fn(ParseNode $n) => $o->setReauthorization($n->getObjectValue([PartnerRuntimeReauthorizationState::class, 'createFromDiscriminatorValue'])),
            'state' => fn(ParseNode $n) => $o->setState($n->getStringValue()),
        ];
    }

    /**
     * Gets the id property value. The id property
     * @return string|null
    */
    public function getId(): ?string {
        return $this->id;
    }

    /**
     * Gets the pausedDuties property value. The pausedDuties property
     * @return array<string>|null
    */
    public function getPausedDuties(): ?array {
        return $this->pausedDuties;
    }

    /**
     * Gets the readiness property value. The readiness property
     * @return string|null
    */
    public function getReadiness(): ?string {
        return $this->readiness;
    }

    /**
     * Gets the reauthorization property value. The reauthorization property
     * @return PartnerRuntimeReauthorizationState|null
    */
    public function getReauthorization(): ?PartnerRuntimeReauthorizationState {
        return $this->reauthorization;
    }

    /**
     * Gets the state property value. The state property
     * @return string|null
    */
    public function getState(): ?string {
        return $this->state;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('channel', $this->getChannel());
        $writer->writeStringValue('featureStatus', $this->getFeatureStatus());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeCollectionOfPrimitiveValues('pausedDuties', $this->getPausedDuties());
        $writer->writeStringValue('readiness', $this->getReadiness());
        $writer->writeObjectValue('reauthorization', $this->getReauthorization());
        $writer->writeStringValue('state', $this->getState());
    }

    /**
     * Sets the channel property value. The channel property
     * @param string|null $value Value to set for the channel property.
    */
    public function setChannel(?string $value): void {
        $this->channel = $value;
    }

    /**
     * Sets the featureStatus property value. The featureStatus property
     * @param string|null $value Value to set for the featureStatus property.
    */
    public function setFeatureStatus(?string $value): void {
        $this->featureStatus = $value;
    }

    /**
     * Sets the id property value. The id property
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->id = $value;
    }

    /**
     * Sets the pausedDuties property value. The pausedDuties property
     * @param array<string>|null $value Value to set for the pausedDuties property.
    */
    public function setPausedDuties(?array $value): void {
        $this->pausedDuties = $value;
    }

    /**
     * Sets the readiness property value. The readiness property
     * @param string|null $value Value to set for the readiness property.
    */
    public function setReadiness(?string $value): void {
        $this->readiness = $value;
    }

    /**
     * Sets the reauthorization property value. The reauthorization property
     * @param PartnerRuntimeReauthorizationState|null $value Value to set for the reauthorization property.
    */
    public function setReauthorization(?PartnerRuntimeReauthorizationState $value): void {
        $this->reauthorization = $value;
    }

    /**
     * Sets the state property value. The state property
     * @param string|null $value Value to set for the state property.
    */
    public function setState(?string $value): void {
        $this->state = $value;
    }

}
