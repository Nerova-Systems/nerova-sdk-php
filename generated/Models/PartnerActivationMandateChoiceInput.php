<?php

namespace Nerova\Sdk\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PartnerActivationMandateChoiceInput implements Parsable 
{
    /**
     * @var PartnerActivationDuty|null $duty The duty property
    */
    private ?PartnerActivationDuty $duty = null;
    
    /**
     * @var PartnerActivationMandateLevel|null $requestedLevel The requestedLevel property
    */
    private ?PartnerActivationMandateLevel $requestedLevel = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PartnerActivationMandateChoiceInput
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PartnerActivationMandateChoiceInput {
        return new PartnerActivationMandateChoiceInput();
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
            'duty' => fn(ParseNode $n) => $o->setDuty($n->getEnumValue(PartnerActivationDuty::class)),
            'requestedLevel' => fn(ParseNode $n) => $o->setRequestedLevel($n->getEnumValue(PartnerActivationMandateLevel::class)),
        ];
    }

    /**
     * Gets the requestedLevel property value. The requestedLevel property
     * @return PartnerActivationMandateLevel|null
    */
    public function getRequestedLevel(): ?PartnerActivationMandateLevel {
        return $this->requestedLevel;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('duty', $this->getDuty());
        $writer->writeEnumValue('requestedLevel', $this->getRequestedLevel());
    }

    /**
     * Sets the duty property value. The duty property
     * @param PartnerActivationDuty|null $value Value to set for the duty property.
    */
    public function setDuty(?PartnerActivationDuty $value): void {
        $this->duty = $value;
    }

    /**
     * Sets the requestedLevel property value. The requestedLevel property
     * @param PartnerActivationMandateLevel|null $value Value to set for the requestedLevel property.
    */
    public function setRequestedLevel(?PartnerActivationMandateLevel $value): void {
        $this->requestedLevel = $value;
    }

}
