<?php

namespace Nerova\Sdk\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class PartnerRuntimePerformanceResponse implements Parsable 
{
    /**
     * @var string|null $availability The availability property
    */
    private ?string $availability = null;
    
    /**
     * @var DateTime|null $from The from property
    */
    private ?DateTime $from = null;
    
    /**
     * @var array<PartnerRuntimePerformanceMetric>|null $metrics The metrics property
    */
    private ?array $metrics = null;
    
    /**
     * @var DateTime|null $to The to property
    */
    private ?DateTime $to = null;
    
    /**
     * @var array<string>|null $unavailableReasons The unavailableReasons property
    */
    private ?array $unavailableReasons = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PartnerRuntimePerformanceResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PartnerRuntimePerformanceResponse {
        return new PartnerRuntimePerformanceResponse();
    }

    /**
     * Gets the availability property value. The availability property
     * @return string|null
    */
    public function getAvailability(): ?string {
        return $this->availability;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'availability' => fn(ParseNode $n) => $o->setAvailability($n->getStringValue()),
            'from' => fn(ParseNode $n) => $o->setFrom($n->getDateTimeValue()),
            'metrics' => fn(ParseNode $n) => $o->setMetrics($n->getCollectionOfObjectValues([PartnerRuntimePerformanceMetric::class, 'createFromDiscriminatorValue'])),
            'to' => fn(ParseNode $n) => $o->setTo($n->getDateTimeValue()),
            'unavailableReasons' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setUnavailableReasons($val);
            },
        ];
    }

    /**
     * Gets the from property value. The from property
     * @return DateTime|null
    */
    public function getFrom(): ?DateTime {
        return $this->from;
    }

    /**
     * Gets the metrics property value. The metrics property
     * @return array<PartnerRuntimePerformanceMetric>|null
    */
    public function getMetrics(): ?array {
        return $this->metrics;
    }

    /**
     * Gets the to property value. The to property
     * @return DateTime|null
    */
    public function getTo(): ?DateTime {
        return $this->to;
    }

    /**
     * Gets the unavailableReasons property value. The unavailableReasons property
     * @return array<string>|null
    */
    public function getUnavailableReasons(): ?array {
        return $this->unavailableReasons;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('availability', $this->getAvailability());
        $writer->writeDateTimeValue('from', $this->getFrom());
        $writer->writeCollectionOfObjectValues('metrics', $this->getMetrics());
        $writer->writeDateTimeValue('to', $this->getTo());
        $writer->writeCollectionOfPrimitiveValues('unavailableReasons', $this->getUnavailableReasons());
    }

    /**
     * Sets the availability property value. The availability property
     * @param string|null $value Value to set for the availability property.
    */
    public function setAvailability(?string $value): void {
        $this->availability = $value;
    }

    /**
     * Sets the from property value. The from property
     * @param DateTime|null $value Value to set for the from property.
    */
    public function setFrom(?DateTime $value): void {
        $this->from = $value;
    }

    /**
     * Sets the metrics property value. The metrics property
     * @param array<PartnerRuntimePerformanceMetric>|null $value Value to set for the metrics property.
    */
    public function setMetrics(?array $value): void {
        $this->metrics = $value;
    }

    /**
     * Sets the to property value. The to property
     * @param DateTime|null $value Value to set for the to property.
    */
    public function setTo(?DateTime $value): void {
        $this->to = $value;
    }

    /**
     * Sets the unavailableReasons property value. The unavailableReasons property
     * @param array<string>|null $value Value to set for the unavailableReasons property.
    */
    public function setUnavailableReasons(?array $value): void {
        $this->unavailableReasons = $value;
    }

}
