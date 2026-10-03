<?php

namespace Nerova\Sdk\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PartnerRuntimeMemoryResponse implements Parsable 
{
    /**
     * @var string|null $availability The availability property
    */
    private ?string $availability = null;
    
    /**
     * @var array<PartnerRuntimeMemoryFact>|null $facts The facts property
    */
    private ?array $facts = null;
    
    /**
     * @var string|null $retention The retention property
    */
    private ?string $retention = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PartnerRuntimeMemoryResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PartnerRuntimeMemoryResponse {
        return new PartnerRuntimeMemoryResponse();
    }

    /**
     * Gets the availability property value. The availability property
     * @return string|null
    */
    public function getAvailability(): ?string {
        return $this->availability;
    }

    /**
     * Gets the facts property value. The facts property
     * @return array<PartnerRuntimeMemoryFact>|null
    */
    public function getFacts(): ?array {
        return $this->facts;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'availability' => fn(ParseNode $n) => $o->setAvailability($n->getStringValue()),
            'facts' => fn(ParseNode $n) => $o->setFacts($n->getCollectionOfObjectValues([PartnerRuntimeMemoryFact::class, 'createFromDiscriminatorValue'])),
            'retention' => fn(ParseNode $n) => $o->setRetention($n->getStringValue()),
        ];
    }

    /**
     * Gets the retention property value. The retention property
     * @return string|null
    */
    public function getRetention(): ?string {
        return $this->retention;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('availability', $this->getAvailability());
        $writer->writeCollectionOfObjectValues('facts', $this->getFacts());
        $writer->writeStringValue('retention', $this->getRetention());
    }

    /**
     * Sets the availability property value. The availability property
     * @param string|null $value Value to set for the availability property.
    */
    public function setAvailability(?string $value): void {
        $this->availability = $value;
    }

    /**
     * Sets the facts property value. The facts property
     * @param array<PartnerRuntimeMemoryFact>|null $value Value to set for the facts property.
    */
    public function setFacts(?array $value): void {
        $this->facts = $value;
    }

    /**
     * Sets the retention property value. The retention property
     * @param string|null $value Value to set for the retention property.
    */
    public function setRetention(?string $value): void {
        $this->retention = $value;
    }

}
