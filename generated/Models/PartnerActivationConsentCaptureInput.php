<?php

namespace Nerova\Sdk\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PartnerActivationConsentCaptureInput implements Parsable 
{
    /**
     * @var bool|null $accepted The accepted property
    */
    private ?bool $accepted = null;
    
    /**
     * @var string|null $actorReference The actorReference property
    */
    private ?string $actorReference = null;
    
    /**
     * @var string|null $delegationReference The delegationReference property
    */
    private ?string $delegationReference = null;
    
    /**
     * @var PartnerActivationConsentRequirement|null $requirement The requirement property
    */
    private ?PartnerActivationConsentRequirement $requirement = null;
    
    /**
     * @var string|null $version The version property
    */
    private ?string $version = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PartnerActivationConsentCaptureInput
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PartnerActivationConsentCaptureInput {
        return new PartnerActivationConsentCaptureInput();
    }

    /**
     * Gets the accepted property value. The accepted property
     * @return bool|null
    */
    public function getAccepted(): ?bool {
        return $this->accepted;
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
            'accepted' => fn(ParseNode $n) => $o->setAccepted($n->getBooleanValue()),
            'actorReference' => fn(ParseNode $n) => $o->setActorReference($n->getStringValue()),
            'delegationReference' => fn(ParseNode $n) => $o->setDelegationReference($n->getStringValue()),
            'requirement' => fn(ParseNode $n) => $o->setRequirement($n->getEnumValue(PartnerActivationConsentRequirement::class)),
            'version' => fn(ParseNode $n) => $o->setVersion($n->getStringValue()),
        ];
    }

    /**
     * Gets the requirement property value. The requirement property
     * @return PartnerActivationConsentRequirement|null
    */
    public function getRequirement(): ?PartnerActivationConsentRequirement {
        return $this->requirement;
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
        $writer->writeBooleanValue('accepted', $this->getAccepted());
        $writer->writeStringValue('actorReference', $this->getActorReference());
        $writer->writeStringValue('delegationReference', $this->getDelegationReference());
        $writer->writeEnumValue('requirement', $this->getRequirement());
        $writer->writeStringValue('version', $this->getVersion());
    }

    /**
     * Sets the accepted property value. The accepted property
     * @param bool|null $value Value to set for the accepted property.
    */
    public function setAccepted(?bool $value): void {
        $this->accepted = $value;
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

    /**
     * Sets the requirement property value. The requirement property
     * @param PartnerActivationConsentRequirement|null $value Value to set for the requirement property.
    */
    public function setRequirement(?PartnerActivationConsentRequirement $value): void {
        $this->requirement = $value;
    }

    /**
     * Sets the version property value. The version property
     * @param string|null $value Value to set for the version property.
    */
    public function setVersion(?string $value): void {
        $this->version = $value;
    }

}
