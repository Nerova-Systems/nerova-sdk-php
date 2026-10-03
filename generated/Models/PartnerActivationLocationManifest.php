<?php

namespace Nerova\Sdk\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PartnerActivationLocationManifest implements Parsable 
{
    /**
     * @var string|null $hostLocationReference The hostLocationReference property
    */
    private ?string $hostLocationReference = null;
    
    /**
     * @var string|null $providerLocationReference The providerLocationReference property
    */
    private ?string $providerLocationReference = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PartnerActivationLocationManifest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PartnerActivationLocationManifest {
        return new PartnerActivationLocationManifest();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'hostLocationReference' => fn(ParseNode $n) => $o->setHostLocationReference($n->getStringValue()),
            'providerLocationReference' => fn(ParseNode $n) => $o->setProviderLocationReference($n->getStringValue()),
        ];
    }

    /**
     * Gets the hostLocationReference property value. The hostLocationReference property
     * @return string|null
    */
    public function getHostLocationReference(): ?string {
        return $this->hostLocationReference;
    }

    /**
     * Gets the providerLocationReference property value. The providerLocationReference property
     * @return string|null
    */
    public function getProviderLocationReference(): ?string {
        return $this->providerLocationReference;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('hostLocationReference', $this->getHostLocationReference());
        $writer->writeStringValue('providerLocationReference', $this->getProviderLocationReference());
    }

    /**
     * Sets the hostLocationReference property value. The hostLocationReference property
     * @param string|null $value Value to set for the hostLocationReference property.
    */
    public function setHostLocationReference(?string $value): void {
        $this->hostLocationReference = $value;
    }

    /**
     * Sets the providerLocationReference property value. The providerLocationReference property
     * @param string|null $value Value to set for the providerLocationReference property.
    */
    public function setProviderLocationReference(?string $value): void {
        $this->providerLocationReference = $value;
    }

}
