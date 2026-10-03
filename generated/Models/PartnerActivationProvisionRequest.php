<?php

namespace Nerova\Sdk\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PartnerActivationProvisionRequest implements Parsable 
{
    /**
     * @var int|null $expectedVersion The expectedVersion property
    */
    private ?int $expectedVersion = null;
    
    /**
     * @var string|null $hostMerchantReference The hostMerchantReference property
    */
    private ?string $hostMerchantReference = null;
    
    /**
     * @var array<PartnerActivationLocationReferenceInput>|null $locations The locations property
    */
    private ?array $locations = null;
    
    /**
     * @var string|null $providerMerchantReference The providerMerchantReference property
    */
    private ?string $providerMerchantReference = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PartnerActivationProvisionRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PartnerActivationProvisionRequest {
        return new PartnerActivationProvisionRequest();
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
            'hostMerchantReference' => fn(ParseNode $n) => $o->setHostMerchantReference($n->getStringValue()),
            'locations' => fn(ParseNode $n) => $o->setLocations($n->getCollectionOfObjectValues([PartnerActivationLocationReferenceInput::class, 'createFromDiscriminatorValue'])),
            'providerMerchantReference' => fn(ParseNode $n) => $o->setProviderMerchantReference($n->getStringValue()),
        ];
    }

    /**
     * Gets the hostMerchantReference property value. The hostMerchantReference property
     * @return string|null
    */
    public function getHostMerchantReference(): ?string {
        return $this->hostMerchantReference;
    }

    /**
     * Gets the locations property value. The locations property
     * @return array<PartnerActivationLocationReferenceInput>|null
    */
    public function getLocations(): ?array {
        return $this->locations;
    }

    /**
     * Gets the providerMerchantReference property value. The providerMerchantReference property
     * @return string|null
    */
    public function getProviderMerchantReference(): ?string {
        return $this->providerMerchantReference;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('expectedVersion', $this->getExpectedVersion());
        $writer->writeStringValue('hostMerchantReference', $this->getHostMerchantReference());
        $writer->writeCollectionOfObjectValues('locations', $this->getLocations());
        $writer->writeStringValue('providerMerchantReference', $this->getProviderMerchantReference());
    }

    /**
     * Sets the expectedVersion property value. The expectedVersion property
     * @param int|null $value Value to set for the expectedVersion property.
    */
    public function setExpectedVersion(?int $value): void {
        $this->expectedVersion = $value;
    }

    /**
     * Sets the hostMerchantReference property value. The hostMerchantReference property
     * @param string|null $value Value to set for the hostMerchantReference property.
    */
    public function setHostMerchantReference(?string $value): void {
        $this->hostMerchantReference = $value;
    }

    /**
     * Sets the locations property value. The locations property
     * @param array<PartnerActivationLocationReferenceInput>|null $value Value to set for the locations property.
    */
    public function setLocations(?array $value): void {
        $this->locations = $value;
    }

    /**
     * Sets the providerMerchantReference property value. The providerMerchantReference property
     * @param string|null $value Value to set for the providerMerchantReference property.
    */
    public function setProviderMerchantReference(?string $value): void {
        $this->providerMerchantReference = $value;
    }

}
