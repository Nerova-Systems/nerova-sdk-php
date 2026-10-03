<?php

namespace Nerova\Sdk\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PartnerRuntimeNativeBookingEvidence implements Parsable 
{
    /**
     * @var string|null $availability The availability property
    */
    private ?string $availability = null;
    
    /**
     * @var PartnerRuntimeHostReference|null $bookingReference The bookingReference property
    */
    private ?PartnerRuntimeHostReference $bookingReference = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PartnerRuntimeNativeBookingEvidence
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PartnerRuntimeNativeBookingEvidence {
        return new PartnerRuntimeNativeBookingEvidence();
    }

    /**
     * Gets the availability property value. The availability property
     * @return string|null
    */
    public function getAvailability(): ?string {
        return $this->availability;
    }

    /**
     * Gets the bookingReference property value. The bookingReference property
     * @return PartnerRuntimeHostReference|null
    */
    public function getBookingReference(): ?PartnerRuntimeHostReference {
        return $this->bookingReference;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'availability' => fn(ParseNode $n) => $o->setAvailability($n->getStringValue()),
            'bookingReference' => fn(ParseNode $n) => $o->setBookingReference($n->getObjectValue([PartnerRuntimeHostReference::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('availability', $this->getAvailability());
        $writer->writeObjectValue('bookingReference', $this->getBookingReference());
    }

    /**
     * Sets the availability property value. The availability property
     * @param string|null $value Value to set for the availability property.
    */
    public function setAvailability(?string $value): void {
        $this->availability = $value;
    }

    /**
     * Sets the bookingReference property value. The bookingReference property
     * @param PartnerRuntimeHostReference|null $value Value to set for the bookingReference property.
    */
    public function setBookingReference(?PartnerRuntimeHostReference $value): void {
        $this->bookingReference = $value;
    }

}
