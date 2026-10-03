<?php

namespace Nerova\Sdk\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class PartnerRuntimeCapabilityNode implements Parsable 
{
    /**
     * @var array<string>|null $capabilities The capabilities property
    */
    private ?array $capabilities = null;
    
    /**
     * @var string|null $contractVersion The contractVersion property
    */
    private ?string $contractVersion = null;
    
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
     * @var string|null $provider The provider property
    */
    private ?string $provider = null;
    
    /**
     * @var string|null $readiness The readiness property
    */
    private ?string $readiness = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PartnerRuntimeCapabilityNode
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PartnerRuntimeCapabilityNode {
        return new PartnerRuntimeCapabilityNode();
    }

    /**
     * Gets the capabilities property value. The capabilities property
     * @return array<string>|null
    */
    public function getCapabilities(): ?array {
        return $this->capabilities;
    }

    /**
     * Gets the contractVersion property value. The contractVersion property
     * @return string|null
    */
    public function getContractVersion(): ?string {
        return $this->contractVersion;
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
            'capabilities' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setCapabilities($val);
            },
            'contractVersion' => fn(ParseNode $n) => $o->setContractVersion($n->getStringValue()),
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
            'provider' => fn(ParseNode $n) => $o->setProvider($n->getStringValue()),
            'readiness' => fn(ParseNode $n) => $o->setReadiness($n->getStringValue()),
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
     * Gets the provider property value. The provider property
     * @return string|null
    */
    public function getProvider(): ?string {
        return $this->provider;
    }

    /**
     * Gets the readiness property value. The readiness property
     * @return string|null
    */
    public function getReadiness(): ?string {
        return $this->readiness;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfPrimitiveValues('capabilities', $this->getCapabilities());
        $writer->writeStringValue('contractVersion', $this->getContractVersion());
        $writer->writeStringValue('featureStatus', $this->getFeatureStatus());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeCollectionOfPrimitiveValues('pausedDuties', $this->getPausedDuties());
        $writer->writeStringValue('provider', $this->getProvider());
        $writer->writeStringValue('readiness', $this->getReadiness());
    }

    /**
     * Sets the capabilities property value. The capabilities property
     * @param array<string>|null $value Value to set for the capabilities property.
    */
    public function setCapabilities(?array $value): void {
        $this->capabilities = $value;
    }

    /**
     * Sets the contractVersion property value. The contractVersion property
     * @param string|null $value Value to set for the contractVersion property.
    */
    public function setContractVersion(?string $value): void {
        $this->contractVersion = $value;
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
     * Sets the provider property value. The provider property
     * @param string|null $value Value to set for the provider property.
    */
    public function setProvider(?string $value): void {
        $this->provider = $value;
    }

    /**
     * Sets the readiness property value. The readiness property
     * @param string|null $value Value to set for the readiness property.
    */
    public function setReadiness(?string $value): void {
        $this->readiness = $value;
    }

}
