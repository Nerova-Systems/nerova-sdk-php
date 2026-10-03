<?php

namespace Nerova\Sdk\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PartnerActivationMandateCeiling implements Parsable 
{
    /**
     * @var string|null $contractVersion The contractVersion property
    */
    private ?string $contractVersion = null;
    
    /**
     * @var PartnerActivationDuty|null $duty The duty property
    */
    private ?PartnerActivationDuty $duty = null;
    
    /**
     * @var PartnerActivationMandateLevel|null $maximumLevel The maximumLevel property
    */
    private ?PartnerActivationMandateLevel $maximumLevel = null;
    
    /**
     * @var PartnerActivationDutyRequirement|null $requirement The requirement property
    */
    private ?PartnerActivationDutyRequirement $requirement = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PartnerActivationMandateCeiling
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PartnerActivationMandateCeiling {
        return new PartnerActivationMandateCeiling();
    }

    /**
     * Gets the contractVersion property value. The contractVersion property
     * @return string|null
    */
    public function getContractVersion(): ?string {
        return $this->contractVersion;
    }

    /**
     * Gets the duty property value. The duty property
     * @return PartnerActivationDuty|null
    */
    public function getDuty(): ?PartnerActivationDuty {
        return $this->duty;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'contractVersion' => fn(ParseNode $n) => $o->setContractVersion($n->getStringValue()),
            'duty' => fn(ParseNode $n) => $o->setDuty($n->getEnumValue(PartnerActivationDuty::class)),
            'maximumLevel' => fn(ParseNode $n) => $o->setMaximumLevel($n->getEnumValue(PartnerActivationMandateLevel::class)),
            'requirement' => fn(ParseNode $n) => $o->setRequirement($n->getEnumValue(PartnerActivationDutyRequirement::class)),
        ];
    }

    /**
     * Gets the maximumLevel property value. The maximumLevel property
     * @return PartnerActivationMandateLevel|null
    */
    public function getMaximumLevel(): ?PartnerActivationMandateLevel {
        return $this->maximumLevel;
    }

    /**
     * Gets the requirement property value. The requirement property
     * @return PartnerActivationDutyRequirement|null
    */
    public function getRequirement(): ?PartnerActivationDutyRequirement {
        return $this->requirement;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('contractVersion', $this->getContractVersion());
        $writer->writeEnumValue('duty', $this->getDuty());
        $writer->writeEnumValue('maximumLevel', $this->getMaximumLevel());
        $writer->writeEnumValue('requirement', $this->getRequirement());
    }

    /**
     * Sets the contractVersion property value. The contractVersion property
     * @param string|null $value Value to set for the contractVersion property.
    */
    public function setContractVersion(?string $value): void {
        $this->contractVersion = $value;
    }

    /**
     * Sets the duty property value. The duty property
     * @param PartnerActivationDuty|null $value Value to set for the duty property.
    */
    public function setDuty(?PartnerActivationDuty $value): void {
        $this->duty = $value;
    }

    /**
     * Sets the maximumLevel property value. The maximumLevel property
     * @param PartnerActivationMandateLevel|null $value Value to set for the maximumLevel property.
    */
    public function setMaximumLevel(?PartnerActivationMandateLevel $value): void {
        $this->maximumLevel = $value;
    }

    /**
     * Sets the requirement property value. The requirement property
     * @param PartnerActivationDutyRequirement|null $value Value to set for the requirement property.
    */
    public function setRequirement(?PartnerActivationDutyRequirement $value): void {
        $this->requirement = $value;
    }

}
