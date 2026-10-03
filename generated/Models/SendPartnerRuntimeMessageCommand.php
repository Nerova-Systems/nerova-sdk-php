<?php

namespace Nerova\Sdk\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SendPartnerRuntimeMessageCommand implements Parsable 
{
    /**
     * @var PartnerRuntimeActorRequest|null $actor The actor property
    */
    private ?PartnerRuntimeActorRequest $actor = null;
    
    /**
     * @var string|null $replyToMessageId The replyToMessageId property
    */
    private ?string $replyToMessageId = null;
    
    /**
     * @var string|null $text The text property
    */
    private ?string $text = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SendPartnerRuntimeMessageCommand
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SendPartnerRuntimeMessageCommand {
        return new SendPartnerRuntimeMessageCommand();
    }

    /**
     * Gets the actor property value. The actor property
     * @return PartnerRuntimeActorRequest|null
    */
    public function getActor(): ?PartnerRuntimeActorRequest {
        return $this->actor;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'actor' => fn(ParseNode $n) => $o->setActor($n->getObjectValue([PartnerRuntimeActorRequest::class, 'createFromDiscriminatorValue'])),
            'replyToMessageId' => fn(ParseNode $n) => $o->setReplyToMessageId($n->getStringValue()),
            'text' => fn(ParseNode $n) => $o->setText($n->getStringValue()),
        ];
    }

    /**
     * Gets the replyToMessageId property value. The replyToMessageId property
     * @return string|null
    */
    public function getReplyToMessageId(): ?string {
        return $this->replyToMessageId;
    }

    /**
     * Gets the text property value. The text property
     * @return string|null
    */
    public function getText(): ?string {
        return $this->text;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('actor', $this->getActor());
        $writer->writeStringValue('replyToMessageId', $this->getReplyToMessageId());
        $writer->writeStringValue('text', $this->getText());
    }

    /**
     * Sets the actor property value. The actor property
     * @param PartnerRuntimeActorRequest|null $value Value to set for the actor property.
    */
    public function setActor(?PartnerRuntimeActorRequest $value): void {
        $this->actor = $value;
    }

    /**
     * Sets the replyToMessageId property value. The replyToMessageId property
     * @param string|null $value Value to set for the replyToMessageId property.
    */
    public function setReplyToMessageId(?string $value): void {
        $this->replyToMessageId = $value;
    }

    /**
     * Sets the text property value. The text property
     * @param string|null $value Value to set for the text property.
    */
    public function setText(?string $value): void {
        $this->text = $value;
    }

}
