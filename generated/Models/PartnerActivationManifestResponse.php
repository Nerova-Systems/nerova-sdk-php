<?php

namespace Nerova\Sdk\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PartnerActivationManifestResponse implements Parsable 
{
    /**
     * @var array<PartnerActivationBlockingReason>|null $blockingReasons The blockingReasons property
    */
    private ?array $blockingReasons = null;
    
    /**
     * @var PartnerActivationChannelPrerequisite|null $channel The channel property
    */
    private ?PartnerActivationChannelPrerequisite $channel = null;
    
    /**
     * @var array<PartnerActivationConsentRequirementManifest>|null $consentRequirements The consentRequirements property
    */
    private ?array $consentRequirements = null;
    
    /**
     * @var string|null $correlationId The correlationId property
    */
    private ?string $correlationId = null;
    
    /**
     * @var array<PartnerActivationDutyReadiness>|null $duties The duties property
    */
    private ?array $duties = null;
    
    /**
     * @var PartnerActivationEmployeeStatus|null $employeeStatus The employeeStatus property
    */
    private ?PartnerActivationEmployeeStatus $employeeStatus = null;
    
    /**
     * @var PartnerActivationEnvironment|null $environment The environment property
    */
    private ?PartnerActivationEnvironment $environment = null;
    
    /**
     * @var PartnerActivationIdentityManifest|null $identity The identity property
    */
    private ?PartnerActivationIdentityManifest $identity = null;
    
    /**
     * @var string|null $lastReceiptId The lastReceiptId property
    */
    private ?string $lastReceiptId = null;
    
    /**
     * @var array<PartnerActivationMandateCeiling>|null $mandateCeiling The mandateCeiling property
    */
    private ?array $mandateCeiling = null;
    
    /**
     * @var string|null $merchantId The merchantId property
    */
    private ?string $merchantId = null;
    
    /**
     * @var array<PartnerActivationNextAction>|null $nextAllowedActions The nextAllowedActions property
    */
    private ?array $nextAllowedActions = null;
    
    /**
     * @var DateTime|null $observedAt The observedAt property
    */
    private ?DateTime $observedAt = null;
    
    /**
     * @var PartnerActivationProviderPrerequisite|null $provider The provider property
    */
    private ?PartnerActivationProviderPrerequisite $provider = null;
    
    /**
     * @var bool|null $ready The ready property
    */
    private ?bool $ready = null;
    
    /**
     * @var PartnerActivationState|null $state The state property
    */
    private ?PartnerActivationState $state = null;
    
    /**
     * @var PartnerActivationStatusTimestamps|null $timestamps The timestamps property
    */
    private ?PartnerActivationStatusTimestamps $timestamps = null;
    
    /**
     * @var int|null $version The version property
    */
    private ?int $version = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PartnerActivationManifestResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PartnerActivationManifestResponse {
        return new PartnerActivationManifestResponse();
    }

    /**
     * Gets the blockingReasons property value. The blockingReasons property
     * @return array<PartnerActivationBlockingReason>|null
    */
    public function getBlockingReasons(): ?array {
        return $this->blockingReasons;
    }

    /**
     * Gets the channel property value. The channel property
     * @return PartnerActivationChannelPrerequisite|null
    */
    public function getChannel(): ?PartnerActivationChannelPrerequisite {
        return $this->channel;
    }

    /**
     * Gets the consentRequirements property value. The consentRequirements property
     * @return array<PartnerActivationConsentRequirementManifest>|null
    */
    public function getConsentRequirements(): ?array {
        return $this->consentRequirements;
    }

    /**
     * Gets the correlationId property value. The correlationId property
     * @return string|null
    */
    public function getCorrelationId(): ?string {
        return $this->correlationId;
    }

    /**
     * Gets the duties property value. The duties property
     * @return array<PartnerActivationDutyReadiness>|null
    */
    public function getDuties(): ?array {
        return $this->duties;
    }

    /**
     * Gets the employeeStatus property value. The employeeStatus property
     * @return PartnerActivationEmployeeStatus|null
    */
    public function getEmployeeStatus(): ?PartnerActivationEmployeeStatus {
        return $this->employeeStatus;
    }

    /**
     * Gets the environment property value. The environment property
     * @return PartnerActivationEnvironment|null
    */
    public function getEnvironment(): ?PartnerActivationEnvironment {
        return $this->environment;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'blockingReasons' => fn(ParseNode $n) => $o->setBlockingReasons($n->getCollectionOfObjectValues([PartnerActivationBlockingReason::class, 'createFromDiscriminatorValue'])),
            'channel' => fn(ParseNode $n) => $o->setChannel($n->getObjectValue([PartnerActivationChannelPrerequisite::class, 'createFromDiscriminatorValue'])),
            'consentRequirements' => fn(ParseNode $n) => $o->setConsentRequirements($n->getCollectionOfObjectValues([PartnerActivationConsentRequirementManifest::class, 'createFromDiscriminatorValue'])),
            'correlationId' => fn(ParseNode $n) => $o->setCorrelationId($n->getStringValue()),
            'duties' => fn(ParseNode $n) => $o->setDuties($n->getCollectionOfObjectValues([PartnerActivationDutyReadiness::class, 'createFromDiscriminatorValue'])),
            'employeeStatus' => fn(ParseNode $n) => $o->setEmployeeStatus($n->getEnumValue(PartnerActivationEmployeeStatus::class)),
            'environment' => fn(ParseNode $n) => $o->setEnvironment($n->getEnumValue(PartnerActivationEnvironment::class)),
            'identity' => fn(ParseNode $n) => $o->setIdentity($n->getObjectValue([PartnerActivationIdentityManifest::class, 'createFromDiscriminatorValue'])),
            'lastReceiptId' => fn(ParseNode $n) => $o->setLastReceiptId($n->getStringValue()),
            'mandateCeiling' => fn(ParseNode $n) => $o->setMandateCeiling($n->getCollectionOfObjectValues([PartnerActivationMandateCeiling::class, 'createFromDiscriminatorValue'])),
            'merchantId' => fn(ParseNode $n) => $o->setMerchantId($n->getStringValue()),
            'nextAllowedActions' => fn(ParseNode $n) => $o->setNextAllowedActions($n->getCollectionOfEnumValues(PartnerActivationNextAction::class)),
            'observedAt' => fn(ParseNode $n) => $o->setObservedAt($n->getDateTimeValue()),
            'provider' => fn(ParseNode $n) => $o->setProvider($n->getObjectValue([PartnerActivationProviderPrerequisite::class, 'createFromDiscriminatorValue'])),
            'ready' => fn(ParseNode $n) => $o->setReady($n->getBooleanValue()),
            'state' => fn(ParseNode $n) => $o->setState($n->getEnumValue(PartnerActivationState::class)),
            'timestamps' => fn(ParseNode $n) => $o->setTimestamps($n->getObjectValue([PartnerActivationStatusTimestamps::class, 'createFromDiscriminatorValue'])),
            'version' => fn(ParseNode $n) => $o->setVersion($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the identity property value. The identity property
     * @return PartnerActivationIdentityManifest|null
    */
    public function getIdentity(): ?PartnerActivationIdentityManifest {
        return $this->identity;
    }

    /**
     * Gets the lastReceiptId property value. The lastReceiptId property
     * @return string|null
    */
    public function getLastReceiptId(): ?string {
        return $this->lastReceiptId;
    }

    /**
     * Gets the mandateCeiling property value. The mandateCeiling property
     * @return array<PartnerActivationMandateCeiling>|null
    */
    public function getMandateCeiling(): ?array {
        return $this->mandateCeiling;
    }

    /**
     * Gets the merchantId property value. The merchantId property
     * @return string|null
    */
    public function getMerchantId(): ?string {
        return $this->merchantId;
    }

    /**
     * Gets the nextAllowedActions property value. The nextAllowedActions property
     * @return array<PartnerActivationNextAction>|null
    */
    public function getNextAllowedActions(): ?array {
        return $this->nextAllowedActions;
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
     * @return PartnerActivationProviderPrerequisite|null
    */
    public function getProvider(): ?PartnerActivationProviderPrerequisite {
        return $this->provider;
    }

    /**
     * Gets the ready property value. The ready property
     * @return bool|null
    */
    public function getReady(): ?bool {
        return $this->ready;
    }

    /**
     * Gets the state property value. The state property
     * @return PartnerActivationState|null
    */
    public function getState(): ?PartnerActivationState {
        return $this->state;
    }

    /**
     * Gets the timestamps property value. The timestamps property
     * @return PartnerActivationStatusTimestamps|null
    */
    public function getTimestamps(): ?PartnerActivationStatusTimestamps {
        return $this->timestamps;
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
        $writer->writeCollectionOfObjectValues('blockingReasons', $this->getBlockingReasons());
        $writer->writeObjectValue('channel', $this->getChannel());
        $writer->writeCollectionOfObjectValues('consentRequirements', $this->getConsentRequirements());
        $writer->writeStringValue('correlationId', $this->getCorrelationId());
        $writer->writeCollectionOfObjectValues('duties', $this->getDuties());
        $writer->writeEnumValue('employeeStatus', $this->getEmployeeStatus());
        $writer->writeEnumValue('environment', $this->getEnvironment());
        $writer->writeObjectValue('identity', $this->getIdentity());
        $writer->writeStringValue('lastReceiptId', $this->getLastReceiptId());
        $writer->writeCollectionOfObjectValues('mandateCeiling', $this->getMandateCeiling());
        $writer->writeStringValue('merchantId', $this->getMerchantId());
        $writer->writeCollectionOfEnumValues('nextAllowedActions', $this->getNextAllowedActions());
        $writer->writeDateTimeValue('observedAt', $this->getObservedAt());
        $writer->writeObjectValue('provider', $this->getProvider());
        $writer->writeBooleanValue('ready', $this->getReady());
        $writer->writeEnumValue('state', $this->getState());
        $writer->writeObjectValue('timestamps', $this->getTimestamps());
        $writer->writeIntegerValue('version', $this->getVersion());
    }

    /**
     * Sets the blockingReasons property value. The blockingReasons property
     * @param array<PartnerActivationBlockingReason>|null $value Value to set for the blockingReasons property.
    */
    public function setBlockingReasons(?array $value): void {
        $this->blockingReasons = $value;
    }

    /**
     * Sets the channel property value. The channel property
     * @param PartnerActivationChannelPrerequisite|null $value Value to set for the channel property.
    */
    public function setChannel(?PartnerActivationChannelPrerequisite $value): void {
        $this->channel = $value;
    }

    /**
     * Sets the consentRequirements property value. The consentRequirements property
     * @param array<PartnerActivationConsentRequirementManifest>|null $value Value to set for the consentRequirements property.
    */
    public function setConsentRequirements(?array $value): void {
        $this->consentRequirements = $value;
    }

    /**
     * Sets the correlationId property value. The correlationId property
     * @param string|null $value Value to set for the correlationId property.
    */
    public function setCorrelationId(?string $value): void {
        $this->correlationId = $value;
    }

    /**
     * Sets the duties property value. The duties property
     * @param array<PartnerActivationDutyReadiness>|null $value Value to set for the duties property.
    */
    public function setDuties(?array $value): void {
        $this->duties = $value;
    }

    /**
     * Sets the employeeStatus property value. The employeeStatus property
     * @param PartnerActivationEmployeeStatus|null $value Value to set for the employeeStatus property.
    */
    public function setEmployeeStatus(?PartnerActivationEmployeeStatus $value): void {
        $this->employeeStatus = $value;
    }

    /**
     * Sets the environment property value. The environment property
     * @param PartnerActivationEnvironment|null $value Value to set for the environment property.
    */
    public function setEnvironment(?PartnerActivationEnvironment $value): void {
        $this->environment = $value;
    }

    /**
     * Sets the identity property value. The identity property
     * @param PartnerActivationIdentityManifest|null $value Value to set for the identity property.
    */
    public function setIdentity(?PartnerActivationIdentityManifest $value): void {
        $this->identity = $value;
    }

    /**
     * Sets the lastReceiptId property value. The lastReceiptId property
     * @param string|null $value Value to set for the lastReceiptId property.
    */
    public function setLastReceiptId(?string $value): void {
        $this->lastReceiptId = $value;
    }

    /**
     * Sets the mandateCeiling property value. The mandateCeiling property
     * @param array<PartnerActivationMandateCeiling>|null $value Value to set for the mandateCeiling property.
    */
    public function setMandateCeiling(?array $value): void {
        $this->mandateCeiling = $value;
    }

    /**
     * Sets the merchantId property value. The merchantId property
     * @param string|null $value Value to set for the merchantId property.
    */
    public function setMerchantId(?string $value): void {
        $this->merchantId = $value;
    }

    /**
     * Sets the nextAllowedActions property value. The nextAllowedActions property
     * @param array<PartnerActivationNextAction>|null $value Value to set for the nextAllowedActions property.
    */
    public function setNextAllowedActions(?array $value): void {
        $this->nextAllowedActions = $value;
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
     * @param PartnerActivationProviderPrerequisite|null $value Value to set for the provider property.
    */
    public function setProvider(?PartnerActivationProviderPrerequisite $value): void {
        $this->provider = $value;
    }

    /**
     * Sets the ready property value. The ready property
     * @param bool|null $value Value to set for the ready property.
    */
    public function setReady(?bool $value): void {
        $this->ready = $value;
    }

    /**
     * Sets the state property value. The state property
     * @param PartnerActivationState|null $value Value to set for the state property.
    */
    public function setState(?PartnerActivationState $value): void {
        $this->state = $value;
    }

    /**
     * Sets the timestamps property value. The timestamps property
     * @param PartnerActivationStatusTimestamps|null $value Value to set for the timestamps property.
    */
    public function setTimestamps(?PartnerActivationStatusTimestamps $value): void {
        $this->timestamps = $value;
    }

    /**
     * Sets the version property value. The version property
     * @param int|null $value Value to set for the version property.
    */
    public function setVersion(?int $value): void {
        $this->version = $value;
    }

}
