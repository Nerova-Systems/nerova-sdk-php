<?php

namespace Nerova\Sdk\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PartnerRuntimeIncident implements Parsable 
{
    /**
     * @var PartnerRuntimeHostReference|null $hostReference The hostReference property
    */
    private ?PartnerRuntimeHostReference $hostReference = null;
    
    /**
     * @var string|null $id The id property
    */
    private ?string $id = null;
    
    /**
     * @var DateTime|null $observedAt The observedAt property
    */
    private ?DateTime $observedAt = null;
    
    /**
     * @var string|null $recoveryStatus The recoveryStatus property
    */
    private ?string $recoveryStatus = null;
    
    /**
     * @var string|null $severity The severity property
    */
    private ?string $severity = null;
    
    /**
     * @var string|null $source The source property
    */
    private ?string $source = null;
    
    /**
     * @var DateTime|null $startedAt The startedAt property
    */
    private ?DateTime $startedAt = null;
    
    /**
     * @var string|null $status The status property
    */
    private ?string $status = null;
    
    /**
     * @var string|null $summary The summary property
    */
    private ?string $summary = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PartnerRuntimeIncident
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PartnerRuntimeIncident {
        return new PartnerRuntimeIncident();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'hostReference' => fn(ParseNode $n) => $o->setHostReference($n->getObjectValue([PartnerRuntimeHostReference::class, 'createFromDiscriminatorValue'])),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'observedAt' => fn(ParseNode $n) => $o->setObservedAt($n->getDateTimeValue()),
            'recoveryStatus' => fn(ParseNode $n) => $o->setRecoveryStatus($n->getStringValue()),
            'severity' => fn(ParseNode $n) => $o->setSeverity($n->getStringValue()),
            'source' => fn(ParseNode $n) => $o->setSource($n->getStringValue()),
            'startedAt' => fn(ParseNode $n) => $o->setStartedAt($n->getDateTimeValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getStringValue()),
            'summary' => fn(ParseNode $n) => $o->setSummary($n->getStringValue()),
        ];
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
     * Gets the observedAt property value. The observedAt property
     * @return DateTime|null
    */
    public function getObservedAt(): ?DateTime {
        return $this->observedAt;
    }

    /**
     * Gets the recoveryStatus property value. The recoveryStatus property
     * @return string|null
    */
    public function getRecoveryStatus(): ?string {
        return $this->recoveryStatus;
    }

    /**
     * Gets the severity property value. The severity property
     * @return string|null
    */
    public function getSeverity(): ?string {
        return $this->severity;
    }

    /**
     * Gets the source property value. The source property
     * @return string|null
    */
    public function getSource(): ?string {
        return $this->source;
    }

    /**
     * Gets the startedAt property value. The startedAt property
     * @return DateTime|null
    */
    public function getStartedAt(): ?DateTime {
        return $this->startedAt;
    }

    /**
     * Gets the status property value. The status property
     * @return string|null
    */
    public function getStatus(): ?string {
        return $this->status;
    }

    /**
     * Gets the summary property value. The summary property
     * @return string|null
    */
    public function getSummary(): ?string {
        return $this->summary;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('hostReference', $this->getHostReference());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeDateTimeValue('observedAt', $this->getObservedAt());
        $writer->writeStringValue('recoveryStatus', $this->getRecoveryStatus());
        $writer->writeStringValue('severity', $this->getSeverity());
        $writer->writeStringValue('source', $this->getSource());
        $writer->writeDateTimeValue('startedAt', $this->getStartedAt());
        $writer->writeStringValue('status', $this->getStatus());
        $writer->writeStringValue('summary', $this->getSummary());
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
     * Sets the observedAt property value. The observedAt property
     * @param DateTime|null $value Value to set for the observedAt property.
    */
    public function setObservedAt(?DateTime $value): void {
        $this->observedAt = $value;
    }

    /**
     * Sets the recoveryStatus property value. The recoveryStatus property
     * @param string|null $value Value to set for the recoveryStatus property.
    */
    public function setRecoveryStatus(?string $value): void {
        $this->recoveryStatus = $value;
    }

    /**
     * Sets the severity property value. The severity property
     * @param string|null $value Value to set for the severity property.
    */
    public function setSeverity(?string $value): void {
        $this->severity = $value;
    }

    /**
     * Sets the source property value. The source property
     * @param string|null $value Value to set for the source property.
    */
    public function setSource(?string $value): void {
        $this->source = $value;
    }

    /**
     * Sets the startedAt property value. The startedAt property
     * @param DateTime|null $value Value to set for the startedAt property.
    */
    public function setStartedAt(?DateTime $value): void {
        $this->startedAt = $value;
    }

    /**
     * Sets the status property value. The status property
     * @param string|null $value Value to set for the status property.
    */
    public function setStatus(?string $value): void {
        $this->status = $value;
    }

    /**
     * Sets the summary property value. The summary property
     * @param string|null $value Value to set for the summary property.
    */
    public function setSummary(?string $value): void {
        $this->summary = $value;
    }

}
