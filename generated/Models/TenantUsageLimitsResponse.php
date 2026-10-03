<?php

namespace Nerova\Sdk\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TenantUsageLimitsResponse implements Parsable 
{
    /**
     * @var DateTime|null $asOf The asOf property
    */
    private ?DateTime $asOf = null;
    
    /**
     * @var int|null $hardCapMonthlyTokens The hardCapMonthlyTokens property
    */
    private ?int $hardCapMonthlyTokens = null;
    
    /**
     * @var string|null $monthKey The monthKey property
    */
    private ?string $monthKey = null;
    
    /**
     * @var int|null $monthTokensUsed The monthTokensUsed property
    */
    private ?int $monthTokensUsed = null;
    
    /**
     * @var int|null $softCapMonthlyTokens The softCapMonthlyTokens property
    */
    private ?int $softCapMonthlyTokens = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TenantUsageLimitsResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TenantUsageLimitsResponse {
        return new TenantUsageLimitsResponse();
    }

    /**
     * Gets the asOf property value. The asOf property
     * @return DateTime|null
    */
    public function getAsOf(): ?DateTime {
        return $this->asOf;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'asOf' => fn(ParseNode $n) => $o->setAsOf($n->getDateTimeValue()),
            'hardCapMonthlyTokens' => fn(ParseNode $n) => $o->setHardCapMonthlyTokens($n->getIntegerValue()),
            'monthKey' => fn(ParseNode $n) => $o->setMonthKey($n->getStringValue()),
            'monthTokensUsed' => fn(ParseNode $n) => $o->setMonthTokensUsed($n->getIntegerValue()),
            'softCapMonthlyTokens' => fn(ParseNode $n) => $o->setSoftCapMonthlyTokens($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the hardCapMonthlyTokens property value. The hardCapMonthlyTokens property
     * @return int|null
    */
    public function getHardCapMonthlyTokens(): ?int {
        return $this->hardCapMonthlyTokens;
    }

    /**
     * Gets the monthKey property value. The monthKey property
     * @return string|null
    */
    public function getMonthKey(): ?string {
        return $this->monthKey;
    }

    /**
     * Gets the monthTokensUsed property value. The monthTokensUsed property
     * @return int|null
    */
    public function getMonthTokensUsed(): ?int {
        return $this->monthTokensUsed;
    }

    /**
     * Gets the softCapMonthlyTokens property value. The softCapMonthlyTokens property
     * @return int|null
    */
    public function getSoftCapMonthlyTokens(): ?int {
        return $this->softCapMonthlyTokens;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeDateTimeValue('asOf', $this->getAsOf());
        $writer->writeIntegerValue('hardCapMonthlyTokens', $this->getHardCapMonthlyTokens());
        $writer->writeStringValue('monthKey', $this->getMonthKey());
        $writer->writeIntegerValue('monthTokensUsed', $this->getMonthTokensUsed());
        $writer->writeIntegerValue('softCapMonthlyTokens', $this->getSoftCapMonthlyTokens());
    }

    /**
     * Sets the asOf property value. The asOf property
     * @param DateTime|null $value Value to set for the asOf property.
    */
    public function setAsOf(?DateTime $value): void {
        $this->asOf = $value;
    }

    /**
     * Sets the hardCapMonthlyTokens property value. The hardCapMonthlyTokens property
     * @param int|null $value Value to set for the hardCapMonthlyTokens property.
    */
    public function setHardCapMonthlyTokens(?int $value): void {
        $this->hardCapMonthlyTokens = $value;
    }

    /**
     * Sets the monthKey property value. The monthKey property
     * @param string|null $value Value to set for the monthKey property.
    */
    public function setMonthKey(?string $value): void {
        $this->monthKey = $value;
    }

    /**
     * Sets the monthTokensUsed property value. The monthTokensUsed property
     * @param int|null $value Value to set for the monthTokensUsed property.
    */
    public function setMonthTokensUsed(?int $value): void {
        $this->monthTokensUsed = $value;
    }

    /**
     * Sets the softCapMonthlyTokens property value. The softCapMonthlyTokens property
     * @param int|null $value Value to set for the softCapMonthlyTokens property.
    */
    public function setSoftCapMonthlyTokens(?int $value): void {
        $this->softCapMonthlyTokens = $value;
    }

}
