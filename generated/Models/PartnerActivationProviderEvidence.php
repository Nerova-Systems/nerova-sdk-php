<?php

namespace Nerova\Sdk\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PartnerActivationProviderEvidence implements Parsable 
{
    /**
     * @var string|null $contractVersion The contractVersion property
    */
    private ?string $contractVersion = null;
    
    /**
     * @var string|null $errorCode The errorCode property
    */
    private ?string $errorCode = null;
    
    /**
     * @var DateTime|null $observedAt The observedAt property
    */
    private ?DateTime $observedAt = null;
    
    /**
     * @var string|null $operation The operation property
    */
    private ?string $operation = null;
    
    /**
     * @var string|null $provider The provider property
    */
    private ?string $provider = null;
    
    /**
     * @var int|null $recordCount The recordCount property
    */
    private ?int $recordCount = null;
    
    /**
     * @var string|null $referenceHash The referenceHash property
    */
    private ?string $referenceHash = null;
    
    /**
     * @var PartnerActivationEvidenceStatus|null $status The status property
    */
    private ?PartnerActivationEvidenceStatus $status = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PartnerActivationProviderEvidence
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PartnerActivationProviderEvidence {
        return new PartnerActivationProviderEvidence();
    }

    /**
     * Gets the contractVersion property value. The contractVersion property
     * @return string|null
    */
    public function getContractVersion(): ?string {
        return $this->contractVersion;
    }

    /**
     * Gets the errorCode property value. The errorCode property
     * @return string|null
    */
    public function getErrorCode(): ?string {
        return $this->errorCode;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'contractVersion' => fn(ParseNode $n) => $o->setContractVersion($n->getStringValue()),
            'errorCode' => fn(ParseNode $n) => $o->setErrorCode($n->getStringValue()),
            'observedAt' => fn(ParseNode $n) => $o->setObservedAt($n->getDateTimeValue()),
            'operation' => fn(ParseNode $n) => $o->setOperation($n->getStringValue()),
            'provider' => fn(ParseNode $n) => $o->setProvider($n->getStringValue()),
            'recordCount' => fn(ParseNode $n) => $o->setRecordCount($n->getIntegerValue()),
            'referenceHash' => fn(ParseNode $n) => $o->setReferenceHash($n->getStringValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(PartnerActivationEvidenceStatus::class)),
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
     * Gets the operation property value. The operation property
     * @return string|null
    */
    public function getOperation(): ?string {
        return $this->operation;
    }

    /**
     * Gets the provider property value. The provider property
     * @return string|null
    */
    public function getProvider(): ?string {
        return $this->provider;
    }

    /**
     * Gets the recordCount property value. The recordCount property
     * @return int|null
    */
    public function getRecordCount(): ?int {
        return $this->recordCount;
    }

    /**
     * Gets the referenceHash property value. The referenceHash property
     * @return string|null
    */
    public function getReferenceHash(): ?string {
        return $this->referenceHash;
    }

    /**
     * Gets the status property value. The status property
     * @return PartnerActivationEvidenceStatus|null
    */
    public function getStatus(): ?PartnerActivationEvidenceStatus {
        return $this->status;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('contractVersion', $this->getContractVersion());
        $writer->writeStringValue('errorCode', $this->getErrorCode());
        $writer->writeDateTimeValue('observedAt', $this->getObservedAt());
        $writer->writeStringValue('operation', $this->getOperation());
        $writer->writeStringValue('provider', $this->getProvider());
        $writer->writeIntegerValue('recordCount', $this->getRecordCount());
        $writer->writeStringValue('referenceHash', $this->getReferenceHash());
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
     * Sets the errorCode property value. The errorCode property
     * @param string|null $value Value to set for the errorCode property.
    */
    public function setErrorCode(?string $value): void {
        $this->errorCode = $value;
    }

    /**
     * Sets the observedAt property value. The observedAt property
     * @param DateTime|null $value Value to set for the observedAt property.
    */
    public function setObservedAt(?DateTime $value): void {
        $this->observedAt = $value;
    }

    /**
     * Sets the operation property value. The operation property
     * @param string|null $value Value to set for the operation property.
    */
    public function setOperation(?string $value): void {
        $this->operation = $value;
    }

    /**
     * Sets the provider property value. The provider property
     * @param string|null $value Value to set for the provider property.
    */
    public function setProvider(?string $value): void {
        $this->provider = $value;
    }

    /**
     * Sets the recordCount property value. The recordCount property
     * @param int|null $value Value to set for the recordCount property.
    */
    public function setRecordCount(?int $value): void {
        $this->recordCount = $value;
    }

    /**
     * Sets the referenceHash property value. The referenceHash property
     * @param string|null $value Value to set for the referenceHash property.
    */
    public function setReferenceHash(?string $value): void {
        $this->referenceHash = $value;
    }

    /**
     * Sets the status property value. The status property
     * @param PartnerActivationEvidenceStatus|null $value Value to set for the status property.
    */
    public function setStatus(?PartnerActivationEvidenceStatus $value): void {
        $this->status = $value;
    }

}
