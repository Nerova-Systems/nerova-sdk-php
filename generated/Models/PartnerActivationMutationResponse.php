<?php

namespace Nerova\Sdk\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PartnerActivationMutationResponse implements Parsable 
{
    /**
     * @var string|null $correlationId The correlationId property
    */
    private ?string $correlationId = null;
    
    /**
     * @var PartnerActivationEmployeeStatus|null $employeeStatus The employeeStatus property
    */
    private ?PartnerActivationEmployeeStatus $employeeStatus = null;
    
    /**
     * @var PartnerActivationIdempotencyStatus|null $idempotencyStatus The idempotencyStatus property
    */
    private ?PartnerActivationIdempotencyStatus $idempotencyStatus = null;
    
    /**
     * @var string|null $merchantId The merchantId property
    */
    private ?string $merchantId = null;
    
    /**
     * @var PartnerActivationState|null $state The state property
    */
    private ?PartnerActivationState $state = null;
    
    /**
     * @var int|null $version The version property
    */
    private ?int $version = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PartnerActivationMutationResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PartnerActivationMutationResponse {
        return new PartnerActivationMutationResponse();
    }

    /**
     * Gets the correlationId property value. The correlationId property
     * @return string|null
    */
    public function getCorrelationId(): ?string {
        return $this->correlationId;
    }

    /**
     * Gets the employeeStatus property value. The employeeStatus property
     * @return PartnerActivationEmployeeStatus|null
    */
    public function getEmployeeStatus(): ?PartnerActivationEmployeeStatus {
        return $this->employeeStatus;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'correlationId' => fn(ParseNode $n) => $o->setCorrelationId($n->getStringValue()),
            'employeeStatus' => fn(ParseNode $n) => $o->setEmployeeStatus($n->getEnumValue(PartnerActivationEmployeeStatus::class)),
            'idempotencyStatus' => fn(ParseNode $n) => $o->setIdempotencyStatus($n->getEnumValue(PartnerActivationIdempotencyStatus::class)),
            'merchantId' => fn(ParseNode $n) => $o->setMerchantId($n->getStringValue()),
            'state' => fn(ParseNode $n) => $o->setState($n->getEnumValue(PartnerActivationState::class)),
            'version' => fn(ParseNode $n) => $o->setVersion($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the idempotencyStatus property value. The idempotencyStatus property
     * @return PartnerActivationIdempotencyStatus|null
    */
    public function getIdempotencyStatus(): ?PartnerActivationIdempotencyStatus {
        return $this->idempotencyStatus;
    }

    /**
     * Gets the merchantId property value. The merchantId property
     * @return string|null
    */
    public function getMerchantId(): ?string {
        return $this->merchantId;
    }

    /**
     * Gets the state property value. The state property
     * @return PartnerActivationState|null
    */
    public function getState(): ?PartnerActivationState {
        return $this->state;
    }

    /**
     * Gets the version property value. The version property
     * @return int|null
    */
    public function getVersion(): ?int {
        return $this->version;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('correlationId', $this->getCorrelationId());
        $writer->writeEnumValue('employeeStatus', $this->getEmployeeStatus());
        $writer->writeEnumValue('idempotencyStatus', $this->getIdempotencyStatus());
        $writer->writeStringValue('merchantId', $this->getMerchantId());
        $writer->writeEnumValue('state', $this->getState());
        $writer->writeIntegerValue('version', $this->getVersion());
    }

    /**
     * Sets the correlationId property value. The correlationId property
     * @param string|null $value Value to set for the correlationId property.
    */
    public function setCorrelationId(?string $value): void {
        $this->correlationId = $value;
    }

    /**
     * Sets the employeeStatus property value. The employeeStatus property
     * @param PartnerActivationEmployeeStatus|null $value Value to set for the employeeStatus property.
    */
    public function setEmployeeStatus(?PartnerActivationEmployeeStatus $value): void {
        $this->employeeStatus = $value;
    }

    /**
     * Sets the idempotencyStatus property value. The idempotencyStatus property
     * @param PartnerActivationIdempotencyStatus|null $value Value to set for the idempotencyStatus property.
    */
    public function setIdempotencyStatus(?PartnerActivationIdempotencyStatus $value): void {
        $this->idempotencyStatus = $value;
    }

    /**
     * Sets the merchantId property value. The merchantId property
     * @param string|null $value Value to set for the merchantId property.
    */
    public function setMerchantId(?string $value): void {
        $this->merchantId = $value;
    }

    /**
     * Sets the state property value. The state property
     * @param PartnerActivationState|null $value Value to set for the state property.
    */
    public function setState(?PartnerActivationState $value): void {
        $this->state = $value;
    }

    /**
     * Sets the version property value. The version property
     * @param int|null $value Value to set for the version property.
    */
    public function setVersion(?int $value): void {
        $this->version = $value;
    }

}
