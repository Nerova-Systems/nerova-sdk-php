<?php

namespace Nerova\Sdk\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PartnerRuntimeMandateChange implements Parsable 
{
    /**
     * @var string|null $level The level property
    */
    private ?string $level = null;
    
    /**
     * @var string|null $verb The verb property
    */
    private ?string $verb = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PartnerRuntimeMandateChange
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PartnerRuntimeMandateChange {
        return new PartnerRuntimeMandateChange();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'level' => fn(ParseNode $n) => $o->setLevel($n->getStringValue()),
            'verb' => fn(ParseNode $n) => $o->setVerb($n->getStringValue()),
        ];
    }

    /**
     * Gets the level property value. The level property
     * @return string|null
    */
    public function getLevel(): ?string {
        return $this->level;
    }

    /**
     * Gets the verb property value. The verb property
     * @return string|null
    */
    public function getVerb(): ?string {
        return $this->verb;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('level', $this->getLevel());
        $writer->writeStringValue('verb', $this->getVerb());
    }

    /**
     * Sets the level property value. The level property
     * @param string|null $value Value to set for the level property.
    */
    public function setLevel(?string $value): void {
        $this->level = $value;
    }

    /**
     * Sets the verb property value. The verb property
     * @param string|null $value Value to set for the verb property.
    */
    public function setVerb(?string $value): void {
        $this->verb = $value;
    }

}
