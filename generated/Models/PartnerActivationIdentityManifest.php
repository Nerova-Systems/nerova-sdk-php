<?php

namespace Nerova\Sdk\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PartnerActivationIdentityManifest implements Parsable 
{
    /**
     * @var bool|null $confirmed The confirmed property
    */
    private ?bool $confirmed = null;
    
    /**
     * @var DateTime|null $confirmedAt The confirmedAt property
    */
    private ?DateTime $confirmedAt = null;
    
    /**
     * @var string|null $hostMerchantReference The hostMerchantReference property
    */
    private ?string $hostMerchantReference = null;
    
    /**
     * @var array<PartnerActivationLocationManifest>|null $locations The locations property
    */
    private ?array $locations = null;
    
    /**
     * @var string|null $providerMerchantReference The providerMerchantReference property
    */
    private ?string $providerMerchantReference = null;
    
    /**
     * @var bool|null $provisioned The provisioned property
    */
    private ?bool $provisioned = null;
    
    /**
     * @var DateTime|null $provisionedAt The provisionedAt property
    */
    private ?DateTime $provisionedAt = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PartnerActivationIdentityManifest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PartnerActivationIdentityManifest {
        return new PartnerActivationIdentityManifest();
    }

    /**
     * Gets the confirmed property value. The confirmed property
     * @return bool|null
    */
    public function getConfirmed(): ?bool {
        return $this->confirmed;
    }

    /**
     * Gets the confirmedAt property value. The confirmedAt property
     * @return DateTime|null
    */
    public function getConfirmedAt(): ?DateTime {
        return $this->confirmedAt;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'confirmed' => fn(ParseNode $n) => $o->setConfirmed($n->getBooleanValue()),
            'confirmedAt' => fn(ParseNode $n) => $o->setConfirmedAt($n->getDateTimeValue()),
            'hostMerchantReference' => fn(ParseNode $n) => $o->setHostMerchantReference($n->getStringValue()),
            'locations' => fn(ParseNode $n) => $o->setLocations($n->getCollectionOfObjectValues([PartnerActivationLocationManifest::class, 'createFromDiscriminatorValue'])),
            'providerMerchantReference' => fn(ParseNode $n) => $o->setProviderMerchantReference($n->getStringValue()),
            'provisioned' => fn(ParseNode $n) => $o->setProvisioned($n->getBooleanValue()),
            'provisionedAt' => fn(ParseNode $n) => $o->setProvisionedAt($n->getDateTimeValue()),
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
     * @return array<PartnerActivationLocationManifest>|null
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
     * Gets the provisioned property value. The provisioned property
     * @return bool|null
    */
    public function getProvisioned(): ?bool {
        return $this->provisioned;
    }

    /**
     * Gets the provisionedAt property value. The provisionedAt property
     * @return DateTime|null
    */
    public function getProvisionedAt(): ?DateTime {
        return $this->provisionedAt;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('confirmed', $this->getConfirmed());
        $writer->writeDateTimeValue('confirmedAt', $this->getConfirmedAt());
        $writer->writeStringValue('hostMerchantReference', $this->getHostMerchantReference());
        $writer->writeCollectionOfObjectValues('locations', $this->getLocations());
        $writer->writeStringValue('providerMerchantReference', $this->getProviderMerchantReference());
        $writer->writeBooleanValue('provisioned', $this->getProvisioned());
        $writer->writeDateTimeValue('provisionedAt', $this->getProvisionedAt());
    }

    /**
     * Sets the confirmed property value. The confirmed property
     * @param bool|null $value Value to set for the confirmed property.
    */
    public function setConfirmed(?bool $value): void {
        $this->confirmed = $value;
    }

    /**
     * Sets the confirmedAt property value. The confirmedAt property
     * @param DateTime|null $value Value to set for the confirmedAt property.
    */
    public function setConfirmedAt(?DateTime $value): void {
        $this->confirmedAt = $value;
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
     * @param array<PartnerActivationLocationManifest>|null $value Value to set for the locations property.
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

    /**
     * Sets the provisioned property value. The provisioned property
     * @param bool|null $value Value to set for the provisioned property.
    */
    public function setProvisioned(?bool $value): void {
        $this->provisioned = $value;
    }

    /**
     * Sets the provisionedAt property value. The provisionedAt property
     * @param DateTime|null $value Value to set for the provisionedAt property.
    */
    public function setProvisionedAt(?DateTime $value): void {
        $this->provisionedAt = $value;
    }

}
