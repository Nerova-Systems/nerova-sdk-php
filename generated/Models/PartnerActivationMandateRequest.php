<?php

namespace Nerova\Sdk\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PartnerActivationMandateRequest implements Parsable 
{
    /**
     * @var array<PartnerActivationMandateChoiceInput>|null $choices The choices property
    */
    private ?array $choices = null;
    
    /**
     * @var string|null $contractVersion The contractVersion property
    */
    private ?string $contractVersion = null;
    
    /**
     * @var int|null $expectedVersion The expectedVersion property
    */
    private ?int $expectedVersion = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PartnerActivationMandateRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PartnerActivationMandateRequest {
        return new PartnerActivationMandateRequest();
    }

    /**
     * Gets the choices property value. The choices property
     * @return array<PartnerActivationMandateChoiceInput>|null
    */
    public function getChoices(): ?array {
        return $this->choices;
    }

    /**
     * Gets the contractVersion property value. The contractVersion property
     * @return string|null
    */
    public function getContractVersion(): ?string {
        return $this->contractVersion;
    }

    /**
     * Gets the expectedVersion property value. The expectedVersion property
     * @return int|null
    */
    public function getExpectedVersion(): ?int {
        return $this->expectedVersion;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'choices' => fn(ParseNode $n) => $o->setChoices($n->getCollectionOfObjectValues([PartnerActivationMandateChoiceInput::class, 'createFromDiscriminatorValue'])),
            'contractVersion' => fn(ParseNode $n) => $o->setContractVersion($n->getStringValue()),
            'expectedVersion' => fn(ParseNode $n) => $o->setExpectedVersion($n->getIntegerValue()),
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('choices', $this->getChoices());
        $writer->writeStringValue('contractVersion', $this->getContractVersion());
        $writer->writeIntegerValue('expectedVersion', $this->getExpectedVersion());
    }

    /**
     * Sets the choices property value. The choices property
     * @param array<PartnerActivationMandateChoiceInput>|null $value Value to set for the choices property.
    */
    public function setChoices(?array $value): void {
        $this->choices = $value;
    }

    /**
     * Sets the contractVersion property value. The contractVersion property
     * @param string|null $value Value to set for the contractVersion property.
    */
    public function setContractVersion(?string $value): void {
        $this->contractVersion = $value;
    }

    /**
     * Sets the expectedVersion property value. The expectedVersion property
     * @param int|null $value Value to set for the expectedVersion property.
    */
    public function setExpectedVersion(?int $value): void {
        $this->expectedVersion = $value;
    }

}
