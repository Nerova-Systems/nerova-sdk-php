<?php

namespace Nerova\Sdk\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PartnerActivationConnectionSessionResponse implements Parsable 
{
    /**
     * @var string|null $audience The audience property
    */
    private ?string $audience = null;
    
    /**
     * @var PartnerActivationChannel|null $channel The channel property
    */
    private ?PartnerActivationChannel $channel = null;
    
    /**
     * @var string|null $correlationId The correlationId property
    */
    private ?string $correlationId = null;
    
    /**
     * @var DateTime|null $expiresAt The expiresAt property
    */
    private ?DateTime $expiresAt = null;
    
    /**
     * @var PartnerActivationIdempotencyStatus|null $idempotencyStatus The idempotencyStatus property
    */
    private ?PartnerActivationIdempotencyStatus $idempotencyStatus = null;
    
    /**
     * @var string|null $launchUrl The launchUrl property
    */
    private ?string $launchUrl = null;
    
    /**
     * @var string|null $merchantId The merchantId property
    */
    private ?string $merchantId = null;
    
    /**
     * @var string|null $provider The provider property
    */
    private ?string $provider = null;
    
    /**
     * @var string|null $sandboxProviderAccountReference The sandboxProviderAccountReference property
    */
    private ?string $sandboxProviderAccountReference = null;
    
    /**
     * @var string|null $sandboxProviderAssetReference The sandboxProviderAssetReference property
    */
    private ?string $sandboxProviderAssetReference = null;
    
    /**
     * @var string|null $sessionId The sessionId property
    */
    private ?string $sessionId = null;
    
    /**
     * @var string|null $state The state property
    */
    private ?string $state = null;
    
    /**
     * @var int|null $version The version property
    */
    private ?int $version = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PartnerActivationConnectionSessionResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PartnerActivationConnectionSessionResponse {
        return new PartnerActivationConnectionSessionResponse();
    }

    /**
     * Gets the audience property value. The audience property
     * @return string|null
    */
    public function getAudience(): ?string {
        return $this->audience;
    }

    /**
     * Gets the channel property value. The channel property
     * @return PartnerActivationChannel|null
    */
    public function getChannel(): ?PartnerActivationChannel {
        return $this->channel;
    }

    /**
     * Gets the correlationId property value. The correlationId property
     * @return string|null
    */
    public function getCorrelationId(): ?string {
        return $this->correlationId;
    }

    /**
     * Gets the expiresAt property value. The expiresAt property
     * @return DateTime|null
    */
    public function getExpiresAt(): ?DateTime {
        return $this->expiresAt;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'audience' => fn(ParseNode $n) => $o->setAudience($n->getStringValue()),
            'channel' => fn(ParseNode $n) => $o->setChannel($n->getEnumValue(PartnerActivationChannel::class)),
            'correlationId' => fn(ParseNode $n) => $o->setCorrelationId($n->getStringValue()),
            'expiresAt' => fn(ParseNode $n) => $o->setExpiresAt($n->getDateTimeValue()),
            'idempotencyStatus' => fn(ParseNode $n) => $o->setIdempotencyStatus($n->getEnumValue(PartnerActivationIdempotencyStatus::class)),
            'launchUrl' => fn(ParseNode $n) => $o->setLaunchUrl($n->getStringValue()),
            'merchantId' => fn(ParseNode $n) => $o->setMerchantId($n->getStringValue()),
            'provider' => fn(ParseNode $n) => $o->setProvider($n->getStringValue()),
            'sandboxProviderAccountReference' => fn(ParseNode $n) => $o->setSandboxProviderAccountReference($n->getStringValue()),
            'sandboxProviderAssetReference' => fn(ParseNode $n) => $o->setSandboxProviderAssetReference($n->getStringValue()),
            'sessionId' => fn(ParseNode $n) => $o->setSessionId($n->getStringValue()),
            'state' => fn(ParseNode $n) => $o->setState($n->getStringValue()),
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
     * Gets the launchUrl property value. The launchUrl property
     * @return string|null
    */
    public function getLaunchUrl(): ?string {
        return $this->launchUrl;
    }

    /**
     * Gets the merchantId property value. The merchantId property
     * @return string|null
    */
    public function getMerchantId(): ?string {
        return $this->merchantId;
    }

    /**
     * Gets the provider property value. The provider property
     * @return string|null
    */
    public function getProvider(): ?string {
        return $this->provider;
    }

    /**
     * Gets the sandboxProviderAccountReference property value. The sandboxProviderAccountReference property
     * @return string|null
    */
    public function getSandboxProviderAccountReference(): ?string {
        return $this->sandboxProviderAccountReference;
    }

    /**
     * Gets the sandboxProviderAssetReference property value. The sandboxProviderAssetReference property
     * @return string|null
    */
    public function getSandboxProviderAssetReference(): ?string {
        return $this->sandboxProviderAssetReference;
    }

    /**
     * Gets the sessionId property value. The sessionId property
     * @return string|null
    */
    public function getSessionId(): ?string {
        return $this->sessionId;
    }

    /**
     * Gets the state property value. The state property
     * @return string|null
    */
    public function getState(): ?string {
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
        $writer->writeStringValue('audience', $this->getAudience());
        $writer->writeEnumValue('channel', $this->getChannel());
        $writer->writeStringValue('correlationId', $this->getCorrelationId());
        $writer->writeDateTimeValue('expiresAt', $this->getExpiresAt());
        $writer->writeEnumValue('idempotencyStatus', $this->getIdempotencyStatus());
        $writer->writeStringValue('launchUrl', $this->getLaunchUrl());
        $writer->writeStringValue('merchantId', $this->getMerchantId());
        $writer->writeStringValue('provider', $this->getProvider());
        $writer->writeStringValue('sandboxProviderAccountReference', $this->getSandboxProviderAccountReference());
        $writer->writeStringValue('sandboxProviderAssetReference', $this->getSandboxProviderAssetReference());
        $writer->writeStringValue('sessionId', $this->getSessionId());
        $writer->writeStringValue('state', $this->getState());
        $writer->writeIntegerValue('version', $this->getVersion());
    }

    /**
     * Sets the audience property value. The audience property
     * @param string|null $value Value to set for the audience property.
    */
    public function setAudience(?string $value): void {
        $this->audience = $value;
    }

    /**
     * Sets the channel property value. The channel property
     * @param PartnerActivationChannel|null $value Value to set for the channel property.
    */
    public function setChannel(?PartnerActivationChannel $value): void {
        $this->channel = $value;
    }

    /**
     * Sets the correlationId property value. The correlationId property
     * @param string|null $value Value to set for the correlationId property.
    */
    public function setCorrelationId(?string $value): void {
        $this->correlationId = $value;
    }

    /**
     * Sets the expiresAt property value. The expiresAt property
     * @param DateTime|null $value Value to set for the expiresAt property.
    */
    public function setExpiresAt(?DateTime $value): void {
        $this->expiresAt = $value;
    }

    /**
     * Sets the idempotencyStatus property value. The idempotencyStatus property
     * @param PartnerActivationIdempotencyStatus|null $value Value to set for the idempotencyStatus property.
    */
    public function setIdempotencyStatus(?PartnerActivationIdempotencyStatus $value): void {
        $this->idempotencyStatus = $value;
    }

    /**
     * Sets the launchUrl property value. The launchUrl property
     * @param string|null $value Value to set for the launchUrl property.
    */
    public function setLaunchUrl(?string $value): void {
        $this->launchUrl = $value;
    }

    /**
     * Sets the merchantId property value. The merchantId property
     * @param string|null $value Value to set for the merchantId property.
    */
    public function setMerchantId(?string $value): void {
        $this->merchantId = $value;
    }

    /**
     * Sets the provider property value. The provider property
     * @param string|null $value Value to set for the provider property.
    */
    public function setProvider(?string $value): void {
        $this->provider = $value;
    }

    /**
     * Sets the sandboxProviderAccountReference property value. The sandboxProviderAccountReference property
     * @param string|null $value Value to set for the sandboxProviderAccountReference property.
    */
    public function setSandboxProviderAccountReference(?string $value): void {
        $this->sandboxProviderAccountReference = $value;
    }

    /**
     * Sets the sandboxProviderAssetReference property value. The sandboxProviderAssetReference property
     * @param string|null $value Value to set for the sandboxProviderAssetReference property.
    */
    public function setSandboxProviderAssetReference(?string $value): void {
        $this->sandboxProviderAssetReference = $value;
    }

    /**
     * Sets the sessionId property value. The sessionId property
     * @param string|null $value Value to set for the sessionId property.
    */
    public function setSessionId(?string $value): void {
        $this->sessionId = $value;
    }

    /**
     * Sets the state property value. The state property
     * @param string|null $value Value to set for the state property.
    */
    public function setState(?string $value): void {
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
