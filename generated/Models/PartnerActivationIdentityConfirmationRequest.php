<?php

namespace Nerova\Sdk\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class PartnerActivationIdentityConfirmationRequest implements Parsable 
{
    /**
     * @var int|null $expectedVersion The expectedVersion property
    */
    private ?int $expectedVersion = null;
    
    /**
     * @var array<string>|null $hostLocationReferences The hostLocationReferences property
    */
    private ?array $hostLocationReferences = null;
    
    /**
     * @var string|null $hostMerchantReference The hostMerchantReference property
    */
    private ?string $hostMerchantReference = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PartnerActivationIdentityConfirmationRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PartnerActivationIdentityConfirmationRequest {
        return new PartnerActivationIdentityConfirmationRequest();
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
            'hostLocationReferences' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setHostLocationReferences($val);
            },
            'hostMerchantReference' => fn(ParseNode $n) => $o->setHostMerchantReference($n->getStringValue()),
        ];
    }

    /**
     * Gets the hostLocationReferences property value. The hostLocationReferences property
     * @return array<string>|null
    */
    public function getHostLocationReferences(): ?array {
        return $this->hostLocationReferences;
    }

    /**
     * Gets the hostMerchantReference property value. The hostMerchantReference property
     * @return string|null
    */
    public function getHostMerchantReference(): ?string {
        return $this->hostMerchantReference;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('expectedVersion', $this->getExpectedVersion());
        $writer->writeCollectionOfPrimitiveValues('hostLocationReferences', $this->getHostLocationReferences());
        $writer->writeStringValue('hostMerchantReference', $this->getHostMerchantReference());
    }

    /**
     * Sets the expectedVersion property value. The expectedVersion property
     * @param int|null $value Value to set for the expectedVersion property.
    */
    public function setExpectedVersion(?int $value): void {
        $this->expectedVersion = $value;
    }

    /**
     * Sets the hostLocationReferences property value. The hostLocationReferences property
     * @param array<string>|null $value Value to set for the hostLocationReferences property.
    */
    public function setHostLocationReferences(?array $value): void {
        $this->hostLocationReferences = $value;
    }

    /**
     * Sets the hostMerchantReference property value. The hostMerchantReference property
     * @param string|null $value Value to set for the hostMerchantReference property.
    */
    public function setHostMerchantReference(?string $value): void {
        $this->hostMerchantReference = $value;
    }

}
