<?php

namespace Nerova\Sdk\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PartnerRuntimeWorkItem implements Parsable 
{
    /**
     * @var string|null $capability The capability property
    */
    private ?string $capability = null;
    
    /**
     * @var string|null $evidence The evidence property
    */
    private ?string $evidence = null;
    
    /**
     * @var PartnerRuntimeHostReference|null $hostRecordReference The hostRecordReference property
    */
    private ?PartnerRuntimeHostReference $hostRecordReference = null;
    
    /**
     * @var PartnerRuntimeHostReference|null $hostReference The hostReference property
    */
    private ?PartnerRuntimeHostReference $hostReference = null;
    
    /**
     * @var string|null $id The id property
    */
    private ?string $id = null;
    
    /**
     * @var string|null $kind The kind property
    */
    private ?string $kind = null;
    
    /**
     * @var PartnerRuntimeNativeBookingEvidence|null $nativeBookingEvidence The nativeBookingEvidence property
    */
    private ?PartnerRuntimeNativeBookingEvidence $nativeBookingEvidence = null;
    
    /**
     * @var DateTime|null $occurredAt The occurredAt property
    */
    private ?DateTime $occurredAt = null;
    
    /**
     * @var string|null $outcome The outcome property
    */
    private ?string $outcome = null;
    
    /**
     * @var string|null $provider The provider property
    */
    private ?string $provider = null;
    
    /**
     * @var string|null $status The status property
    */
    private ?string $status = null;
    
    /**
     * @var bool|null $verified The verified property
    */
    private ?bool $verified = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PartnerRuntimeWorkItem
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PartnerRuntimeWorkItem {
        return new PartnerRuntimeWorkItem();
    }

    /**
     * Gets the capability property value. The capability property
     * @return string|null
    */
    public function getCapability(): ?string {
        return $this->capability;
    }

    /**
     * Gets the evidence property value. The evidence property
     * @return string|null
    */
    public function getEvidence(): ?string {
        return $this->evidence;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'capability' => fn(ParseNode $n) => $o->setCapability($n->getStringValue()),
            'evidence' => fn(ParseNode $n) => $o->setEvidence($n->getStringValue()),
            'hostRecordReference' => fn(ParseNode $n) => $o->setHostRecordReference($n->getObjectValue([PartnerRuntimeHostReference::class, 'createFromDiscriminatorValue'])),
            'hostReference' => fn(ParseNode $n) => $o->setHostReference($n->getObjectValue([PartnerRuntimeHostReference::class, 'createFromDiscriminatorValue'])),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'kind' => fn(ParseNode $n) => $o->setKind($n->getStringValue()),
            'nativeBookingEvidence' => fn(ParseNode $n) => $o->setNativeBookingEvidence($n->getObjectValue([PartnerRuntimeNativeBookingEvidence::class, 'createFromDiscriminatorValue'])),
            'occurredAt' => fn(ParseNode $n) => $o->setOccurredAt($n->getDateTimeValue()),
            'outcome' => fn(ParseNode $n) => $o->setOutcome($n->getStringValue()),
            'provider' => fn(ParseNode $n) => $o->setProvider($n->getStringValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getStringValue()),
            'verified' => fn(ParseNode $n) => $o->setVerified($n->getBooleanValue()),
        ];
    }

    /**
     * Gets the hostRecordReference property value. The hostRecordReference property
     * @return PartnerRuntimeHostReference|null
    */
    public function getHostRecordReference(): ?PartnerRuntimeHostReference {
        return $this->hostRecordReference;
    }

    /**
     * Gets the hostReference property value. The hostReference property
     * @return PartnerRuntimeHostReference|null
    */
    public function getHostReference(): ?PartnerRuntimeHostReference {
        return $this->hostReference;
    }

    /**
     * Gets the id property value. The id property
     * @return string|null
    */
    public function getId(): ?string {
        return $this->id;
    }

    /**
     * Gets the kind property value. The kind property
     * @return string|null
    */
    public function getKind(): ?string {
        return $this->kind;
    }

    /**
     * Gets the nativeBookingEvidence property value. The nativeBookingEvidence property
     * @return PartnerRuntimeNativeBookingEvidence|null
    */
    public function getNativeBookingEvidence(): ?PartnerRuntimeNativeBookingEvidence {
        return $this->nativeBookingEvidence;
    }

    /**
     * Gets the occurredAt property value. The occurredAt property
     * @return DateTime|null
    */
    public function getOccurredAt(): ?DateTime {
        return $this->occurredAt;
    }

    /**
     * Gets the outcome property value. The outcome property
     * @return string|null
    */
    public function getOutcome(): ?string {
        return $this->outcome;
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
     * @return string|null
    */
    public function getStatus(): ?string {
        return $this->status;
    }

    /**
     * Gets the verified property value. The verified property
     * @return bool|null
    */
    public function getVerified(): ?bool {
        return $this->verified;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('capability', $this->getCapability());
        $writer->writeStringValue('evidence', $this->getEvidence());
        $writer->writeObjectValue('hostRecordReference', $this->getHostRecordReference());
        $writer->writeObjectValue('hostReference', $this->getHostReference());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeStringValue('kind', $this->getKind());
        $writer->writeObjectValue('nativeBookingEvidence', $this->getNativeBookingEvidence());
        $writer->writeDateTimeValue('occurredAt', $this->getOccurredAt());
        $writer->writeStringValue('outcome', $this->getOutcome());
        $writer->writeStringValue('provider', $this->getProvider());
        $writer->writeStringValue('status', $this->getStatus());
        $writer->writeBooleanValue('verified', $this->getVerified());
    }

    /**
     * Sets the capability property value. The capability property
     * @param string|null $value Value to set for the capability property.
    */
    public function setCapability(?string $value): void {
        $this->capability = $value;
    }

    /**
     * Sets the evidence property value. The evidence property
     * @param string|null $value Value to set for the evidence property.
    */
    public function setEvidence(?string $value): void {
        $this->evidence = $value;
    }

    /**
     * Sets the hostRecordReference property value. The hostRecordReference property
     * @param PartnerRuntimeHostReference|null $value Value to set for the hostRecordReference property.
    */
    public function setHostRecordReference(?PartnerRuntimeHostReference $value): void {
        $this->hostRecordReference = $value;
    }

    /**
     * Sets the hostReference property value. The hostReference property
     * @param PartnerRuntimeHostReference|null $value Value to set for the hostReference property.
    */
    public function setHostReference(?PartnerRuntimeHostReference $value): void {
        $this->hostReference = $value;
    }

    /**
     * Sets the id property value. The id property
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->id = $value;
    }

    /**
     * Sets the kind property value. The kind property
     * @param string|null $value Value to set for the kind property.
    */
    public function setKind(?string $value): void {
        $this->kind = $value;
    }

    /**
     * Sets the nativeBookingEvidence property value. The nativeBookingEvidence property
     * @param PartnerRuntimeNativeBookingEvidence|null $value Value to set for the nativeBookingEvidence property.
    */
    public function setNativeBookingEvidence(?PartnerRuntimeNativeBookingEvidence $value): void {
        $this->nativeBookingEvidence = $value;
    }

    /**
     * Sets the occurredAt property value. The occurredAt property
     * @param DateTime|null $value Value to set for the occurredAt property.
    */
    public function setOccurredAt(?DateTime $value): void {
        $this->occurredAt = $value;
    }

    /**
     * Sets the outcome property value. The outcome property
     * @param string|null $value Value to set for the outcome property.
    */
    public function setOutcome(?string $value): void {
        $this->outcome = $value;
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
     * @param string|null $value Value to set for the status property.
    */
    public function setStatus(?string $value): void {
        $this->status = $value;
    }

    /**
     * Sets the verified property value. The verified property
     * @param bool|null $value Value to set for the verified property.
    */
    public function setVerified(?bool $value): void {
        $this->verified = $value;
    }

}
