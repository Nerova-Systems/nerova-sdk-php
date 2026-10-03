<?php

namespace Nerova\Sdk\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class BillableJobUsageResponse implements Parsable 
{
    /**
     * @var int|null $adjustmentCount The adjustmentCount property
    */
    private ?int $adjustmentCount = null;
    
    /**
     * @var int|null $adjustmentDelta The adjustmentDelta property
    */
    private ?int $adjustmentDelta = null;
    
    /**
     * @var int|null $allowanceConsumed The allowanceConsumed property
    */
    private ?int $allowanceConsumed = null;
    
    /**
     * @var DateTime|null $asOf The asOf property
    */
    private ?DateTime $asOf = null;
    
    /**
     * @var BillableJobMeterAvailability|null $availability The availability property
    */
    private ?BillableJobMeterAvailability $availability = null;
    
    /**
     * @var int|null $consumedBillableJobs The consumedBillableJobs property
    */
    private ?int $consumedBillableJobs = null;
    
    /**
     * @var int|null $directBillableJobs The directBillableJobs property
    */
    private ?int $directBillableJobs = null;
    
    /**
     * @var int|null $includedAllowance The includedAllowance property
    */
    private ?int $includedAllowance = null;
    
    /**
     * @var string|null $meterVersion The meterVersion property
    */
    private ?string $meterVersion = null;
    
    /**
     * @var int|null $overageCount The overageCount property
    */
    private ?int $overageCount = null;
    
    /**
     * @var string|null $partnerOrganizationId The partnerOrganizationId property
    */
    private ?string $partnerOrganizationId = null;
    
    /**
     * @var int|null $pendingReconciliationCount The pendingReconciliationCount property
    */
    private ?int $pendingReconciliationCount = null;
    
    /**
     * @var DateTime|null $periodEnd The periodEnd property
    */
    private ?DateTime $periodEnd = null;
    
    /**
     * @var DateTime|null $periodStart The periodStart property
    */
    private ?DateTime $periodStart = null;
    
    /**
     * @var string|null $reason The reason property
    */
    private ?string $reason = null;
    
    /**
     * @var int|null $remainingAllowance The remainingAllowance property
    */
    private ?int $remainingAllowance = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return BillableJobUsageResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): BillableJobUsageResponse {
        return new BillableJobUsageResponse();
    }

    /**
     * Gets the adjustmentCount property value. The adjustmentCount property
     * @return int|null
    */
    public function getAdjustmentCount(): ?int {
        return $this->adjustmentCount;
    }

    /**
     * Gets the adjustmentDelta property value. The adjustmentDelta property
     * @return int|null
    */
    public function getAdjustmentDelta(): ?int {
        return $this->adjustmentDelta;
    }

    /**
     * Gets the allowanceConsumed property value. The allowanceConsumed property
     * @return int|null
    */
    public function getAllowanceConsumed(): ?int {
        return $this->allowanceConsumed;
    }

    /**
     * Gets the asOf property value. The asOf property
     * @return DateTime|null
    */
    public function getAsOf(): ?DateTime {
        return $this->asOf;
    }

    /**
     * Gets the availability property value. The availability property
     * @return BillableJobMeterAvailability|null
    */
    public function getAvailability(): ?BillableJobMeterAvailability {
        return $this->availability;
    }

    /**
     * Gets the consumedBillableJobs property value. The consumedBillableJobs property
     * @return int|null
    */
    public function getConsumedBillableJobs(): ?int {
        return $this->consumedBillableJobs;
    }

    /**
     * Gets the directBillableJobs property value. The directBillableJobs property
     * @return int|null
    */
    public function getDirectBillableJobs(): ?int {
        return $this->directBillableJobs;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'adjustmentCount' => fn(ParseNode $n) => $o->setAdjustmentCount($n->getIntegerValue()),
            'adjustmentDelta' => fn(ParseNode $n) => $o->setAdjustmentDelta($n->getIntegerValue()),
            'allowanceConsumed' => fn(ParseNode $n) => $o->setAllowanceConsumed($n->getIntegerValue()),
            'asOf' => fn(ParseNode $n) => $o->setAsOf($n->getDateTimeValue()),
            'availability' => fn(ParseNode $n) => $o->setAvailability($n->getEnumValue(BillableJobMeterAvailability::class)),
            'consumedBillableJobs' => fn(ParseNode $n) => $o->setConsumedBillableJobs($n->getIntegerValue()),
            'directBillableJobs' => fn(ParseNode $n) => $o->setDirectBillableJobs($n->getIntegerValue()),
            'includedAllowance' => fn(ParseNode $n) => $o->setIncludedAllowance($n->getIntegerValue()),
            'meterVersion' => fn(ParseNode $n) => $o->setMeterVersion($n->getStringValue()),
            'overageCount' => fn(ParseNode $n) => $o->setOverageCount($n->getIntegerValue()),
            'partnerOrganizationId' => fn(ParseNode $n) => $o->setPartnerOrganizationId($n->getStringValue()),
            'pendingReconciliationCount' => fn(ParseNode $n) => $o->setPendingReconciliationCount($n->getIntegerValue()),
            'periodEnd' => fn(ParseNode $n) => $o->setPeriodEnd($n->getDateTimeValue()),
            'periodStart' => fn(ParseNode $n) => $o->setPeriodStart($n->getDateTimeValue()),
            'reason' => fn(ParseNode $n) => $o->setReason($n->getStringValue()),
            'remainingAllowance' => fn(ParseNode $n) => $o->setRemainingAllowance($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the includedAllowance property value. The includedAllowance property
     * @return int|null
    */
    public function getIncludedAllowance(): ?int {
        return $this->includedAllowance;
    }

    /**
     * Gets the meterVersion property value. The meterVersion property
     * @return string|null
    */
    public function getMeterVersion(): ?string {
        return $this->meterVersion;
    }

    /**
     * Gets the overageCount property value. The overageCount property
     * @return int|null
    */
    public function getOverageCount(): ?int {
        return $this->overageCount;
    }

    /**
     * Gets the partnerOrganizationId property value. The partnerOrganizationId property
     * @return string|null
    */
    public function getPartnerOrganizationId(): ?string {
        return $this->partnerOrganizationId;
    }

    /**
     * Gets the pendingReconciliationCount property value. The pendingReconciliationCount property
     * @return int|null
    */
    public function getPendingReconciliationCount(): ?int {
        return $this->pendingReconciliationCount;
    }

    /**
     * Gets the periodEnd property value. The periodEnd property
     * @return DateTime|null
    */
    public function getPeriodEnd(): ?DateTime {
        return $this->periodEnd;
    }

    /**
     * Gets the periodStart property value. The periodStart property
     * @return DateTime|null
    */
    public function getPeriodStart(): ?DateTime {
        return $this->periodStart;
    }

    /**
     * Gets the reason property value. The reason property
     * @return string|null
    */
    public function getReason(): ?string {
        return $this->reason;
    }

    /**
     * Gets the remainingAllowance property value. The remainingAllowance property
     * @return int|null
    */
    public function getRemainingAllowance(): ?int {
        return $this->remainingAllowance;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('adjustmentCount', $this->getAdjustmentCount());
        $writer->writeIntegerValue('adjustmentDelta', $this->getAdjustmentDelta());
        $writer->writeIntegerValue('allowanceConsumed', $this->getAllowanceConsumed());
        $writer->writeDateTimeValue('asOf', $this->getAsOf());
        $writer->writeEnumValue('availability', $this->getAvailability());
        $writer->writeIntegerValue('consumedBillableJobs', $this->getConsumedBillableJobs());
        $writer->writeIntegerValue('directBillableJobs', $this->getDirectBillableJobs());
        $writer->writeIntegerValue('includedAllowance', $this->getIncludedAllowance());
        $writer->writeStringValue('meterVersion', $this->getMeterVersion());
        $writer->writeIntegerValue('overageCount', $this->getOverageCount());
        $writer->writeStringValue('partnerOrganizationId', $this->getPartnerOrganizationId());
        $writer->writeIntegerValue('pendingReconciliationCount', $this->getPendingReconciliationCount());
        $writer->writeDateTimeValue('periodEnd', $this->getPeriodEnd());
        $writer->writeDateTimeValue('periodStart', $this->getPeriodStart());
        $writer->writeStringValue('reason', $this->getReason());
        $writer->writeIntegerValue('remainingAllowance', $this->getRemainingAllowance());
    }

    /**
     * Sets the adjustmentCount property value. The adjustmentCount property
     * @param int|null $value Value to set for the adjustmentCount property.
    */
    public function setAdjustmentCount(?int $value): void {
        $this->adjustmentCount = $value;
    }

    /**
     * Sets the adjustmentDelta property value. The adjustmentDelta property
     * @param int|null $value Value to set for the adjustmentDelta property.
    */
    public function setAdjustmentDelta(?int $value): void {
        $this->adjustmentDelta = $value;
    }

    /**
     * Sets the allowanceConsumed property value. The allowanceConsumed property
     * @param int|null $value Value to set for the allowanceConsumed property.
    */
    public function setAllowanceConsumed(?int $value): void {
        $this->allowanceConsumed = $value;
    }

    /**
     * Sets the asOf property value. The asOf property
     * @param DateTime|null $value Value to set for the asOf property.
    */
    public function setAsOf(?DateTime $value): void {
        $this->asOf = $value;
    }

    /**
     * Sets the availability property value. The availability property
     * @param BillableJobMeterAvailability|null $value Value to set for the availability property.
    */
    public function setAvailability(?BillableJobMeterAvailability $value): void {
        $this->availability = $value;
    }

    /**
     * Sets the consumedBillableJobs property value. The consumedBillableJobs property
     * @param int|null $value Value to set for the consumedBillableJobs property.
    */
    public function setConsumedBillableJobs(?int $value): void {
        $this->consumedBillableJobs = $value;
    }

    /**
     * Sets the directBillableJobs property value. The directBillableJobs property
     * @param int|null $value Value to set for the directBillableJobs property.
    */
    public function setDirectBillableJobs(?int $value): void {
        $this->directBillableJobs = $value;
    }

    /**
     * Sets the includedAllowance property value. The includedAllowance property
     * @param int|null $value Value to set for the includedAllowance property.
    */
    public function setIncludedAllowance(?int $value): void {
        $this->includedAllowance = $value;
    }

    /**
     * Sets the meterVersion property value. The meterVersion property
     * @param string|null $value Value to set for the meterVersion property.
    */
    public function setMeterVersion(?string $value): void {
        $this->meterVersion = $value;
    }

    /**
     * Sets the overageCount property value. The overageCount property
     * @param int|null $value Value to set for the overageCount property.
    */
    public function setOverageCount(?int $value): void {
        $this->overageCount = $value;
    }

    /**
     * Sets the partnerOrganizationId property value. The partnerOrganizationId property
     * @param string|null $value Value to set for the partnerOrganizationId property.
    */
    public function setPartnerOrganizationId(?string $value): void {
        $this->partnerOrganizationId = $value;
    }

    /**
     * Sets the pendingReconciliationCount property value. The pendingReconciliationCount property
     * @param int|null $value Value to set for the pendingReconciliationCount property.
    */
    public function setPendingReconciliationCount(?int $value): void {
        $this->pendingReconciliationCount = $value;
    }

    /**
     * Sets the periodEnd property value. The periodEnd property
     * @param DateTime|null $value Value to set for the periodEnd property.
    */
    public function setPeriodEnd(?DateTime $value): void {
        $this->periodEnd = $value;
    }

    /**
     * Sets the periodStart property value. The periodStart property
     * @param DateTime|null $value Value to set for the periodStart property.
    */
    public function setPeriodStart(?DateTime $value): void {
        $this->periodStart = $value;
    }

    /**
     * Sets the reason property value. The reason property
     * @param string|null $value Value to set for the reason property.
    */
    public function setReason(?string $value): void {
        $this->reason = $value;
    }

    /**
     * Sets the remainingAllowance property value. The remainingAllowance property
     * @param int|null $value Value to set for the remainingAllowance property.
    */
    public function setRemainingAllowance(?int $value): void {
        $this->remainingAllowance = $value;
    }

}
