<?php

namespace Nerova\Sdk\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PartnerActivationConnectionCompletionRequest implements Parsable 
{
    /**
     * @var int|null $expectedVersion The expectedVersion property
    */
    private ?int $expectedVersion = null;
    
    /**
     * @var string|null $providerAccountReference The providerAccountReference property
    */
    private ?string $providerAccountReference = null;
    
    /**
     * @var string|null $providerAssetReference The providerAssetReference property
    */
    private ?string $providerAssetReference = null;
    
    /**
     * @var string|null $providerAuthorizationCode The providerAuthorizationCode property
    */
    private ?string $providerAuthorizationCode = null;
    
    /**
     * @var string|null $state The state property
    */
    private ?string $state = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PartnerActivationConnectionCompletionRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PartnerActivationConnectionCompletionRequest {
        return new PartnerActivationConnectionCompletionRequest();
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
            'providerAccountReference' => fn(ParseNode $n) => $o->setProviderAccountReference($n->getStringValue()),
            'providerAssetReference' => fn(ParseNode $n) => $o->setProviderAssetReference($n->getStringValue()),
            'providerAuthorizationCode' => fn(ParseNode $n) => $o->setProviderAuthorizationCode($n->getStringValue()),
            'state' => fn(ParseNode $n) => $o->setState($n->getStringValue()),
        ];
    }

    /**
     * Gets the providerAccountReference property value. The providerAccountReference property
     * @return string|null
    */
    public function getProviderAccountReference(): ?string {
        return $this->providerAccountReference;
    }

    /**
     * Gets the providerAssetReference property value. The providerAssetReference property
     * @return string|null
    */
    public function getProviderAssetReference(): ?string {
        return $this->providerAssetReference;
    }

    /**
     * Gets the providerAuthorizationCode property value. The providerAuthorizationCode property
     * @return string|null
    */
    public function getProviderAuthorizationCode(): ?string {
        return $this->providerAuthorizationCode;
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
        $writer->writeIntegerValue('expectedVersion', $this->getExpectedVersion());
        $writer->writeStringValue('providerAccountReference', $this->getProviderAccountReference());
        $writer->writeStringValue('providerAssetReference', $this->getProviderAssetReference());
        $writer->writeStringValue('providerAuthorizationCode', $this->getProviderAuthorizationCode());
        $writer->writeStringValue('state', $this->getState());
    }

    /**
     * Sets the expectedVersion property value. The expectedVersion property
     * @param int|null $value Value to set for the expectedVersion property.
    */
    public function setExpectedVersion(?int $value): void {
        $this->expectedVersion = $value;
    }

    /**
     * Sets the providerAccountReference property value. The providerAccountReference property
     * @param string|null $value Value to set for the providerAccountReference property.
    */
    public function setProviderAccountReference(?string $value): void {
        $this->providerAccountReference = $value;
    }

    /**
     * Sets the providerAssetReference property value. The providerAssetReference property
     * @param string|null $value Value to set for the providerAssetReference property.
    */
    public function setProviderAssetReference(?string $value): void {
        $this->providerAssetReference = $value;
    }

    /**
     * Sets the providerAuthorizationCode property value. The providerAuthorizationCode property
     * @param string|null $value Value to set for the providerAuthorizationCode property.
    */
    public function setProviderAuthorizationCode(?string $value): void {
        $this->providerAuthorizationCode = $value;
    }

    /**
     * Sets the state property value. The state property
     * @param string|null $value Value to set for the state property.
    */
    public function setState(?string $value): void {
        $this->state = $value;
    }

}
