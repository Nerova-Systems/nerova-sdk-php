<?php

namespace Nerova\Sdk\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SetTenantUsageLimitsRequest implements Parsable 
{
    /**
     * @var int|null $hardCapMonthlyTokens The hardCapMonthlyTokens property
    */
    private ?int $hardCapMonthlyTokens = null;
    
    /**
     * @var int|null $softCapMonthlyTokens The softCapMonthlyTokens property
    */
    private ?int $softCapMonthlyTokens = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SetTenantUsageLimitsRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SetTenantUsageLimitsRequest {
        return new SetTenantUsageLimitsRequest();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'hardCapMonthlyTokens' => fn(ParseNode $n) => $o->setHardCapMonthlyTokens($n->getIntegerValue()),
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
        $writer->writeIntegerValue('hardCapMonthlyTokens', $this->getHardCapMonthlyTokens());
        $writer->writeIntegerValue('softCapMonthlyTokens', $this->getSoftCapMonthlyTokens());
    }

    /**
     * Sets the hardCapMonthlyTokens property value. The hardCapMonthlyTokens property
     * @param int|null $value Value to set for the hardCapMonthlyTokens property.
    */
    public function setHardCapMonthlyTokens(?int $value): void {
        $this->hardCapMonthlyTokens = $value;
    }

    /**
     * Sets the softCapMonthlyTokens property value. The softCapMonthlyTokens property
     * @param int|null $value Value to set for the softCapMonthlyTokens property.
    */
    public function setSoftCapMonthlyTokens(?int $value): void {
        $this->softCapMonthlyTokens = $value;
    }

}
