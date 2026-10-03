<?php

namespace Nerova\Sdk\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PartnerRuntimePerformanceMetric implements Parsable 
{
    /**
     * @var int|null $evidenceCount The evidenceCount property
    */
    private ?int $evidenceCount = null;
    
    /**
     * @var string|null $evidenceSource The evidenceSource property
    */
    private ?string $evidenceSource = null;
    
    /**
     * @var string|null $name The name property
    */
    private ?string $name = null;
    
    /**
     * @var string|null $unit The unit property
    */
    private ?string $unit = null;
    
    /**
     * @var string|null $value The value property
    */
    private ?string $value = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PartnerRuntimePerformanceMetric
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PartnerRuntimePerformanceMetric {
        return new PartnerRuntimePerformanceMetric();
    }

    /**
     * Gets the evidenceCount property value. The evidenceCount property
     * @return int|null
    */
    public function getEvidenceCount(): ?int {
        return $this->evidenceCount;
    }

    /**
     * Gets the evidenceSource property value. The evidenceSource property
     * @return string|null
    */
    public function getEvidenceSource(): ?string {
        return $this->evidenceSource;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'evidenceCount' => fn(ParseNode $n) => $o->setEvidenceCount($n->getIntegerValue()),
            'evidenceSource' => fn(ParseNode $n) => $o->setEvidenceSource($n->getStringValue()),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'unit' => fn(ParseNode $n) => $o->setUnit($n->getStringValue()),
            'value' => fn(ParseNode $n) => $o->setValue($n->getStringValue()),
        ];
    }

    /**
     * Gets the name property value. The name property
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Gets the unit property value. The unit property
     * @return string|null
    */
    public function getUnit(): ?string {
        return $this->unit;
    }

    /**
     * Gets the value property value. The value property
     * @return string|null
    */
    public function getValue(): ?string {
        return $this->value;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('evidenceCount', $this->getEvidenceCount());
        $writer->writeStringValue('evidenceSource', $this->getEvidenceSource());
        $writer->writeStringValue('name', $this->getName());
        $writer->writeStringValue('unit', $this->getUnit());
        $writer->writeStringValue('value', $this->getValue());
    }

    /**
     * Sets the evidenceCount property value. The evidenceCount property
     * @param int|null $value Value to set for the evidenceCount property.
    */
    public function setEvidenceCount(?int $value): void {
        $this->evidenceCount = $value;
    }

    /**
     * Sets the evidenceSource property value. The evidenceSource property
     * @param string|null $value Value to set for the evidenceSource property.
    */
    public function setEvidenceSource(?string $value): void {
        $this->evidenceSource = $value;
    }

    /**
     * Sets the name property value. The name property
     * @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->name = $value;
    }

    /**
     * Sets the unit property value. The unit property
     * @param string|null $value Value to set for the unit property.
    */
    public function setUnit(?string $value): void {
        $this->unit = $value;
    }

    /**
     * Sets the value property value. The value property
     * @param string|null $value Value to set for the value property.
    */
    public function setValue(?string $value): void {
        $this->value = $value;
    }

}
