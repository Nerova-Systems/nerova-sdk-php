<?php

namespace Nerova\Sdk\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PartnerActivationChannelPrerequisite implements Parsable 
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
     * @var DateTime|null $observedAt The observedAt property
    */
    private ?DateTime $observedAt = null;
    
    /**
     * @var string|null $provider The provider property
    */
    private ?string $provider = null;
    
    /**
     * @var PartnerActivationPrerequisiteStatus|null $status The status property
    */
    private ?PartnerActivationPrerequisiteStatus $status = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PartnerActivationChannelPrerequisite
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PartnerActivationChannelPrerequisite {
        return new PartnerActivationChannelPrerequisite();
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
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'accountReferenceHash' => fn(ParseNode $n) => $o->setAccountReferenceHash($n->getStringValue()),
            'assetReferenceHash' => fn(ParseNode $n) => $o->setAssetReferenceHash($n->getStringValue()),
            'channel' => fn(ParseNode $n) => $o->setChannel($n->getEnumValue(PartnerActivationChannel::class)),
            'observedAt' => fn(ParseNode $n) => $o->setObservedAt($n->getDateTimeValue()),
            'provider' => fn(ParseNode $n) => $o->setProvider($n->getStringValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(PartnerActivationPrerequisiteStatus::class)),
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
     * Gets the provider property value. The provider property
     * @return string|null
    */
    public function getProvider(): ?string {
        return $this->provider;
    }

    /**
     * Gets the status property value. The status property
     * @return PartnerActivationPrerequisiteStatus|null
    */
    public function getStatus(): ?PartnerActivationPrerequisiteStatus {
        return $this->status;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('accountReferenceHash', $this->getAccountReferenceHash());
        $writer->writeStringValue('assetReferenceHash', $this->getAssetReferenceHash());
        $writer->writeEnumValue('channel', $this->getChannel());
        $writer->writeDateTimeValue('observedAt', $this->getObservedAt());
        $writer->writeStringValue('provider', $this->getProvider());
        $writer->writeEnumValue('status', $this->getStatus());
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
     * Sets the observedAt property value. The observedAt property
     * @param DateTime|null $value Value to set for the observedAt property.
    */
    public function setObservedAt(?DateTime $value): void {
        $this->observedAt = $value;
    }

    /**
     * Sets the provider property value. The provider property
     * @param string|null $value Value to set for the provider property.
    */
    public function setProvider(?string $value): void {
        $this->provider = $value;
    }

    /**
     * Sets the status property value. The status property
     * @param PartnerActivationPrerequisiteStatus|null $value Value to set for the status property.
    */
    public function setStatus(?PartnerActivationPrerequisiteStatus $value): void {
        $this->status = $value;
    }

}
