<?php

namespace Nerova\Sdk\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class WhatsAppOnboardingChecklistStep implements Parsable 
{
    /**
     * @var WhatsAppOnboardingChecklistStepId|null $id The id property
    */
    private ?WhatsAppOnboardingChecklistStepId $id = null;
    
    /**
     * @var WhatsAppOnboardingChecklistStepStatus|null $status The status property
    */
    private ?WhatsAppOnboardingChecklistStepStatus $status = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WhatsAppOnboardingChecklistStep
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WhatsAppOnboardingChecklistStep {
        return new WhatsAppOnboardingChecklistStep();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'id' => fn(ParseNode $n) => $o->setId($n->getEnumValue(WhatsAppOnboardingChecklistStepId::class)),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(WhatsAppOnboardingChecklistStepStatus::class)),
        ];
    }

    /**
     * Gets the id property value. The id property
     * @return WhatsAppOnboardingChecklistStepId|null
    */
    public function getId(): ?WhatsAppOnboardingChecklistStepId {
        return $this->id;
    }

    /**
     * Gets the status property value. The status property
     * @return WhatsAppOnboardingChecklistStepStatus|null
    */
    public function getStatus(): ?WhatsAppOnboardingChecklistStepStatus {
        return $this->status;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('id', $this->getId());
        $writer->writeEnumValue('status', $this->getStatus());
    }

    /**
     * Sets the id property value. The id property
     * @param WhatsAppOnboardingChecklistStepId|null $value Value to set for the id property.
    */
    public function setId(?WhatsAppOnboardingChecklistStepId $value): void {
        $this->id = $value;
    }

    /**
     * Sets the status property value. The status property
     * @param WhatsAppOnboardingChecklistStepStatus|null $value Value to set for the status property.
    */
    public function setStatus(?WhatsAppOnboardingChecklistStepStatus $value): void {
        $this->status = $value;
    }

}
