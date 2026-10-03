<?php

namespace Nerova\Sdk\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TenantV1ConnectionResponse implements Parsable 
{
    /**
     * @var array<ProviderCapabilityEvidence>|null $capabilities The capabilities property
    */
    private ?array $capabilities = null;
    
    /**
     * @var ProviderConnectionCertificationState|null $certificationState The certificationState property
    */
    private ?ProviderConnectionCertificationState $certificationState = null;
    
    /**
     * @var int|null $credentialVersion The credentialVersion property
    */
    private ?int $credentialVersion = null;
    
    /**
     * @var ExternalBookingEnvironment|null $environment The environment property
    */
    private ?ExternalBookingEnvironment $environment = null;
    
    /**
     * @var ProviderConnectionHealth|null $health The health property
    */
    private ?ProviderConnectionHealth $health = null;
    
    /**
     * @var string|null $id The id property
    */
    private ?string $id = null;
    
    /**
     * @var TenantV1ConnectionProbeResult|null $lastProbe The lastProbe property
    */
    private ?TenantV1ConnectionProbeResult $lastProbe = null;
    
    /**
     * @var DateTime|null $lastValidatedAt The lastValidatedAt property
    */
    private ?DateTime $lastValidatedAt = null;
    
    /**
     * @var ExternalBookingProvider|null $provider The provider property
    */
    private ?ExternalBookingProvider $provider = null;
    
    /**
     * @var ProviderConnectionState|null $state The state property
    */
    private ?ProviderConnectionState $state = null;
    
    /**
     * @var int|null $version The version property
    */
    private ?int $version = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TenantV1ConnectionResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TenantV1ConnectionResponse {
        return new TenantV1ConnectionResponse();
    }

    /**
     * Gets the capabilities property value. The capabilities property
     * @return array<ProviderCapabilityEvidence>|null
    */
    public function getCapabilities(): ?array {
        return $this->capabilities;
    }

    /**
     * Gets the certificationState property value. The certificationState property
     * @return ProviderConnectionCertificationState|null
    */
    public function getCertificationState(): ?ProviderConnectionCertificationState {
        return $this->certificationState;
    }

    /**
     * Gets the credentialVersion property value. The credentialVersion property
     * @return int|null
    */
    public function getCredentialVersion(): ?int {
        return $this->credentialVersion;
    }

    /**
     * Gets the environment property value. The environment property
     * @return ExternalBookingEnvironment|null
    */
    public function getEnvironment(): ?ExternalBookingEnvironment {
        return $this->environment;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'capabilities' => fn(ParseNode $n) => $o->setCapabilities($n->getCollectionOfObjectValues([ProviderCapabilityEvidence::class, 'createFromDiscriminatorValue'])),
            'certificationState' => fn(ParseNode $n) => $o->setCertificationState($n->getEnumValue(ProviderConnectionCertificationState::class)),
            'credentialVersion' => fn(ParseNode $n) => $o->setCredentialVersion($n->getIntegerValue()),
            'environment' => fn(ParseNode $n) => $o->setEnvironment($n->getEnumValue(ExternalBookingEnvironment::class)),
            'health' => fn(ParseNode $n) => $o->setHealth($n->getEnumValue(ProviderConnectionHealth::class)),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'lastProbe' => fn(ParseNode $n) => $o->setLastProbe($n->getObjectValue([TenantV1ConnectionProbeResult::class, 'createFromDiscriminatorValue'])),
            'lastValidatedAt' => fn(ParseNode $n) => $o->setLastValidatedAt($n->getDateTimeValue()),
            'provider' => fn(ParseNode $n) => $o->setProvider($n->getEnumValue(ExternalBookingProvider::class)),
            'state' => fn(ParseNode $n) => $o->setState($n->getEnumValue(ProviderConnectionState::class)),
            'version' => fn(ParseNode $n) => $o->setVersion($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the health property value. The health property
     * @return ProviderConnectionHealth|null
    */
    public function getHealth(): ?ProviderConnectionHealth {
        return $this->health;
    }

    /**
     * Gets the id property value. The id property
     * @return string|null
    */
    public function getId(): ?string {
        return $this->id;
    }

    /**
     * Gets the lastProbe property value. The lastProbe property
     * @return TenantV1ConnectionProbeResult|null
    */
    public function getLastProbe(): ?TenantV1ConnectionProbeResult {
        return $this->lastProbe;
    }

    /**
     * Gets the lastValidatedAt property value. The lastValidatedAt property
     * @return DateTime|null
    */
    public function getLastValidatedAt(): ?DateTime {
        return $this->lastValidatedAt;
    }

    /**
     * Gets the provider property value. The provider property
     * @return ExternalBookingProvider|null
    */
    public function getProvider(): ?ExternalBookingProvider {
        return $this->provider;
    }

    /**
     * Gets the state property value. The state property
     * @return ProviderConnectionState|null
    */
    public function getState(): ?ProviderConnectionState {
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
        $writer->writeCollectionOfObjectValues('capabilities', $this->getCapabilities());
        $writer->writeEnumValue('certificationState', $this->getCertificationState());
        $writer->writeIntegerValue('credentialVersion', $this->getCredentialVersion());
        $writer->writeEnumValue('environment', $this->getEnvironment());
        $writer->writeEnumValue('health', $this->getHealth());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeObjectValue('lastProbe', $this->getLastProbe());
        $writer->writeDateTimeValue('lastValidatedAt', $this->getLastValidatedAt());
        $writer->writeEnumValue('provider', $this->getProvider());
        $writer->writeEnumValue('state', $this->getState());
        $writer->writeIntegerValue('version', $this->getVersion());
    }

    /**
     * Sets the capabilities property value. The capabilities property
     * @param array<ProviderCapabilityEvidence>|null $value Value to set for the capabilities property.
    */
    public function setCapabilities(?array $value): void {
        $this->capabilities = $value;
    }

    /**
     * Sets the certificationState property value. The certificationState property
     * @param ProviderConnectionCertificationState|null $value Value to set for the certificationState property.
    */
    public function setCertificationState(?ProviderConnectionCertificationState $value): void {
        $this->certificationState = $value;
    }

    /**
     * Sets the credentialVersion property value. The credentialVersion property
     * @param int|null $value Value to set for the credentialVersion property.
    */
    public function setCredentialVersion(?int $value): void {
        $this->credentialVersion = $value;
    }

    /**
     * Sets the environment property value. The environment property
     * @param ExternalBookingEnvironment|null $value Value to set for the environment property.
    */
    public function setEnvironment(?ExternalBookingEnvironment $value): void {
        $this->environment = $value;
    }

    /**
     * Sets the health property value. The health property
     * @param ProviderConnectionHealth|null $value Value to set for the health property.
    */
    public function setHealth(?ProviderConnectionHealth $value): void {
        $this->health = $value;
    }

    /**
     * Sets the id property value. The id property
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->id = $value;
    }

    /**
     * Sets the lastProbe property value. The lastProbe property
     * @param TenantV1ConnectionProbeResult|null $value Value to set for the lastProbe property.
    */
    public function setLastProbe(?TenantV1ConnectionProbeResult $value): void {
        $this->lastProbe = $value;
    }

    /**
     * Sets the lastValidatedAt property value. The lastValidatedAt property
     * @param DateTime|null $value Value to set for the lastValidatedAt property.
    */
    public function setLastValidatedAt(?DateTime $value): void {
        $this->lastValidatedAt = $value;
    }

    /**
     * Sets the provider property value. The provider property
     * @param ExternalBookingProvider|null $value Value to set for the provider property.
    */
    public function setProvider(?ExternalBookingProvider $value): void {
        $this->provider = $value;
    }

    /**
     * Sets the state property value. The state property
     * @param ProviderConnectionState|null $value Value to set for the state property.
    */
    public function setState(?ProviderConnectionState $value): void {
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
