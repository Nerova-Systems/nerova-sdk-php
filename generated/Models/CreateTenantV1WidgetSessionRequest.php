<?php

namespace Nerova\Sdk\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CreateTenantV1WidgetSessionRequest implements Parsable 
{
    /**
     * @var string|null $origin The origin property
    */
    private ?string $origin = null;
    
    /**
     * @var WidgetThemeRequest|null $theme The theme property
    */
    private ?WidgetThemeRequest $theme = null;
    
    /**
     * @var string|null $widget The widget property
    */
    private ?string $widget = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CreateTenantV1WidgetSessionRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CreateTenantV1WidgetSessionRequest {
        return new CreateTenantV1WidgetSessionRequest();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'origin' => fn(ParseNode $n) => $o->setOrigin($n->getStringValue()),
            'theme' => fn(ParseNode $n) => $o->setTheme($n->getObjectValue([WidgetThemeRequest::class, 'createFromDiscriminatorValue'])),
            'widget' => fn(ParseNode $n) => $o->setWidget($n->getStringValue()),
        ];
    }

    /**
     * Gets the origin property value. The origin property
     * @return string|null
    */
    public function getOrigin(): ?string {
        return $this->origin;
    }

    /**
     * Gets the theme property value. The theme property
     * @return WidgetThemeRequest|null
    */
    public function getTheme(): ?WidgetThemeRequest {
        return $this->theme;
    }

    /**
     * Gets the widget property value. The widget property
     * @return string|null
    */
    public function getWidget(): ?string {
        return $this->widget;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('origin', $this->getOrigin());
        $writer->writeObjectValue('theme', $this->getTheme());
        $writer->writeStringValue('widget', $this->getWidget());
    }

    /**
     * Sets the origin property value. The origin property
     * @param string|null $value Value to set for the origin property.
    */
    public function setOrigin(?string $value): void {
        $this->origin = $value;
    }

    /**
     * Sets the theme property value. The theme property
     * @param WidgetThemeRequest|null $value Value to set for the theme property.
    */
    public function setTheme(?WidgetThemeRequest $value): void {
        $this->theme = $value;
    }

    /**
     * Sets the widget property value. The widget property
     * @param string|null $value Value to set for the widget property.
    */
    public function setWidget(?string $value): void {
        $this->widget = $value;
    }

}
