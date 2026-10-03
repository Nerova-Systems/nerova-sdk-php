<?php

namespace Nerova\Sdk\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PartnerRuntimeConversationItem implements Parsable 
{
    /**
     * @var string|null $channel The channel property
    */
    private ?string $channel = null;
    
    /**
     * @var PartnerRuntimeHostReference|null $hostReference The hostReference property
    */
    private ?PartnerRuntimeHostReference $hostReference = null;
    
    /**
     * @var string|null $id The id property
    */
    private ?string $id = null;
    
    /**
     * @var DateTime|null $lastActivityAt The lastActivityAt property
    */
    private ?DateTime $lastActivityAt = null;
    
    /**
     * @var string|null $participantReference The participantReference property
    */
    private ?string $participantReference = null;
    
    /**
     * @var string|null $source The source property
    */
    private ?string $source = null;
    
    /**
     * @var string|null $status The status property
    */
    private ?string $status = null;
    
    /**
     * @var string|null $transcriptAvailability The transcriptAvailability property
    */
    private ?string $transcriptAvailability = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PartnerRuntimeConversationItem
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PartnerRuntimeConversationItem {
        return new PartnerRuntimeConversationItem();
    }

    /**
     * Gets the channel property value. The channel property
     * @return string|null
    */
    public function getChannel(): ?string {
        return $this->channel;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'channel' => fn(ParseNode $n) => $o->setChannel($n->getStringValue()),
            'hostReference' => fn(ParseNode $n) => $o->setHostReference($n->getObjectValue([PartnerRuntimeHostReference::class, 'createFromDiscriminatorValue'])),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'lastActivityAt' => fn(ParseNode $n) => $o->setLastActivityAt($n->getDateTimeValue()),
            'participantReference' => fn(ParseNode $n) => $o->setParticipantReference($n->getStringValue()),
            'source' => fn(ParseNode $n) => $o->setSource($n->getStringValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getStringValue()),
            'transcriptAvailability' => fn(ParseNode $n) => $o->setTranscriptAvailability($n->getStringValue()),
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
     * Gets the lastActivityAt property value. The lastActivityAt property
     * @return DateTime|null
    */
    public function getLastActivityAt(): ?DateTime {
        return $this->lastActivityAt;
    }

    /**
     * Gets the participantReference property value. The participantReference property
     * @return string|null
    */
    public function getParticipantReference(): ?string {
        return $this->participantReference;
    }

    /**
     * Gets the source property value. The source property
     * @return string|null
    */
    public function getSource(): ?string {
        return $this->source;
    }

    /**
     * Gets the status property value. The status property
     * @return string|null
    */
    public function getStatus(): ?string {
        return $this->status;
    }

    /**
     * Gets the transcriptAvailability property value. The transcriptAvailability property
     * @return string|null
    */
    public function getTranscriptAvailability(): ?string {
        return $this->transcriptAvailability;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('channel', $this->getChannel());
        $writer->writeObjectValue('hostReference', $this->getHostReference());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeDateTimeValue('lastActivityAt', $this->getLastActivityAt());
        $writer->writeStringValue('participantReference', $this->getParticipantReference());
        $writer->writeStringValue('source', $this->getSource());
        $writer->writeStringValue('status', $this->getStatus());
        $writer->writeStringValue('transcriptAvailability', $this->getTranscriptAvailability());
    }

    /**
     * Sets the channel property value. The channel property
     * @param string|null $value Value to set for the channel property.
    */
    public function setChannel(?string $value): void {
        $this->channel = $value;
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
     * Sets the lastActivityAt property value. The lastActivityAt property
     * @param DateTime|null $value Value to set for the lastActivityAt property.
    */
    public function setLastActivityAt(?DateTime $value): void {
        $this->lastActivityAt = $value;
    }

    /**
     * Sets the participantReference property value. The participantReference property
     * @param string|null $value Value to set for the participantReference property.
    */
    public function setParticipantReference(?string $value): void {
        $this->participantReference = $value;
    }

    /**
     * Sets the source property value. The source property
     * @param string|null $value Value to set for the source property.
    */
    public function setSource(?string $value): void {
        $this->source = $value;
    }

    /**
     * Sets the status property value. The status property
     * @param string|null $value Value to set for the status property.
    */
    public function setStatus(?string $value): void {
        $this->status = $value;
    }

    /**
     * Sets the transcriptAvailability property value. The transcriptAvailability property
     * @param string|null $value Value to set for the transcriptAvailability property.
    */
    public function setTranscriptAvailability(?string $value): void {
        $this->transcriptAvailability = $value;
    }

}
