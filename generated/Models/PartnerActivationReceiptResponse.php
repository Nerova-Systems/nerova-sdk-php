<?php

namespace Nerova\Sdk\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class PartnerActivationReceiptResponse implements Parsable 
{
    /**
     * @var DateTime|null $activatedAt The activatedAt property
    */
    private ?DateTime $activatedAt = null;
    
    /**
     * @var int|null $activationVersion The activationVersion property
    */
    private ?int $activationVersion = null;
    
    /**
     * @var string|null $channelEvidenceHash The channelEvidenceHash property
    */
    private ?string $channelEvidenceHash = null;
    
    /**
     * @var array<string>|null $consentVersions The consentVersions property
    */
    private ?array $consentVersions = null;
    
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
     * @var string|null $mandateContractVersion The mandateContractVersion property
    */
    private ?string $mandateContractVersion = null;
    
    /**
     * @var string|null $merchantId The merchantId property
    */
    private ?string $merchantId = null;
    
    /**
     * @var string|null $providerEvidenceHash The providerEvidenceHash property
    */
    private ?string $providerEvidenceHash = null;
    
    /**
     * @var string|null $receiptId The receiptId property
    */
    private ?string $receiptId = null;
    
    /**
     * @var PartnerActivationState|null $state The state property
    */
    private ?PartnerActivationState $state = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PartnerActivationReceiptResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PartnerActivationReceiptResponse {
        return new PartnerActivationReceiptResponse();
    }

    /**
     * Gets the activatedAt property value. The activatedAt property
     * @return DateTime|null
    */
    public function getActivatedAt(): ?DateTime {
        return $this->activatedAt;
    }

    /**
     * Gets the activationVersion property value. The activationVersion property
     * @return int|null
    */
    public function getActivationVersion(): ?int {
        return $this->activationVersion;
    }

    /**
     * Gets the channelEvidenceHash property value. The channelEvidenceHash property
     * @return string|null
    */
    public function getChannelEvidenceHash(): ?string {
        return $this->channelEvidenceHash;
    }

    /**
     * Gets the consentVersions property value. The consentVersions property
     * @return array<string>|null
    */
    public function getConsentVersions(): ?array {
        return $this->consentVersions;
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
            'activatedAt' => fn(ParseNode $n) => $o->setActivatedAt($n->getDateTimeValue()),
            'activationVersion' => fn(ParseNode $n) => $o->setActivationVersion($n->getIntegerValue()),
            'channelEvidenceHash' => fn(ParseNode $n) => $o->setChannelEvidenceHash($n->getStringValue()),
            'consentVersions' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setConsentVersions($val);
            },
            'correlationId' => fn(ParseNode $n) => $o->setCorrelationId($n->getStringValue()),
            'employeeStatus' => fn(ParseNode $n) => $o->setEmployeeStatus($n->getEnumValue(PartnerActivationEmployeeStatus::class)),
            'idempotencyStatus' => fn(ParseNode $n) => $o->setIdempotencyStatus($n->getEnumValue(PartnerActivationIdempotencyStatus::class)),
            'mandateContractVersion' => fn(ParseNode $n) => $o->setMandateContractVersion($n->getStringValue()),
            'merchantId' => fn(ParseNode $n) => $o->setMerchantId($n->getStringValue()),
            'providerEvidenceHash' => fn(ParseNode $n) => $o->setProviderEvidenceHash($n->getStringValue()),
            'receiptId' => fn(ParseNode $n) => $o->setReceiptId($n->getStringValue()),
            'state' => fn(ParseNode $n) => $o->setState($n->getEnumValue(PartnerActivationState::class)),
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
     * Gets the mandateContractVersion property value. The mandateContractVersion property
     * @return string|null
    */
    public function getMandateContractVersion(): ?string {
        return $this->mandateContractVersion;
    }

    /**
     * Gets the merchantId property value. The merchantId property
     * @return string|null
    */
    public function getMerchantId(): ?string {
        return $this->merchantId;
    }

    /**
     * Gets the providerEvidenceHash property value. The providerEvidenceHash property
     * @return string|null
    */
    public function getProviderEvidenceHash(): ?string {
        return $this->providerEvidenceHash;
    }

    /**
     * Gets the receiptId property value. The receiptId property
     * @return string|null
    */
    public function getReceiptId(): ?string {
        return $this->receiptId;
    }

    /**
     * Gets the state property value. The state property
     * @return PartnerActivationState|null
    */
    public function getState(): ?PartnerActivationState {
        return $this->state;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeDateTimeValue('activatedAt', $this->getActivatedAt());
        $writer->writeIntegerValue('activationVersion', $this->getActivationVersion());
        $writer->writeStringValue('channelEvidenceHash', $this->getChannelEvidenceHash());
        $writer->writeCollectionOfPrimitiveValues('consentVersions', $this->getConsentVersions());
        $writer->writeStringValue('correlationId', $this->getCorrelationId());
        $writer->writeEnumValue('employeeStatus', $this->getEmployeeStatus());
        $writer->writeEnumValue('idempotencyStatus', $this->getIdempotencyStatus());
        $writer->writeStringValue('mandateContractVersion', $this->getMandateContractVersion());
        $writer->writeStringValue('merchantId', $this->getMerchantId());
        $writer->writeStringValue('providerEvidenceHash', $this->getProviderEvidenceHash());
        $writer->writeStringValue('receiptId', $this->getReceiptId());
        $writer->writeEnumValue('state', $this->getState());
    }

    /**
     * Sets the activatedAt property value. The activatedAt property
     * @param DateTime|null $value Value to set for the activatedAt property.
    */
    public function setActivatedAt(?DateTime $value): void {
        $this->activatedAt = $value;
    }

    /**
     * Sets the activationVersion property value. The activationVersion property
     * @param int|null $value Value to set for the activationVersion property.
    */
    public function setActivationVersion(?int $value): void {
        $this->activationVersion = $value;
    }

    /**
     * Sets the channelEvidenceHash property value. The channelEvidenceHash property
     * @param string|null $value Value to set for the channelEvidenceHash property.
    */
    public function setChannelEvidenceHash(?string $value): void {
        $this->channelEvidenceHash = $value;
    }

    /**
     * Sets the consentVersions property value. The consentVersions property
     * @param array<string>|null $value Value to set for the consentVersions property.
    */
    public function setConsentVersions(?array $value): void {
        $this->consentVersions = $value;
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
     * Sets the mandateContractVersion property value. The mandateContractVersion property
     * @param string|null $value Value to set for the mandateContractVersion property.
    */
    public function setMandateContractVersion(?string $value): void {
        $this->mandateContractVersion = $value;
    }

    /**
     * Sets the merchantId property value. The merchantId property
     * @param string|null $value Value to set for the merchantId property.
    */
    public function setMerchantId(?string $value): void {
        $this->merchantId = $value;
    }

    /**
     * Sets the providerEvidenceHash property value. The providerEvidenceHash property
     * @param string|null $value Value to set for the providerEvidenceHash property.
    */
    public function setProviderEvidenceHash(?string $value): void {
        $this->providerEvidenceHash = $value;
    }

    /**
     * Sets the receiptId property value. The receiptId property
     * @param string|null $value Value to set for the receiptId property.
    */
    public function setReceiptId(?string $value): void {
        $this->receiptId = $value;
    }

    /**
     * Sets the state property value. The state property
     * @param PartnerActivationState|null $value Value to set for the state property.
    */
    public function setState(?PartnerActivationState $value): void {
        $this->state = $value;
    }

}
