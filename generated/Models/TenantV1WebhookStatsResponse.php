<?php

namespace Nerova\Sdk\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TenantV1WebhookStatsResponse implements Parsable 
{
    /**
     * @var int|null $activeEndpoints The activeEndpoints property
    */
    private ?int $activeEndpoints = null;
    
    /**
     * @var int|null $deliveries24H The deliveries24H property
    */
    private ?int $deliveries24H = null;
    
    /**
     * @var float|null $firstAttemptSuccessRate The firstAttemptSuccessRate property
    */
    private ?float $firstAttemptSuccessRate = null;
    
    /**
     * @var int|null $medianDurationMs The medianDurationMs property
    */
    private ?int $medianDurationMs = null;
    
    /**
     * @var int|null $oldestRetainedEventAgeDays The oldestRetainedEventAgeDays property
    */
    private ?int $oldestRetainedEventAgeDays = null;
    
    /**
     * @var int|null $pausedEndpoints The pausedEndpoints property
    */
    private ?int $pausedEndpoints = null;
    
    /**
     * @var int|null $retentionDays The retentionDays property
    */
    private ?int $retentionDays = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TenantV1WebhookStatsResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TenantV1WebhookStatsResponse {
        return new TenantV1WebhookStatsResponse();
    }

    /**
     * Gets the activeEndpoints property value. The activeEndpoints property
     * @return int|null
    */
    public function getActiveEndpoints(): ?int {
        return $this->activeEndpoints;
    }

    /**
     * Gets the deliveries24H property value. The deliveries24H property
     * @return int|null
    */
    public function getDeliveries24H(): ?int {
        return $this->deliveries24H;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'activeEndpoints' => fn(ParseNode $n) => $o->setActiveEndpoints($n->getIntegerValue()),
            'deliveries24H' => fn(ParseNode $n) => $o->setDeliveries24H($n->getIntegerValue()),
            'firstAttemptSuccessRate' => fn(ParseNode $n) => $o->setFirstAttemptSuccessRate($n->getFloatValue()),
            'medianDurationMs' => fn(ParseNode $n) => $o->setMedianDurationMs($n->getIntegerValue()),
            'oldestRetainedEventAgeDays' => fn(ParseNode $n) => $o->setOldestRetainedEventAgeDays($n->getIntegerValue()),
            'pausedEndpoints' => fn(ParseNode $n) => $o->setPausedEndpoints($n->getIntegerValue()),
            'retentionDays' => fn(ParseNode $n) => $o->setRetentionDays($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the firstAttemptSuccessRate property value. The firstAttemptSuccessRate property
     * @return float|null
    */
    public function getFirstAttemptSuccessRate(): ?float {
        return $this->firstAttemptSuccessRate;
    }

    /**
     * Gets the medianDurationMs property value. The medianDurationMs property
     * @return int|null
    */
    public function getMedianDurationMs(): ?int {
        return $this->medianDurationMs;
    }

    /**
     * Gets the oldestRetainedEventAgeDays property value. The oldestRetainedEventAgeDays property
     * @return int|null
    */
    public function getOldestRetainedEventAgeDays(): ?int {
        return $this->oldestRetainedEventAgeDays;
    }

    /**
     * Gets the pausedEndpoints property value. The pausedEndpoints property
     * @return int|null
    */
    public function getPausedEndpoints(): ?int {
        return $this->pausedEndpoints;
    }

    /**
     * Gets the retentionDays property value. The retentionDays property
     * @return int|null
    */
    public function getRetentionDays(): ?int {
        return $this->retentionDays;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('activeEndpoints', $this->getActiveEndpoints());
        $writer->writeIntegerValue('deliveries24H', $this->getDeliveries24H());
        $writer->writeFloatValue('firstAttemptSuccessRate', $this->getFirstAttemptSuccessRate());
        $writer->writeIntegerValue('medianDurationMs', $this->getMedianDurationMs());
        $writer->writeIntegerValue('oldestRetainedEventAgeDays', $this->getOldestRetainedEventAgeDays());
        $writer->writeIntegerValue('pausedEndpoints', $this->getPausedEndpoints());
        $writer->writeIntegerValue('retentionDays', $this->getRetentionDays());
    }

    /**
     * Sets the activeEndpoints property value. The activeEndpoints property
     * @param int|null $value Value to set for the activeEndpoints property.
    */
    public function setActiveEndpoints(?int $value): void {
        $this->activeEndpoints = $value;
    }

    /**
     * Sets the deliveries24H property value. The deliveries24H property
     * @param int|null $value Value to set for the deliveries24H property.
    */
    public function setDeliveries24H(?int $value): void {
        $this->deliveries24H = $value;
    }

    /**
     * Sets the firstAttemptSuccessRate property value. The firstAttemptSuccessRate property
     * @param float|null $value Value to set for the firstAttemptSuccessRate property.
    */
    public function setFirstAttemptSuccessRate(?float $value): void {
        $this->firstAttemptSuccessRate = $value;
    }

    /**
     * Sets the medianDurationMs property value. The medianDurationMs property
     * @param int|null $value Value to set for the medianDurationMs property.
    */
    public function setMedianDurationMs(?int $value): void {
        $this->medianDurationMs = $value;
    }

    /**
     * Sets the oldestRetainedEventAgeDays property value. The oldestRetainedEventAgeDays property
     * @param int|null $value Value to set for the oldestRetainedEventAgeDays property.
    */
    public function setOldestRetainedEventAgeDays(?int $value): void {
        $this->oldestRetainedEventAgeDays = $value;
    }

    /**
     * Sets the pausedEndpoints property value. The pausedEndpoints property
     * @param int|null $value Value to set for the pausedEndpoints property.
    */
    public function setPausedEndpoints(?int $value): void {
        $this->pausedEndpoints = $value;
    }

    /**
     * Sets the retentionDays property value. The retentionDays property
     * @param int|null $value Value to set for the retentionDays property.
    */
    public function setRetentionDays(?int $value): void {
        $this->retentionDays = $value;
    }

}
