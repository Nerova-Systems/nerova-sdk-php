<?php

namespace Nerova\Sdk\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UpsertPartnerNotificationConsentCommand implements Parsable 
{
    /**
     * @var PartnerRuntimeActorRequest|null $actor The actor property
    */
    private ?PartnerRuntimeActorRequest $actor = null;
    
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
     * @var string|null $noticeText The noticeText property
    */
    private ?string $noticeText = null;
    
    /**
     * @var string|null $purpose The purpose property
    */
    private ?string $purpose = null;
    
    /**
     * @var string|null $source The source property
    */
    private ?string $source = null;
    
    /**
     * @var string|null $state The state property
    */
    private ?string $state = null;
    
    /**
     * @var string|null $to The to property
    */
    private ?string $to = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UpsertPartnerNotificationConsentCommand
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UpsertPartnerNotificationConsentCommand {
        return new UpsertPartnerNotificationConsentCommand();
    }

    /**
     * Gets the actor property value. The actor property
     * @return PartnerRuntimeActorRequest|null
    */
    public function getActor(): ?PartnerRuntimeActorRequest {
        return $this->actor;
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
            'actor' => fn(ParseNode $n) => $o->setActor($n->getObjectValue([PartnerRuntimeActorRequest::class, 'createFromDiscriminatorValue'])),
            'capturedAt' => fn(ParseNode $n) => $o->setCapturedAt($n->getDateTimeValue()),
            'evidenceReference' => fn(ParseNode $n) => $o->setEvidenceReference($n->getStringValue()),
            'method' => fn(ParseNode $n) => $o->setMethod($n->getStringValue()),
            'noticeText' => fn(ParseNode $n) => $o->setNoticeText($n->getStringValue()),
            'purpose' => fn(ParseNode $n) => $o->setPurpose($n->getStringValue()),
            'source' => fn(ParseNode $n) => $o->setSource($n->getStringValue()),
            'state' => fn(ParseNode $n) => $o->setState($n->getStringValue()),
            'to' => fn(ParseNode $n) => $o->setTo($n->getStringValue()),
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
     * Gets the noticeText property value. The noticeText property
     * @return string|null
    */
    public function getNoticeText(): ?string {
        return $this->noticeText;
    }

    /**
     * Gets the purpose property value. The purpose property
     * @return string|null
    */
    public function getPurpose(): ?string {
        return $this->purpose;
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
     * Gets the to property value. The to property
     * @return string|null
    */
    public function getTo(): ?string {
        return $this->to;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('actor', $this->getActor());
        $writer->writeDateTimeValue('capturedAt', $this->getCapturedAt());
        $writer->writeStringValue('evidenceReference', $this->getEvidenceReference());
        $writer->writeStringValue('method', $this->getMethod());
        $writer->writeStringValue('noticeText', $this->getNoticeText());
        $writer->writeStringValue('purpose', $this->getPurpose());
        $writer->writeStringValue('source', $this->getSource());
        $writer->writeStringValue('state', $this->getState());
        $writer->writeStringValue('to', $this->getTo());
    }

    /**
     * Sets the actor property value. The actor property
     * @param PartnerRuntimeActorRequest|null $value Value to set for the actor property.
    */
    public function setActor(?PartnerRuntimeActorRequest $value): void {
        $this->actor = $value;
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
     * Sets the noticeText property value. The noticeText property
     * @param string|null $value Value to set for the noticeText property.
    */
    public function setNoticeText(?string $value): void {
        $this->noticeText = $value;
    }

    /**
     * Sets the purpose property value. The purpose property
     * @param string|null $value Value to set for the purpose property.
    */
    public function setPurpose(?string $value): void {
        $this->purpose = $value;
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

    /**
     * Sets the to property value. The to property
     * @param string|null $value Value to set for the to property.
    */
    public function setTo(?string $value): void {
        $this->to = $value;
    }

}
