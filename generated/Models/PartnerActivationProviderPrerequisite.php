<?php

namespace Nerova\Sdk\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class PartnerActivationProviderPrerequisite implements Parsable 
{
    /**
     * @var string|null $contractVersion The contractVersion property
    */
    private ?string $contractVersion = null;
    
    /**
     * @var array<string>|null $declaredCapabilities The declaredCapabilities property
    */
    private ?array $declaredCapabilities = null;
    
    /**
     * @var array<PartnerActivationProviderEvidence>|null $evidence The evidence property
    */
    private ?array $evidence = null;
    
    /**
     * @var string|null $provider The provider property
    */
    private ?string $provider = null;
    
    /**
     * @var PartnerActivationPrerequisiteStatus|null $status The status property
    */
    private ?PartnerActivationPrerequisiteStatus $status = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PartnerActivationProviderPrerequisite
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PartnerActivationProviderPrerequisite {
        return new PartnerActivationProviderPrerequisite();
    }

    /**
     * Gets the contractVersion property value. The contractVersion property
     * @return string|null
    */
    public function getContractVersion(): ?string {
        return $this->contractVersion;
    }

    /**
     * Gets the declaredCapabilities property value. The declaredCapabilities property
     * @return array<string>|null
    */
    public function getDeclaredCapabilities(): ?array {
        return $this->declaredCapabilities;
    }

    /**
     * Gets the evidence property value. The evidence property
     * @return array<PartnerActivationProviderEvidence>|null
    */
    public function getEvidence(): ?array {
        return $this->evidence;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'contractVersion' => fn(ParseNode $n) => $o->setContractVersion($n->getStringValue()),
            'declaredCapabilities' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setDeclaredCapabilities($val);
            },
            'evidence' => fn(ParseNode $n) => $o->setEvidence($n->getCollectionOfObjectValues([PartnerActivationProviderEvidence::class, 'createFromDiscriminatorValue'])),
            'provider' => fn(ParseNode $n) => $o->setProvider($n->getStringValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(PartnerActivationPrerequisiteStatus::class)),
        ];
    }

    /**
     * Gets the provider property value. The provider property
     * @return string|null
    */
    public function getProvider(): ?string {
        return $this->provider;
    }

    /**
     * Gets the status property value. The status property
     * @return PartnerActivationPrerequisiteStatus|null
    */
    public function getStatus(): ?PartnerActivationPrerequisiteStatus {
        return $this->status;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('contractVersion', $this->getContractVersion());
        $writer->writeCollectionOfPrimitiveValues('declaredCapabilities', $this->getDeclaredCapabilities());
        $writer->writeCollectionOfObjectValues('evidence', $this->getEvidence());
        $writer->writeStringValue('provider', $this->getProvider());
        $writer->writeEnumValue('status', $this->getStatus());
    }

    /**
     * Sets the contractVersion property value. The contractVersion property
     * @param string|null $value Value to set for the contractVersion property.
    */
    public function setContractVersion(?string $value): void {
        $this->contractVersion = $value;
    }

    /**
     * Sets the declaredCapabilities property value. The declaredCapabilities property
     * @param array<string>|null $value Value to set for the declaredCapabilities property.
    */
    public function setDeclaredCapabilities(?array $value): void {
        $this->declaredCapabilities = $value;
    }

    /**
     * Sets the evidence property value. The evidence property
     * @param array<PartnerActivationProviderEvidence>|null $value Value to set for the evidence property.
    */
    public function setEvidence(?array $value): void {
        $this->evidence = $value;
    }

    /**
     * Sets the provider property value. The provider property
     * @param string|null $value Value to set for the provider property.
    */
    public function setProvider(?string $value): void {
        $this->provider = $value;
    }

    /**
     * Sets the status property value. The status property
     * @param PartnerActivationPrerequisiteStatus|null $value Value to set for the status property.
    */
    public function setStatus(?PartnerActivationPrerequisiteStatus $value): void {
        $this->status = $value;
    }

}
