<?php

namespace Nerova\Sdk\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PartnerActivationConnectionCompletionResponse implements Parsable 
{
    /**
     * @var string|null $accountReferenceHash The accountReferenceHash property
    */
    private ?string $accountReferenceHash = null;
    
    /**
     * @var string|null $assetReferenceHash The assetReferenceHash property
    */
    private ?string $assetReferenceHash = null;
    
    /**
     * @var PartnerActivationChannel|null $channel The channel property
    */
    private ?PartnerActivationChannel $channel = null;
    
    /**
     * @var DateTime|null $consumedAt The consumedAt property
    */
    private ?DateTime $consumedAt = null;
    
    /**
     * @var string|null $correlationId The correlationId property
    */
    private ?string $correlationId = null;
    
    /**
     * @var PartnerActivationIdempotencyStatus|null $idempotencyStatus The idempotencyStatus property
    */
    private ?PartnerActivationIdempotencyStatus $idempotencyStatus = null;
    
    /**
     * @var string|null $merchantId The merchantId property
    */
    private ?string $merchantId = null;
    
    /**
     * @var string|null $sessionId The sessionId property
    */
    private ?string $sessionId = null;
    
    /**
     * @var PartnerActivationPrerequisiteStatus|null $status The status property
    */
    private ?PartnerActivationPrerequisiteStatus $status = null;
    
    /**
     * @var int|null $version The version property
    */
    private ?int $version = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PartnerActivationConnectionCompletionResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PartnerActivationConnectionCompletionResponse {
        return new PartnerActivationConnectionCompletionResponse();
    }

    /**
     * Gets the accountReferenceHash property value. The accountReferenceHash property
     * @return string|null
    */
    public function getAccountReferenceHash(): ?string {
        return $this->accountReferenceHash;
    }

    /**
     * Gets the assetReferenceHash property value. The assetReferenceHash property
     * @return string|null
    */
    public function getAssetReferenceHash(): ?string {
        return $this->assetReferenceHash;
    }

    /**
     * Gets the channel property value. The channel property
     * @return PartnerActivationChannel|null
    */
    public function getChannel(): ?PartnerActivationChannel {
        return $this->channel;
    }

    /**
     * Gets the consumedAt property value. The consumedAt property
     * @return DateTime|null
    */
    public function getConsumedAt(): ?DateTime {
        return $this->consumedAt;
    }

    /**
     * Gets the correlationId property value. The correlationId property
     * @return string|null
    */
    public function getCorrelationId(): ?string {
        return $this->correlationId;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'accountReferenceHash' => fn(ParseNode $n) => $o->setAccountReferenceHash($n->getStringValue()),
            'assetReferenceHash' => fn(ParseNode $n) => $o->setAssetReferenceHash($n->getStringValue()),
            'channel' => fn(ParseNode $n) => $o->setChannel($n->getEnumValue(PartnerActivationChannel::class)),
            'consumedAt' => fn(ParseNode $n) => $o->setConsumedAt($n->getDateTimeValue()),
            'correlationId' => fn(ParseNode $n) => $o->setCorrelationId($n->getStringValue()),
            'idempotencyStatus' => fn(ParseNode $n) => $o->setIdempotencyStatus($n->getEnumValue(PartnerActivationIdempotencyStatus::class)),
            'merchantId' => fn(ParseNode $n) => $o->setMerchantId($n->getStringValue()),
            'sessionId' => fn(ParseNode $n) => $o->setSessionId($n->getStringValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(PartnerActivationPrerequisiteStatus::class)),
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
     * Gets the sessionId property value. The sessionId property
     * @return string|null
    */
    public function getSessionId(): ?string {
        return $this->sessionId;
    }

    /**
     * Gets the status property value. The status property
     * @return PartnerActivationPrerequisiteStatus|null
    */
    public function getStatus(): ?PartnerActivationPrerequisiteStatus {
        return $this->status;
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
        $writer->writeStringValue('accountReferenceHash', $this->getAccountReferenceHash());
        $writer->writeStringValue('assetReferenceHash', $this->getAssetReferenceHash());
        $writer->writeEnumValue('channel', $this->getChannel());
        $writer->writeDateTimeValue('consumedAt', $this->getConsumedAt());
        $writer->writeStringValue('correlationId', $this->getCorrelationId());
        $writer->writeEnumValue('idempotencyStatus', $this->getIdempotencyStatus());
        $writer->writeStringValue('merchantId', $this->getMerchantId());
        $writer->writeStringValue('sessionId', $this->getSessionId());
        $writer->writeEnumValue('status', $this->getStatus());
        $writer->writeIntegerValue('version', $this->getVersion());
    }

    /**
     * Sets the accountReferenceHash property value. The accountReferenceHash property
     * @param string|null $value Value to set for the accountReferenceHash property.
    */
    public function setAccountReferenceHash(?string $value): void {
        $this->accountReferenceHash = $value;
    }

    /**
     * Sets the assetReferenceHash property value. The assetReferenceHash property
     * @param string|null $value Value to set for the assetReferenceHash property.
    */
    public function setAssetReferenceHash(?string $value): void {
        $this->assetReferenceHash = $value;
    }

    /**
     * Sets the channel property value. The channel property
     * @param PartnerActivationChannel|null $value Value to set for the channel property.
    */
    public function setChannel(?PartnerActivationChannel $value): void {
        $this->channel = $value;
    }

    /**
     * Sets the consumedAt property value. The consumedAt property
     * @param DateTime|null $value Value to set for the consumedAt property.
    */
    public function setConsumedAt(?DateTime $value): void {
        $this->consumedAt = $value;
    }

    /**
     * Sets the correlationId property value. The correlationId property
     * @param string|null $value Value to set for the correlationId property.
    */
    public function setCorrelationId(?string $value): void {
        $this->correlationId = $value;
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
     * Sets the sessionId property value. The sessionId property
     * @param string|null $value Value to set for the sessionId property.
    */
    public function setSessionId(?string $value): void {
        $this->sessionId = $value;
    }

    /**
     * Sets the status property value. The status property
     * @param PartnerActivationPrerequisiteStatus|null $value Value to set for the status property.
    */
    public function setStatus(?PartnerActivationPrerequisiteStatus $value): void {
        $this->status = $value;
    }

    /**
     * Sets the version property value. The version property
     * @param int|null $value Value to set for the version property.
    */
    public function setVersion(?int $value): void {
        $this->version = $value;
    }

}
