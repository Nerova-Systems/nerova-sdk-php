<?php

namespace Nerova\Sdk\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PartnerRuntimeMandateVerb implements Parsable 
{
    /**
     * @var string|null $configuredLevel The configuredLevel property
    */
    private ?string $configuredLevel = null;
    
    /**
     * @var string|null $effectiveLevel The effectiveLevel property
    */
    private ?string $effectiveLevel = null;
    
    /**
     * @var string|null $platformCeiling The platformCeiling property
    */
    private ?string $platformCeiling = null;
    
    /**
     * @var string|null $verb The verb property
    */
    private ?string $verb = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PartnerRuntimeMandateVerb
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PartnerRuntimeMandateVerb {
        return new PartnerRuntimeMandateVerb();
    }

    /**
     * Gets the configuredLevel property value. The configuredLevel property
     * @return string|null
    */
    public function getConfiguredLevel(): ?string {
        return $this->configuredLevel;
    }

    /**
     * Gets the effectiveLevel property value. The effectiveLevel property
     * @return string|null
    */
    public function getEffectiveLevel(): ?string {
        return $this->effectiveLevel;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'configuredLevel' => fn(ParseNode $n) => $o->setConfiguredLevel($n->getStringValue()),
            'effectiveLevel' => fn(ParseNode $n) => $o->setEffectiveLevel($n->getStringValue()),
            'platformCeiling' => fn(ParseNode $n) => $o->setPlatformCeiling($n->getStringValue()),
            'verb' => fn(ParseNode $n) => $o->setVerb($n->getStringValue()),
        ];
    }

    /**
     * Gets the platformCeiling property value. The platformCeiling property
     * @return string|null
    */
    public function getPlatformCeiling(): ?string {
        return $this->platformCeiling;
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
        $writer->writeStringValue('configuredLevel', $this->getConfiguredLevel());
        $writer->writeStringValue('effectiveLevel', $this->getEffectiveLevel());
        $writer->writeStringValue('platformCeiling', $this->getPlatformCeiling());
        $writer->writeStringValue('verb', $this->getVerb());
    }

    /**
     * Sets the configuredLevel property value. The configuredLevel property
     * @param string|null $value Value to set for the configuredLevel property.
    */
    public function setConfiguredLevel(?string $value): void {
        $this->configuredLevel = $value;
    }

    /**
     * Sets the effectiveLevel property value. The effectiveLevel property
     * @param string|null $value Value to set for the effectiveLevel property.
    */
    public function setEffectiveLevel(?string $value): void {
        $this->effectiveLevel = $value;
    }

    /**
     * Sets the platformCeiling property value. The platformCeiling property
     * @param string|null $value Value to set for the platformCeiling property.
    */
    public function setPlatformCeiling(?string $value): void {
        $this->platformCeiling = $value;
    }

    /**
     * Sets the verb property value. The verb property
     * @param string|null $value Value to set for the verb property.
    */
    public function setVerb(?string $value): void {
        $this->verb = $value;
    }

}
