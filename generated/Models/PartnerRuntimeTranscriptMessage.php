<?php

namespace Nerova\Sdk\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PartnerRuntimeTranscriptMessage implements Parsable 
{
    /**
     * @var string|null $content The content property
    */
    private ?string $content = null;
    
    /**
     * @var string|null $direction The direction property
    */
    private ?string $direction = null;
    
    /**
     * @var PartnerRuntimeHostReference|null $hostReference The hostReference property
    */
    private ?PartnerRuntimeHostReference $hostReference = null;
    
    /**
     * @var string|null $id The id property
    */
    private ?string $id = null;
    
    /**
     * @var string|null $redaction The redaction property
    */
    private ?string $redaction = null;
    
    /**
     * @var DateTime|null $sentAt The sentAt property
    */
    private ?DateTime $sentAt = null;
    
    /**
     * @var string|null $status The status property
    */
    private ?string $status = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PartnerRuntimeTranscriptMessage
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PartnerRuntimeTranscriptMessage {
        return new PartnerRuntimeTranscriptMessage();
    }

    /**
     * Gets the content property value. The content property
     * @return string|null
    */
    public function getContent(): ?string {
        return $this->content;
    }

    /**
     * Gets the direction property value. The direction property
     * @return string|null
    */
    public function getDirection(): ?string {
        return $this->direction;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'content' => fn(ParseNode $n) => $o->setContent($n->getStringValue()),
            'direction' => fn(ParseNode $n) => $o->setDirection($n->getStringValue()),
            'hostReference' => fn(ParseNode $n) => $o->setHostReference($n->getObjectValue([PartnerRuntimeHostReference::class, 'createFromDiscriminatorValue'])),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'redaction' => fn(ParseNode $n) => $o->setRedaction($n->getStringValue()),
            'sentAt' => fn(ParseNode $n) => $o->setSentAt($n->getDateTimeValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getStringValue()),
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
     * Gets the redaction property value. The redaction property
     * @return string|null
    */
    public function getRedaction(): ?string {
        return $this->redaction;
    }

    /**
     * Gets the sentAt property value. The sentAt property
     * @return DateTime|null
    */
    public function getSentAt(): ?DateTime {
        return $this->sentAt;
    }

    /**
     * Gets the status property value. The status property
     * @return string|null
    */
    public function getStatus(): ?string {
        return $this->status;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('content', $this->getContent());
        $writer->writeStringValue('direction', $this->getDirection());
        $writer->writeObjectValue('hostReference', $this->getHostReference());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeStringValue('redaction', $this->getRedaction());
        $writer->writeDateTimeValue('sentAt', $this->getSentAt());
        $writer->writeStringValue('status', $this->getStatus());
    }

    /**
     * Sets the content property value. The content property
     * @param string|null $value Value to set for the content property.
    */
    public function setContent(?string $value): void {
        $this->content = $value;
    }

    /**
     * Sets the direction property value. The direction property
     * @param string|null $value Value to set for the direction property.
    */
    public function setDirection(?string $value): void {
        $this->direction = $value;
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
     * Sets the redaction property value. The redaction property
     * @param string|null $value Value to set for the redaction property.
    */
    public function setRedaction(?string $value): void {
        $this->redaction = $value;
    }

    /**
     * Sets the sentAt property value. The sentAt property
     * @param DateTime|null $value Value to set for the sentAt property.
    */
    public function setSentAt(?DateTime $value): void {
        $this->sentAt = $value;
    }

    /**
     * Sets the status property value. The status property
     * @param string|null $value Value to set for the status property.
    */
    public function setStatus(?string $value): void {
        $this->status = $value;
    }

}
