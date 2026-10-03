<?php

namespace Nerova\Sdk\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TenantV1ConnectionProbeResult implements Parsable 
{
    /**
     * @var string|null $errorCode The errorCode property
    */
    private ?string $errorCode = null;
    
    /**
     * @var int|null $latencyMilliseconds The latencyMilliseconds property
    */
    private ?int $latencyMilliseconds = null;
    
    /**
     * @var DateTime|null $observedAt The observedAt property
    */
    private ?DateTime $observedAt = null;
    
    /**
     * @var bool|null $recorded The recorded property
    */
    private ?bool $recorded = null;
    
    /**
     * @var int|null $serviceCount The serviceCount property
    */
    private ?int $serviceCount = null;
    
    /**
     * @var int|null $staffCount The staffCount property
    */
    private ?int $staffCount = null;
    
    /**
     * @var bool|null $succeeded The succeeded property
    */
    private ?bool $succeeded = null;
    
    /**
     * @var string|null $unrecordedReason The unrecordedReason property
    */
    private ?string $unrecordedReason = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TenantV1ConnectionProbeResult
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TenantV1ConnectionProbeResult {
        return new TenantV1ConnectionProbeResult();
    }

    /**
     * Gets the errorCode property value. The errorCode property
     * @return string|null
    */
    public function getErrorCode(): ?string {
        return $this->errorCode;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'errorCode' => fn(ParseNode $n) => $o->setErrorCode($n->getStringValue()),
            'latencyMilliseconds' => fn(ParseNode $n) => $o->setLatencyMilliseconds($n->getIntegerValue()),
            'observedAt' => fn(ParseNode $n) => $o->setObservedAt($n->getDateTimeValue()),
            'recorded' => fn(ParseNode $n) => $o->setRecorded($n->getBooleanValue()),
            'serviceCount' => fn(ParseNode $n) => $o->setServiceCount($n->getIntegerValue()),
            'staffCount' => fn(ParseNode $n) => $o->setStaffCount($n->getIntegerValue()),
            'succeeded' => fn(ParseNode $n) => $o->setSucceeded($n->getBooleanValue()),
            'unrecordedReason' => fn(ParseNode $n) => $o->setUnrecordedReason($n->getStringValue()),
        ];
    }

    /**
     * Gets the latencyMilliseconds property value. The latencyMilliseconds property
     * @return int|null
    */
    public function getLatencyMilliseconds(): ?int {
        return $this->latencyMilliseconds;
    }

    /**
     * Gets the observedAt property value. The observedAt property
     * @return DateTime|null
    */
    public function getObservedAt(): ?DateTime {
        return $this->observedAt;
    }

    /**
     * Gets the recorded property value. The recorded property
     * @return bool|null
    */
    public function getRecorded(): ?bool {
        return $this->recorded;
    }

    /**
     * Gets the serviceCount property value. The serviceCount property
     * @return int|null
    */
    public function getServiceCount(): ?int {
        return $this->serviceCount;
    }

    /**
     * Gets the staffCount property value. The staffCount property
     * @return int|null
    */
    public function getStaffCount(): ?int {
        return $this->staffCount;
    }

    /**
     * Gets the succeeded property value. The succeeded property
     * @return bool|null
    */
    public function getSucceeded(): ?bool {
        return $this->succeeded;
    }

    /**
     * Gets the unrecordedReason property value. The unrecordedReason property
     * @return string|null
    */
    public function getUnrecordedReason(): ?string {
        return $this->unrecordedReason;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('errorCode', $this->getErrorCode());
        $writer->writeIntegerValue('latencyMilliseconds', $this->getLatencyMilliseconds());
        $writer->writeDateTimeValue('observedAt', $this->getObservedAt());
        $writer->writeBooleanValue('recorded', $this->getRecorded());
        $writer->writeIntegerValue('serviceCount', $this->getServiceCount());
        $writer->writeIntegerValue('staffCount', $this->getStaffCount());
        $writer->writeBooleanValue('succeeded', $this->getSucceeded());
        $writer->writeStringValue('unrecordedReason', $this->getUnrecordedReason());
    }

    /**
     * Sets the errorCode property value. The errorCode property
     * @param string|null $value Value to set for the errorCode property.
    */
    public function setErrorCode(?string $value): void {
        $this->errorCode = $value;
    }

    /**
     * Sets the latencyMilliseconds property value. The latencyMilliseconds property
     * @param int|null $value Value to set for the latencyMilliseconds property.
    */
    public function setLatencyMilliseconds(?int $value): void {
        $this->latencyMilliseconds = $value;
    }

    /**
     * Sets the observedAt property value. The observedAt property
     * @param DateTime|null $value Value to set for the observedAt property.
    */
    public function setObservedAt(?DateTime $value): void {
        $this->observedAt = $value;
    }

    /**
     * Sets the recorded property value. The recorded property
     * @param bool|null $value Value to set for the recorded property.
    */
    public function setRecorded(?bool $value): void {
        $this->recorded = $value;
    }

    /**
     * Sets the serviceCount property value. The serviceCount property
     * @param int|null $value Value to set for the serviceCount property.
    */
    public function setServiceCount(?int $value): void {
        $this->serviceCount = $value;
    }

    /**
     * Sets the staffCount property value. The staffCount property
     * @param int|null $value Value to set for the staffCount property.
    */
    public function setStaffCount(?int $value): void {
        $this->staffCount = $value;
    }

    /**
     * Sets the succeeded property value. The succeeded property
     * @param bool|null $value Value to set for the succeeded property.
    */
    public function setSucceeded(?bool $value): void {
        $this->succeeded = $value;
    }

    /**
     * Sets the unrecordedReason property value. The unrecordedReason property
     * @param string|null $value Value to set for the unrecordedReason property.
    */
    public function setUnrecordedReason(?string $value): void {
        $this->unrecordedReason = $value;
    }

}
