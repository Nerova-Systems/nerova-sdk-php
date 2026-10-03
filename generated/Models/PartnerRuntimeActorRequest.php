<?php

namespace Nerova\Sdk\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PartnerRuntimeActorRequest implements Parsable 
{
    /**
     * @var string|null $actorReference The actorReference property
    */
    private ?string $actorReference = null;
    
    /**
     * @var string|null $delegationReference The delegationReference property
    */
    private ?string $delegationReference = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PartnerRuntimeActorRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PartnerRuntimeActorRequest {
        return new PartnerRuntimeActorRequest();
    }

    /**
     * Gets the actorReference property value. The actorReference property
     * @return string|null
    */
    public function getActorReference(): ?string {
        return $this->actorReference;
    }

    /**
     * Gets the delegationReference property value. The delegationReference property
     * @return string|null
    */
    public function getDelegationReference(): ?string {
        return $this->delegationReference;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'actorReference' => fn(ParseNode $n) => $o->setActorReference($n->getStringValue()),
            'delegationReference' => fn(ParseNode $n) => $o->setDelegationReference($n->getStringValue()),
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('actorReference', $this->getActorReference());
        $writer->writeStringValue('delegationReference', $this->getDelegationReference());
    }

    /**
     * Sets the actorReference property value. The actorReference property
     * @param string|null $value Value to set for the actorReference property.
    */
    public function setActorReference(?string $value): void {
        $this->actorReference = $value;
    }

    /**
     * Sets the delegationReference property value. The delegationReference property
     * @param string|null $value Value to set for the delegationReference property.
    */
    public function setDelegationReference(?string $value): void {
        $this->delegationReference = $value;
    }

}
