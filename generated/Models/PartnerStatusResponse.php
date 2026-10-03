<?php

namespace Nerova\Sdk\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PartnerStatusResponse implements Parsable 
{
    /**
     * @var string|null $apiVersion The apiVersion property
    */
    private ?string $apiVersion = null;
    
    /**
     * @var string|null $correlationId The correlationId property
    */
    private ?string $correlationId = null;
    
    /**
     * @var PartnerApiEnvironment|null $environment The environment property
    */
    private ?PartnerApiEnvironment $environment = null;
    
    /**
     * @var DateTime|null $observedAt The observedAt property
    */
    private ?DateTime $observedAt = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PartnerStatusResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PartnerStatusResponse {
        return new PartnerStatusResponse();
    }

    /**
     * Gets the apiVersion property value. The apiVersion property
     * @return string|null
    */
    public function getApiVersion(): ?string {
        return $this->apiVersion;
    }

    /**
     * Gets the correlationId property value. The correlationId property
     * @return string|null
    */
    public function getCorrelationId(): ?string {
        return $this->correlationId;
    }

    /**
     * Gets the environment property value. The environment property
     * @return PartnerApiEnvironment|null
    */
    public function getEnvironment(): ?PartnerApiEnvironment {
        return $this->environment;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'apiVersion' => fn(ParseNode $n) => $o->setApiVersion($n->getStringValue()),
            'correlationId' => fn(ParseNode $n) => $o->setCorrelationId($n->getStringValue()),
            'environment' => fn(ParseNode $n) => $o->setEnvironment($n->getEnumValue(PartnerApiEnvironment::class)),
            'observedAt' => fn(ParseNode $n) => $o->setObservedAt($n->getDateTimeValue()),
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
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('apiVersion', $this->getApiVersion());
        $writer->writeStringValue('correlationId', $this->getCorrelationId());
        $writer->writeEnumValue('environment', $this->getEnvironment());
        $writer->writeDateTimeValue('observedAt', $this->getObservedAt());
    }

    /**
     * Sets the apiVersion property value. The apiVersion property
     * @param string|null $value Value to set for the apiVersion property.
    */
    public function setApiVersion(?string $value): void {
        $this->apiVersion = $value;
    }

    /**
     * Sets the correlationId property value. The correlationId property
     * @param string|null $value Value to set for the correlationId property.
    */
    public function setCorrelationId(?string $value): void {
        $this->correlationId = $value;
    }

    /**
     * Sets the environment property value. The environment property
     * @param PartnerApiEnvironment|null $value Value to set for the environment property.
    */
    public function setEnvironment(?PartnerApiEnvironment $value): void {
        $this->environment = $value;
    }

    /**
     * Sets the observedAt property value. The observedAt property
     * @param DateTime|null $value Value to set for the observedAt property.
    */
    public function setObservedAt(?DateTime $value): void {
        $this->observedAt = $value;
    }

}
