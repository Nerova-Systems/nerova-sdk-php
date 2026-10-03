<?php

namespace Nerova\Sdk\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CreateTenantV1ConnectionRequest implements Parsable 
{
    /**
     * @var string|null $baseUrl The baseUrl property
    */
    private ?string $baseUrl = null;
    
    /**
     * @var TenantV1SalonBridgeCredential|null $credential The credential property
    */
    private ?TenantV1SalonBridgeCredential $credential = null;
    
    /**
     * @var string|null $currency The currency property
    */
    private ?string $currency = null;
    
    /**
     * @var string|null $displayName The displayName property
    */
    private ?string $displayName = null;
    
    /**
     * @var string|null $externalLocationId The externalLocationId property
    */
    private ?string $externalLocationId = null;
    
    /**
     * @var string|null $externalMerchantId The externalMerchantId property
    */
    private ?string $externalMerchantId = null;
    
    /**
     * @var ExternalBookingProvider|null $provider The provider property
    */
    private ?ExternalBookingProvider $provider = null;
    
    /**
     * @var string|null $timeZone The timeZone property
    */
    private ?string $timeZone = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CreateTenantV1ConnectionRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CreateTenantV1ConnectionRequest {
        return new CreateTenantV1ConnectionRequest();
    }

    /**
     * Gets the baseUrl property value. The baseUrl property
     * @return string|null
    */
    public function getBaseUrl(): ?string {
        return $this->baseUrl;
    }

    /**
     * Gets the credential property value. The credential property
     * @return TenantV1SalonBridgeCredential|null
    */
    public function getCredential(): ?TenantV1SalonBridgeCredential {
        return $this->credential;
    }

    /**
     * Gets the currency property value. The currency property
     * @return string|null
    */
    public function getCurrency(): ?string {
        return $this->currency;
    }

    /**
     * Gets the displayName property value. The displayName property
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * Gets the externalLocationId property value. The externalLocationId property
     * @return string|null
    */
    public function getExternalLocationId(): ?string {
        return $this->externalLocationId;
    }

    /**
     * Gets the externalMerchantId property value. The externalMerchantId property
     * @return string|null
    */
    public function getExternalMerchantId(): ?string {
        return $this->externalMerchantId;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'baseUrl' => fn(ParseNode $n) => $o->setBaseUrl($n->getStringValue()),
            'credential' => fn(ParseNode $n) => $o->setCredential($n->getObjectValue([TenantV1SalonBridgeCredential::class, 'createFromDiscriminatorValue'])),
            'currency' => fn(ParseNode $n) => $o->setCurrency($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'externalLocationId' => fn(ParseNode $n) => $o->setExternalLocationId($n->getStringValue()),
            'externalMerchantId' => fn(ParseNode $n) => $o->setExternalMerchantId($n->getStringValue()),
            'provider' => fn(ParseNode $n) => $o->setProvider($n->getEnumValue(ExternalBookingProvider::class)),
            'timeZone' => fn(ParseNode $n) => $o->setTimeZone($n->getStringValue()),
        ];
    }

    /**
     * Gets the provider property value. The provider property
     * @return ExternalBookingProvider|null
    */
    public function getProvider(): ?ExternalBookingProvider {
        return $this->provider;
    }

    /**
     * Gets the timeZone property value. The timeZone property
     * @return string|null
    */
    public function getTimeZone(): ?string {
        return $this->timeZone;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('baseUrl', $this->getBaseUrl());
        $writer->writeObjectValue('credential', $this->getCredential());
        $writer->writeStringValue('currency', $this->getCurrency());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeStringValue('externalLocationId', $this->getExternalLocationId());
        $writer->writeStringValue('externalMerchantId', $this->getExternalMerchantId());
        $writer->writeEnumValue('provider', $this->getProvider());
        $writer->writeStringValue('timeZone', $this->getTimeZone());
    }

    /**
     * Sets the baseUrl property value. The baseUrl property
     * @param string|null $value Value to set for the baseUrl property.
    */
    public function setBaseUrl(?string $value): void {
        $this->baseUrl = $value;
    }

    /**
     * Sets the credential property value. The credential property
     * @param TenantV1SalonBridgeCredential|null $value Value to set for the credential property.
    */
    public function setCredential(?TenantV1SalonBridgeCredential $value): void {
        $this->credential = $value;
    }

    /**
     * Sets the currency property value. The currency property
     * @param string|null $value Value to set for the currency property.
    */
    public function setCurrency(?string $value): void {
        $this->currency = $value;
    }

    /**
     * Sets the displayName property value. The displayName property
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->displayName = $value;
    }

    /**
     * Sets the externalLocationId property value. The externalLocationId property
     * @param string|null $value Value to set for the externalLocationId property.
    */
    public function setExternalLocationId(?string $value): void {
        $this->externalLocationId = $value;
    }

    /**
     * Sets the externalMerchantId property value. The externalMerchantId property
     * @param string|null $value Value to set for the externalMerchantId property.
    */
    public function setExternalMerchantId(?string $value): void {
        $this->externalMerchantId = $value;
    }

    /**
     * Sets the provider property value. The provider property
     * @param ExternalBookingProvider|null $value Value to set for the provider property.
    */
    public function setProvider(?ExternalBookingProvider $value): void {
        $this->provider = $value;
    }

    /**
     * Sets the timeZone property value. The timeZone property
     * @param string|null $value Value to set for the timeZone property.
    */
    public function setTimeZone(?string $value): void {
        $this->timeZone = $value;
    }

}
