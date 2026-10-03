<?php

namespace Nerova\Sdk\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PartnerActivationPreviewResponse implements Parsable 
{
    /**
     * @var array<PartnerActivationAdvisory>|null $advisories The advisories property
    */
    private ?array $advisories = null;
    
    /**
     * @var array<PartnerActivationBlockingReason>|null $blockingReasons The blockingReasons property
    */
    private ?array $blockingReasons = null;
    
    /**
     * @var PartnerActivationChannelPrerequisite|null $channelEvidence The channelEvidence property
    */
    private ?PartnerActivationChannelPrerequisite $channelEvidence = null;
    
    /**
     * @var string|null $correlationId The correlationId property
    */
    private ?string $correlationId = null;
    
    /**
     * @var string|null $merchantId The merchantId property
    */
    private ?string $merchantId = null;
    
    /**
     * @var bool|null $mutated The mutated property
    */
    private ?bool $mutated = null;
    
    /**
     * @var bool|null $noSend The noSend property
    */
    private ?bool $noSend = null;
    
    /**
     * @var DateTime|null $observedAt The observedAt property
    */
    private ?DateTime $observedAt = null;
    
    /**
     * @var array<PartnerActivationProviderEvidence>|null $providerEvidence The providerEvidence property
    */
    private ?array $providerEvidence = null;
    
    /**
     * @var bool|null $ready The ready property
    */
    private ?bool $ready = null;
    
    /**
     * @var int|null $version The version property
    */
    private ?int $version = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PartnerActivationPreviewResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PartnerActivationPreviewResponse {
        return new PartnerActivationPreviewResponse();
    }

    /**
     * Gets the advisories property value. The advisories property
     * @return array<PartnerActivationAdvisory>|null
    */
    public function getAdvisories(): ?array {
        return $this->advisories;
    }

    /**
     * Gets the blockingReasons property value. The blockingReasons property
     * @return array<PartnerActivationBlockingReason>|null
    */
    public function getBlockingReasons(): ?array {
        return $this->blockingReasons;
    }

    /**
     * Gets the channelEvidence property value. The channelEvidence property
     * @return PartnerActivationChannelPrerequisite|null
    */
    public function getChannelEvidence(): ?PartnerActivationChannelPrerequisite {
        return $this->channelEvidence;
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
            'advisories' => fn(ParseNode $n) => $o->setAdvisories($n->getCollectionOfObjectValues([PartnerActivationAdvisory::class, 'createFromDiscriminatorValue'])),
            'blockingReasons' => fn(ParseNode $n) => $o->setBlockingReasons($n->getCollectionOfObjectValues([PartnerActivationBlockingReason::class, 'createFromDiscriminatorValue'])),
            'channelEvidence' => fn(ParseNode $n) => $o->setChannelEvidence($n->getObjectValue([PartnerActivationChannelPrerequisite::class, 'createFromDiscriminatorValue'])),
            'correlationId' => fn(ParseNode $n) => $o->setCorrelationId($n->getStringValue()),
            'merchantId' => fn(ParseNode $n) => $o->setMerchantId($n->getStringValue()),
            'mutated' => fn(ParseNode $n) => $o->setMutated($n->getBooleanValue()),
            'noSend' => fn(ParseNode $n) => $o->setNoSend($n->getBooleanValue()),
            'observedAt' => fn(ParseNode $n) => $o->setObservedAt($n->getDateTimeValue()),
            'providerEvidence' => fn(ParseNode $n) => $o->setProviderEvidence($n->getCollectionOfObjectValues([PartnerActivationProviderEvidence::class, 'createFromDiscriminatorValue'])),
            'ready' => fn(ParseNode $n) => $o->setReady($n->getBooleanValue()),
            'version' => fn(ParseNode $n) => $o->setVersion($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the merchantId property value. The merchantId property
     * @return string|null
    */
    public function getMerchantId(): ?string {
        return $this->merchantId;
    }

    /**
     * Gets the mutated property value. The mutated property
     * @return bool|null
    */
    public function getMutated(): ?bool {
        return $this->mutated;
    }

    /**
     * Gets the noSend property value. The noSend property
     * @return bool|null
    */
    public function getNoSend(): ?bool {
        return $this->noSend;
    }

    /**
     * Gets the observedAt property value. The observedAt property
     * @return DateTime|null
    */
    public function getObservedAt(): ?DateTime {
        return $this->observedAt;
    }

    /**
     * Gets the providerEvidence property value. The providerEvidence property
     * @return array<PartnerActivationProviderEvidence>|null
    */
    public function getProviderEvidence(): ?array {
        return $this->providerEvidence;
    }

    /**
     * Gets the ready property value. The ready property
     * @return bool|null
    */
    public function getReady(): ?bool {
        return $this->ready;
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
        $writer->writeCollectionOfObjectValues('advisories', $this->getAdvisories());
        $writer->writeCollectionOfObjectValues('blockingReasons', $this->getBlockingReasons());
        $writer->writeObjectValue('channelEvidence', $this->getChannelEvidence());
        $writer->writeStringValue('correlationId', $this->getCorrelationId());
        $writer->writeStringValue('merchantId', $this->getMerchantId());
        $writer->writeBooleanValue('mutated', $this->getMutated());
        $writer->writeBooleanValue('noSend', $this->getNoSend());
        $writer->writeDateTimeValue('observedAt', $this->getObservedAt());
        $writer->writeCollectionOfObjectValues('providerEvidence', $this->getProviderEvidence());
        $writer->writeBooleanValue('ready', $this->getReady());
        $writer->writeIntegerValue('version', $this->getVersion());
    }

    /**
     * Sets the advisories property value. The advisories property
     * @param array<PartnerActivationAdvisory>|null $value Value to set for the advisories property.
    */
    public function setAdvisories(?array $value): void {
        $this->advisories = $value;
    }

    /**
     * Sets the blockingReasons property value. The blockingReasons property
     * @param array<PartnerActivationBlockingReason>|null $value Value to set for the blockingReasons property.
    */
    public function setBlockingReasons(?array $value): void {
        $this->blockingReasons = $value;
    }

    /**
     * Sets the channelEvidence property value. The channelEvidence property
     * @param PartnerActivationChannelPrerequisite|null $value Value to set for the channelEvidence property.
    */
    public function setChannelEvidence(?PartnerActivationChannelPrerequisite $value): void {
        $this->channelEvidence = $value;
    }

    /**
     * Sets the correlationId property value. The correlationId property
     * @param string|null $value Value to set for the correlationId property.
    */
    public function setCorrelationId(?string $value): void {
        $this->correlationId = $value;
    }

    /**
     * Sets the merchantId property value. The merchantId property
     * @param string|null $value Value to set for the merchantId property.
    */
    public function setMerchantId(?string $value): void {
        $this->merchantId = $value;
    }

    /**
     * Sets the mutated property value. The mutated property
     * @param bool|null $value Value to set for the mutated property.
    */
    public function setMutated(?bool $value): void {
        $this->mutated = $value;
    }

    /**
     * Sets the noSend property value. The noSend property
     * @param bool|null $value Value to set for the noSend property.
    */
    public function setNoSend(?bool $value): void {
        $this->noSend = $value;
    }

    /**
     * Sets the observedAt property value. The observedAt property
     * @param DateTime|null $value Value to set for the observedAt property.
    */
    public function setObservedAt(?DateTime $value): void {
        $this->observedAt = $value;
    }

    /**
     * Sets the providerEvidence property value. The providerEvidence property
     * @param array<PartnerActivationProviderEvidence>|null $value Value to set for the providerEvidence property.
    */
    public function setProviderEvidence(?array $value): void {
        $this->providerEvidence = $value;
    }

    /**
     * Sets the ready property value. The ready property
     * @param bool|null $value Value to set for the ready property.
    */
    public function setReady(?bool $value): void {
        $this->ready = $value;
    }

    /**
     * Sets the version property value. The version property
     * @param int|null $value Value to set for the version property.
    */
    public function setVersion(?int $value): void {
        $this->version = $value;
    }

}
