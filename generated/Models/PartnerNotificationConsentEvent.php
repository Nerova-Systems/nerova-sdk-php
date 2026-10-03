<?php

namespace Nerova\Sdk\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PartnerNotificationConsentEvent implements Parsable 
{
    /**
     * @var DateTime|null $capturedAt The capturedAt property
    */
    private ?DateTime $capturedAt = null;
    
    /**
     * @var string|null $evidenceReference The evidenceReference property
    */
    private ?string $evidenceReference = null;
    
    /**
     * @var string|null $method The method property
    */
    private ?string $method = null;
    
    /**
     * @var string|null $noticeHash The noticeHash property
    */
    private ?string $noticeHash = null;
    
    /**
     * @var string|null $purpose The purpose property
    */
    private ?string $purpose = null;
    
    /**
     * @var DateTime|null $recordedAt The recordedAt property
    */
    private ?DateTime $recordedAt = null;
    
    /**
     * @var string|null $source The source property
    */
    private ?string $source = null;
    
    /**
     * @var string|null $state The state property
    */
    private ?string $state = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PartnerNotificationConsentEvent
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PartnerNotificationConsentEvent {
        return new PartnerNotificationConsentEvent();
    }

    /**
     * Gets the capturedAt property value. The capturedAt property
     * @return DateTime|null
    */
    public function getCapturedAt(): ?DateTime {
        return $this->capturedAt;
    }

    /**
     * Gets the evidenceReference property value. The evidenceReference property
     * @return string|null
    */
    public function getEvidenceReference(): ?string {
        return $this->evidenceReference;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'capturedAt' => fn(ParseNode $n) => $o->setCapturedAt($n->getDateTimeValue()),
            'evidenceReference' => fn(ParseNode $n) => $o->setEvidenceReference($n->getStringValue()),
            'method' => fn(ParseNode $n) => $o->setMethod($n->getStringValue()),
            'noticeHash' => fn(ParseNode $n) => $o->setNoticeHash($n->getStringValue()),
            'purpose' => fn(ParseNode $n) => $o->setPurpose($n->getStringValue()),
            'recordedAt' => fn(ParseNode $n) => $o->setRecordedAt($n->getDateTimeValue()),
            'source' => fn(ParseNode $n) => $o->setSource($n->getStringValue()),
            'state' => fn(ParseNode $n) => $o->setState($n->getStringValue()),
        ];
    }

    /**
     * Gets the method property value. The method property
     * @return string|null
    */
    public function getMethod(): ?string {
        return $this->method;
    }

    /**
     * Gets the noticeHash property value. The noticeHash property
     * @return string|null
    */
    public function getNoticeHash(): ?string {
        return $this->noticeHash;
    }

    /**
     * Gets the purpose property value. The purpose property
     * @return string|null
    */
    public function getPurpose(): ?string {
        return $this->purpose;
    }

    /**
     * Gets the recordedAt property value. The recordedAt property
     * @return DateTime|null
    */
    public function getRecordedAt(): ?DateTime {
        return $this->recordedAt;
    }

    /**
     * Gets the source property value. The source property
     * @return string|null
    */
    public function getSource(): ?string {
        return $this->source;
    }

    /**
     * Gets the state property value. The state property
     * @return string|null
    */
    public function getState(): ?string {
        return $this->state;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeDateTimeValue('capturedAt', $this->getCapturedAt());
        $writer->writeStringValue('evidenceReference', $this->getEvidenceReference());
        $writer->writeStringValue('method', $this->getMethod());
        $writer->writeStringValue('noticeHash', $this->getNoticeHash());
        $writer->writeStringValue('purpose', $this->getPurpose());
        $writer->writeDateTimeValue('recordedAt', $this->getRecordedAt());
        $writer->writeStringValue('source', $this->getSource());
        $writer->writeStringValue('state', $this->getState());
    }

    /**
     * Sets the capturedAt property value. The capturedAt property
     * @param DateTime|null $value Value to set for the capturedAt property.
    */
    public function setCapturedAt(?DateTime $value): void {
        $this->capturedAt = $value;
    }

    /**
     * Sets the evidenceReference property value. The evidenceReference property
     * @param string|null $value Value to set for the evidenceReference property.
    */
    public function setEvidenceReference(?string $value): void {
        $this->evidenceReference = $value;
    }

    /**
     * Sets the method property value. The method property
     * @param string|null $value Value to set for the method property.
    */
    public function setMethod(?string $value): void {
        $this->method = $value;
    }

    /**
     * Sets the noticeHash property value. The noticeHash property
     * @param string|null $value Value to set for the noticeHash property.
    */
    public function setNoticeHash(?string $value): void {
        $this->noticeHash = $value;
    }

    /**
     * Sets the purpose property value. The purpose property
     * @param string|null $value Value to set for the purpose property.
    */
    public function setPurpose(?string $value): void {
        $this->purpose = $value;
    }

    /**
     * Sets the recordedAt property value. The recordedAt property
     * @param DateTime|null $value Value to set for the recordedAt property.
    */
    public function setRecordedAt(?DateTime $value): void {
        $this->recordedAt = $value;
    }

    /**
     * Sets the source property value. The source property
     * @param string|null $value Value to set for the source property.
    */
    public function setSource(?string $value): void {
        $this->source = $value;
    }

    /**
     * Sets the state property value. The state property
     * @param string|null $value Value to set for the state property.
    */
    public function setState(?string $value): void {
        $this->state = $value;
    }

}
