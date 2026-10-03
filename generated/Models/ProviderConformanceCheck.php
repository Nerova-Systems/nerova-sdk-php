<?php

namespace Nerova\Sdk\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ProviderConformanceCheck implements Parsable 
{
    /**
     * @var ExternalBookingCapability|null $capability The capability property
    */
    private ?ExternalBookingCapability $capability = null;
    
    /**
     * @var string|null $detail The detail property
    */
    private ?string $detail = null;
    
    /**
     * @var string|null $id The id property
    */
    private ?string $id = null;
    
    /**
     * @var ProviderConformanceCheckStatus|null $status The status property
    */
    private ?ProviderConformanceCheckStatus $status = null;
    
    /**
     * @var string|null $title The title property
    */
    private ?string $title = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ProviderConformanceCheck
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ProviderConformanceCheck {
        return new ProviderConformanceCheck();
    }

    /**
     * Gets the capability property value. The capability property
     * @return ExternalBookingCapability|null
    */
    public function getCapability(): ?ExternalBookingCapability {
        return $this->capability;
    }

    /**
     * Gets the detail property value. The detail property
     * @return string|null
    */
    public function getDetail(): ?string {
        return $this->detail;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'capability' => fn(ParseNode $n) => $o->setCapability($n->getEnumValue(ExternalBookingCapability::class)),
            'detail' => fn(ParseNode $n) => $o->setDetail($n->getStringValue()),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(ProviderConformanceCheckStatus::class)),
            'title' => fn(ParseNode $n) => $o->setTitle($n->getStringValue()),
        ];
    }

    /**
     * Gets the id property value. The id property
     * @return string|null
    */
    public function getId(): ?string {
        return $this->id;
    }

    /**
     * Gets the status property value. The status property
     * @return ProviderConformanceCheckStatus|null
    */
    public function getStatus(): ?ProviderConformanceCheckStatus {
        return $this->status;
    }

    /**
     * Gets the title property value. The title property
     * @return string|null
    */
    public function getTitle(): ?string {
        return $this->title;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('capability', $this->getCapability());
        $writer->writeStringValue('detail', $this->getDetail());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeEnumValue('status', $this->getStatus());
        $writer->writeStringValue('title', $this->getTitle());
    }

    /**
     * Sets the capability property value. The capability property
     * @param ExternalBookingCapability|null $value Value to set for the capability property.
    */
    public function setCapability(?ExternalBookingCapability $value): void {
        $this->capability = $value;
    }

    /**
     * Sets the detail property value. The detail property
     * @param string|null $value Value to set for the detail property.
    */
    public function setDetail(?string $value): void {
        $this->detail = $value;
    }

    /**
     * Sets the id property value. The id property
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->id = $value;
    }

    /**
     * Sets the status property value. The status property
     * @param ProviderConformanceCheckStatus|null $value Value to set for the status property.
    */
    public function setStatus(?ProviderConformanceCheckStatus $value): void {
        $this->status = $value;
    }

    /**
     * Sets the title property value. The title property
     * @param string|null $value Value to set for the title property.
    */
    public function setTitle(?string $value): void {
        $this->title = $value;
    }

}
