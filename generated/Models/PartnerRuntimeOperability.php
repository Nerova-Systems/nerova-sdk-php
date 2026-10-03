<?php

namespace Nerova\Sdk\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PartnerRuntimeOperability implements Parsable 
{
    /**
     * @var string|null $ownerUser The ownerUser property
    */
    private ?string $ownerUser = null;
    
    /**
     * @var string|null $receptionist The receptionist property
    */
    private ?string $receptionist = null;
    
    /**
     * @var string|null $schedulingProfile The schedulingProfile property
    */
    private ?string $schedulingProfile = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PartnerRuntimeOperability
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PartnerRuntimeOperability {
        return new PartnerRuntimeOperability();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'ownerUser' => fn(ParseNode $n) => $o->setOwnerUser($n->getStringValue()),
            'receptionist' => fn(ParseNode $n) => $o->setReceptionist($n->getStringValue()),
            'schedulingProfile' => fn(ParseNode $n) => $o->setSchedulingProfile($n->getStringValue()),
        ];
    }

    /**
     * Gets the ownerUser property value. The ownerUser property
     * @return string|null
    */
    public function getOwnerUser(): ?string {
        return $this->ownerUser;
    }

    /**
     * Gets the receptionist property value. The receptionist property
     * @return string|null
    */
    public function getReceptionist(): ?string {
        return $this->receptionist;
    }

    /**
     * Gets the schedulingProfile property value. The schedulingProfile property
     * @return string|null
    */
    public function getSchedulingProfile(): ?string {
        return $this->schedulingProfile;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('ownerUser', $this->getOwnerUser());
        $writer->writeStringValue('receptionist', $this->getReceptionist());
        $writer->writeStringValue('schedulingProfile', $this->getSchedulingProfile());
    }

    /**
     * Sets the ownerUser property value. The ownerUser property
     * @param string|null $value Value to set for the ownerUser property.
    */
    public function setOwnerUser(?string $value): void {
        $this->ownerUser = $value;
    }

    /**
     * Sets the receptionist property value. The receptionist property
     * @param string|null $value Value to set for the receptionist property.
    */
    public function setReceptionist(?string $value): void {
        $this->receptionist = $value;
    }

    /**
     * Sets the schedulingProfile property value. The schedulingProfile property
     * @param string|null $value Value to set for the schedulingProfile property.
    */
    public function setSchedulingProfile(?string $value): void {
        $this->schedulingProfile = $value;
    }

}
