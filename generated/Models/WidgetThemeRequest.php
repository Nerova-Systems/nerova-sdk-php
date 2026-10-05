<?php

namespace Nerova\Sdk\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class WidgetThemeRequest implements Parsable 
{
    /**
     * @var string|null $colorMode The colorMode property
    */
    private ?string $colorMode = null;
    
    /**
     * @var string|null $fontFamily The fontFamily property
    */
    private ?string $fontFamily = null;
    
    /**
     * @var string|null $primaryColor The primaryColor property
    */
    private ?string $primaryColor = null;
    
    /**
     * @var int|null $radiusPx The radiusPx property
    */
    private ?int $radiusPx = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WidgetThemeRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WidgetThemeRequest {
        return new WidgetThemeRequest();
    }

    /**
     * Gets the colorMode property value. The colorMode property
     * @return string|null
    */
    public function getColorMode(): ?string {
        return $this->colorMode;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'colorMode' => fn(ParseNode $n) => $o->setColorMode($n->getStringValue()),
            'fontFamily' => fn(ParseNode $n) => $o->setFontFamily($n->getStringValue()),
            'primaryColor' => fn(ParseNode $n) => $o->setPrimaryColor($n->getStringValue()),
            'radiusPx' => fn(ParseNode $n) => $o->setRadiusPx($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the fontFamily property value. The fontFamily property
     * @return string|null
    */
    public function getFontFamily(): ?string {
        return $this->fontFamily;
    }

    /**
     * Gets the primaryColor property value. The primaryColor property
     * @return string|null
    */
    public function getPrimaryColor(): ?string {
        return $this->primaryColor;
    }

    /**
     * Gets the radiusPx property value. The radiusPx property
     * @return int|null
    */
    public function getRadiusPx(): ?int {
        return $this->radiusPx;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('colorMode', $this->getColorMode());
        $writer->writeStringValue('fontFamily', $this->getFontFamily());
        $writer->writeStringValue('primaryColor', $this->getPrimaryColor());
        $writer->writeIntegerValue('radiusPx', $this->getRadiusPx());
    }

    /**
     * Sets the colorMode property value. The colorMode property
     * @param string|null $value Value to set for the colorMode property.
    */
    public function setColorMode(?string $value): void {
        $this->colorMode = $value;
    }

    /**
     * Sets the fontFamily property value. The fontFamily property
     * @param string|null $value Value to set for the fontFamily property.
    */
    public function setFontFamily(?string $value): void {
        $this->fontFamily = $value;
    }

    /**
     * Sets the primaryColor property value. The primaryColor property
     * @param string|null $value Value to set for the primaryColor property.
    */
    public function setPrimaryColor(?string $value): void {
        $this->primaryColor = $value;
    }

    /**
     * Sets the radiusPx property value. The radiusPx property
     * @param int|null $value Value to set for the radiusPx property.
    */
    public function setRadiusPx(?int $value): void {
        $this->radiusPx = $value;
    }

}
