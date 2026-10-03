<?php

namespace Nerova\Sdk\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TenantUsageSummaryResponse implements Parsable 
{
    /**
     * @var DateTime|null $asOf The asOf property
    */
    private ?DateTime $asOf = null;
    
    /**
     * @var int|null $bookingCount The bookingCount property
    */
    private ?int $bookingCount = null;
    
    /**
     * @var int|null $bookingsCancelled The bookingsCancelled property
    */
    private ?int $bookingsCancelled = null;
    
    /**
     * @var int|null $conversationCount The conversationCount property
    */
    private ?int $conversationCount = null;
    
    /**
     * @var int|null $inputTokens The inputTokens property
    */
    private ?int $inputTokens = null;
    
    /**
     * @var string|null $meterVersion The meterVersion property
    */
    private ?string $meterVersion = null;
    
    /**
     * @var int|null $outputTokens The outputTokens property
    */
    private ?int $outputTokens = null;
    
    /**
     * @var DateTime|null $periodEnd The periodEnd property
    */
    private ?DateTime $periodEnd = null;
    
    /**
     * @var DateTime|null $periodStart The periodStart property
    */
    private ?DateTime $periodStart = null;
    
    /**
     * @var int|null $totalTokens The totalTokens property
    */
    private ?int $totalTokens = null;
    
    /**
     * @var int|null $voiceSeconds The voiceSeconds property
    */
    private ?int $voiceSeconds = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TenantUsageSummaryResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TenantUsageSummaryResponse {
        return new TenantUsageSummaryResponse();
    }

    /**
     * Gets the asOf property value. The asOf property
     * @return DateTime|null
    */
    public function getAsOf(): ?DateTime {
        return $this->asOf;
    }

    /**
     * Gets the bookingCount property value. The bookingCount property
     * @return int|null
    */
    public function getBookingCount(): ?int {
        return $this->bookingCount;
    }

    /**
     * Gets the bookingsCancelled property value. The bookingsCancelled property
     * @return int|null
    */
    public function getBookingsCancelled(): ?int {
        return $this->bookingsCancelled;
    }

    /**
     * Gets the conversationCount property value. The conversationCount property
     * @return int|null
    */
    public function getConversationCount(): ?int {
        return $this->conversationCount;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'asOf' => fn(ParseNode $n) => $o->setAsOf($n->getDateTimeValue()),
            'bookingCount' => fn(ParseNode $n) => $o->setBookingCount($n->getIntegerValue()),
            'bookingsCancelled' => fn(ParseNode $n) => $o->setBookingsCancelled($n->getIntegerValue()),
            'conversationCount' => fn(ParseNode $n) => $o->setConversationCount($n->getIntegerValue()),
            'inputTokens' => fn(ParseNode $n) => $o->setInputTokens($n->getIntegerValue()),
            'meterVersion' => fn(ParseNode $n) => $o->setMeterVersion($n->getStringValue()),
            'outputTokens' => fn(ParseNode $n) => $o->setOutputTokens($n->getIntegerValue()),
            'periodEnd' => fn(ParseNode $n) => $o->setPeriodEnd($n->getDateTimeValue()),
            'periodStart' => fn(ParseNode $n) => $o->setPeriodStart($n->getDateTimeValue()),
            'totalTokens' => fn(ParseNode $n) => $o->setTotalTokens($n->getIntegerValue()),
            'voiceSeconds' => fn(ParseNode $n) => $o->setVoiceSeconds($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the inputTokens property value. The inputTokens property
     * @return int|null
    */
    public function getInputTokens(): ?int {
        return $this->inputTokens;
    }

    /**
     * Gets the meterVersion property value. The meterVersion property
     * @return string|null
    */
    public function getMeterVersion(): ?string {
        return $this->meterVersion;
    }

    /**
     * Gets the outputTokens property value. The outputTokens property
     * @return int|null
    */
    public function getOutputTokens(): ?int {
        return $this->outputTokens;
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
     * Gets the totalTokens property value. The totalTokens property
     * @return int|null
    */
    public function getTotalTokens(): ?int {
        return $this->totalTokens;
    }

    /**
     * Gets the voiceSeconds property value. The voiceSeconds property
     * @return int|null
    */
    public function getVoiceSeconds(): ?int {
        return $this->voiceSeconds;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeDateTimeValue('asOf', $this->getAsOf());
        $writer->writeIntegerValue('bookingCount', $this->getBookingCount());
        $writer->writeIntegerValue('bookingsCancelled', $this->getBookingsCancelled());
        $writer->writeIntegerValue('conversationCount', $this->getConversationCount());
        $writer->writeIntegerValue('inputTokens', $this->getInputTokens());
        $writer->writeStringValue('meterVersion', $this->getMeterVersion());
        $writer->writeIntegerValue('outputTokens', $this->getOutputTokens());
        $writer->writeDateTimeValue('periodEnd', $this->getPeriodEnd());
        $writer->writeDateTimeValue('periodStart', $this->getPeriodStart());
        $writer->writeIntegerValue('totalTokens', $this->getTotalTokens());
        $writer->writeIntegerValue('voiceSeconds', $this->getVoiceSeconds());
    }

    /**
     * Sets the asOf property value. The asOf property
     * @param DateTime|null $value Value to set for the asOf property.
    */
    public function setAsOf(?DateTime $value): void {
        $this->asOf = $value;
    }

    /**
     * Sets the bookingCount property value. The bookingCount property
     * @param int|null $value Value to set for the bookingCount property.
    */
    public function setBookingCount(?int $value): void {
        $this->bookingCount = $value;
    }

    /**
     * Sets the bookingsCancelled property value. The bookingsCancelled property
     * @param int|null $value Value to set for the bookingsCancelled property.
    */
    public function setBookingsCancelled(?int $value): void {
        $this->bookingsCancelled = $value;
    }

    /**
     * Sets the conversationCount property value. The conversationCount property
     * @param int|null $value Value to set for the conversationCount property.
    */
    public function setConversationCount(?int $value): void {
        $this->conversationCount = $value;
    }

    /**
     * Sets the inputTokens property value. The inputTokens property
     * @param int|null $value Value to set for the inputTokens property.
    */
    public function setInputTokens(?int $value): void {
        $this->inputTokens = $value;
    }

    /**
     * Sets the meterVersion property value. The meterVersion property
     * @param string|null $value Value to set for the meterVersion property.
    */
    public function setMeterVersion(?string $value): void {
        $this->meterVersion = $value;
    }

    /**
     * Sets the outputTokens property value. The outputTokens property
     * @param int|null $value Value to set for the outputTokens property.
    */
    public function setOutputTokens(?int $value): void {
        $this->outputTokens = $value;
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
     * Sets the totalTokens property value. The totalTokens property
     * @param int|null $value Value to set for the totalTokens property.
    */
    public function setTotalTokens(?int $value): void {
        $this->totalTokens = $value;
    }

    /**
     * Sets the voiceSeconds property value. The voiceSeconds property
     * @param int|null $value Value to set for the voiceSeconds property.
    */
    public function setVoiceSeconds(?int $value): void {
        $this->voiceSeconds = $value;
    }

}
