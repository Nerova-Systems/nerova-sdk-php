<?php

namespace Nerova\Sdk\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PartnerActivationConsentRequest implements Parsable 
{
    /**
     * @var array<PartnerActivationConsentCaptureInput>|null $captures The captures property
    */
    private ?array $captures = null;
    
    /**
     * @var int|null $expectedVersion The expectedVersion property
    */
    private ?int $expectedVersion = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PartnerActivationConsentRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PartnerActivationConsentRequest {
        return new PartnerActivationConsentRequest();
    }

    /**
     * Gets the captures property value. The captures property
     * @return array<PartnerActivationConsentCaptureInput>|null
    */
    public function getCaptures(): ?array {
        return $this->captures;
    }

    /**
     * Gets the expectedVersion property value. The expectedVersion property
     * @return int|null
    */
    public function getExpectedVersion(): ?int {
        return $this->expectedVersion;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'captures' => fn(ParseNode $n) => $o->setCaptures($n->getCollectionOfObjectValues([PartnerActivationConsentCaptureInput::class, 'createFromDiscriminatorValue'])),
            'expectedVersion' => fn(ParseNode $n) => $o->setExpectedVersion($n->getIntegerValue()),
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('captures', $this->getCaptures());
        $writer->writeIntegerValue('expectedVersion', $this->getExpectedVersion());
    }

    /**
     * Sets the captures property value. The captures property
     * @param array<PartnerActivationConsentCaptureInput>|null $value Value to set for the captures property.
    */
    public function setCaptures(?array $value): void {
        $this->captures = $value;
    }

    /**
     * Sets the expectedVersion property value. The expectedVersion property
     * @param int|null $value Value to set for the expectedVersion property.
    */
    public function setExpectedVersion(?int $value): void {
        $this->expectedVersion = $value;
    }

}
