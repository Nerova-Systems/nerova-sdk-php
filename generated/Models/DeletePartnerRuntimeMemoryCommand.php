<?php

namespace Nerova\Sdk\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeletePartnerRuntimeMemoryCommand implements Parsable 
{
    /**
     * @var PartnerRuntimeActorRequest|null $actor The actor property
    */
    private ?PartnerRuntimeActorRequest $actor = null;
    
    /**
     * @var string|null $version The version property
    */
    private ?string $version = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeletePartnerRuntimeMemoryCommand
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeletePartnerRuntimeMemoryCommand {
        return new DeletePartnerRuntimeMemoryCommand();
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
            'version' => fn(ParseNode $n) => $o->setVersion($n->getStringValue()),
        ];
    }

    /**
     * Gets the version property value. The version property
     * @return string|null
    */
    public function getVersion(): ?string {
        return $this->version;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('actor', $this->getActor());
        $writer->writeStringValue('version', $this->getVersion());
    }

    /**
     * Sets the actor property value. The actor property
     * @param PartnerRuntimeActorRequest|null $value Value to set for the actor property.
    */
    public function setActor(?PartnerRuntimeActorRequest $value): void {
        $this->actor = $value;
    }

    /**
     * Sets the version property value. The version property
     * @param string|null $value Value to set for the version property.
    */
    public function setVersion(?string $value): void {
        $this->version = $value;
    }

}
