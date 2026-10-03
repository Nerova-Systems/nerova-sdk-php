<?php

namespace Nerova\Sdk\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CreatePartnerRuntimeMemoryCommand implements Parsable 
{
    /**
     * @var PartnerRuntimeActorRequest|null $actor The actor property
    */
    private ?PartnerRuntimeActorRequest $actor = null;
    
    /**
     * @var string|null $group The group property
    */
    private ?string $group = null;
    
    /**
     * @var string|null $source The source property
    */
    private ?string $source = null;
    
    /**
     * @var string|null $sourceReference The sourceReference property
    */
    private ?string $sourceReference = null;
    
    /**
     * @var string|null $text The text property
    */
    private ?string $text = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CreatePartnerRuntimeMemoryCommand
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CreatePartnerRuntimeMemoryCommand {
        return new CreatePartnerRuntimeMemoryCommand();
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
            'group' => fn(ParseNode $n) => $o->setGroup($n->getStringValue()),
            'source' => fn(ParseNode $n) => $o->setSource($n->getStringValue()),
            'sourceReference' => fn(ParseNode $n) => $o->setSourceReference($n->getStringValue()),
            'text' => fn(ParseNode $n) => $o->setText($n->getStringValue()),
        ];
    }

    /**
     * Gets the group property value. The group property
     * @return string|null
    */
    public function getGroup(): ?string {
        return $this->group;
    }

    /**
     * Gets the source property value. The source property
     * @return string|null
    */
    public function getSource(): ?string {
        return $this->source;
    }

    /**
     * Gets the sourceReference property value. The sourceReference property
     * @return string|null
    */
    public function getSourceReference(): ?string {
        return $this->sourceReference;
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
        $writer->writeStringValue('group', $this->getGroup());
        $writer->writeStringValue('source', $this->getSource());
        $writer->writeStringValue('sourceReference', $this->getSourceReference());
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
     * Sets the group property value. The group property
     * @param string|null $value Value to set for the group property.
    */
    public function setGroup(?string $value): void {
        $this->group = $value;
    }

    /**
     * Sets the source property value. The source property
     * @param string|null $value Value to set for the source property.
    */
    public function setSource(?string $value): void {
        $this->source = $value;
    }

    /**
     * Sets the sourceReference property value. The sourceReference property
     * @param string|null $value Value to set for the sourceReference property.
    */
    public function setSourceReference(?string $value): void {
        $this->sourceReference = $value;
    }

    /**
     * Sets the text property value. The text property
     * @param string|null $value Value to set for the text property.
    */
    public function setText(?string $value): void {
        $this->text = $value;
    }

}
