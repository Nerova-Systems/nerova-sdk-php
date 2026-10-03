<?php

namespace Nerova\Sdk\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PartnerRuntimeMemoryFact implements Parsable 
{
    /**
     * @var DateTime|null $createdAt The createdAt property
    */
    private ?DateTime $createdAt = null;
    
    /**
     * @var string|null $group The group property
    */
    private ?string $group = null;
    
    /**
     * @var PartnerRuntimeHostReference|null $hostReference The hostReference property
    */
    private ?PartnerRuntimeHostReference $hostReference = null;
    
    /**
     * @var string|null $id The id property
    */
    private ?string $id = null;
    
    /**
     * @var string|null $source The source property
    */
    private ?string $source = null;
    
    /**
     * @var string|null $sourceReference The sourceReference property
    */
    private ?string $sourceReference = null;
    
    /**
     * @var string|null $text The text property
    */
    private ?string $text = null;
    
    /**
     * @var string|null $version The version property
    */
    private ?string $version = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PartnerRuntimeMemoryFact
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PartnerRuntimeMemoryFact {
        return new PartnerRuntimeMemoryFact();
    }

    /**
     * Gets the createdAt property value. The createdAt property
     * @return DateTime|null
    */
    public function getCreatedAt(): ?DateTime {
        return $this->createdAt;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'createdAt' => fn(ParseNode $n) => $o->setCreatedAt($n->getDateTimeValue()),
            'group' => fn(ParseNode $n) => $o->setGroup($n->getStringValue()),
            'hostReference' => fn(ParseNode $n) => $o->setHostReference($n->getObjectValue([PartnerRuntimeHostReference::class, 'createFromDiscriminatorValue'])),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'source' => fn(ParseNode $n) => $o->setSource($n->getStringValue()),
            'sourceReference' => fn(ParseNode $n) => $o->setSourceReference($n->getStringValue()),
            'text' => fn(ParseNode $n) => $o->setText($n->getStringValue()),
            'version' => fn(ParseNode $n) => $o->setVersion($n->getStringValue()),
        ];
    }

    /**
     * Gets the group property value. The group property
     * @return string|null
    */
    public function getGroup(): ?string {
        return $this->group;
    }

    /**
     * Gets the hostReference property value. The hostReference property
     * @return PartnerRuntimeHostReference|null
    */
    public function getHostReference(): ?PartnerRuntimeHostReference {
        return $this->hostReference;
    }

    /**
     * Gets the id property value. The id property
     * @return string|null
    */
    public function getId(): ?string {
        return $this->id;
    }

    /**
     * Gets the source property value. The source property
     * @return string|null
    */
    public function getSource(): ?string {
        return $this->source;
    }

    /**
     * Gets the sourceReference property value. The sourceReference property
     * @return string|null
    */
    public function getSourceReference(): ?string {
        return $this->sourceReference;
    }

    /**
     * Gets the text property value. The text property
     * @return string|null
    */
    public function getText(): ?string {
        return $this->text;
    }

    /**
     * Gets the version property value. The version property
     * @return string|null
    */
    public function getVersion(): ?string {
        return $this->version;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeDateTimeValue('createdAt', $this->getCreatedAt());
        $writer->writeStringValue('group', $this->getGroup());
        $writer->writeObjectValue('hostReference', $this->getHostReference());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeStringValue('source', $this->getSource());
        $writer->writeStringValue('sourceReference', $this->getSourceReference());
        $writer->writeStringValue('text', $this->getText());
        $writer->writeStringValue('version', $this->getVersion());
    }

    /**
     * Sets the createdAt property value. The createdAt property
     * @param DateTime|null $value Value to set for the createdAt property.
    */
    public function setCreatedAt(?DateTime $value): void {
        $this->createdAt = $value;
    }

    /**
     * Sets the group property value. The group property
     * @param string|null $value Value to set for the group property.
    */
    public function setGroup(?string $value): void {
        $this->group = $value;
    }

    /**
     * Sets the hostReference property value. The hostReference property
     * @param PartnerRuntimeHostReference|null $value Value to set for the hostReference property.
    */
    public function setHostReference(?PartnerRuntimeHostReference $value): void {
        $this->hostReference = $value;
    }

    /**
     * Sets the id property value. The id property
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->id = $value;
    }

    /**
     * Sets the source property value. The source property
     * @param string|null $value Value to set for the source property.
    */
    public function setSource(?string $value): void {
        $this->source = $value;
    }

    /**
     * Sets the sourceReference property value. The sourceReference property
     * @param string|null $value Value to set for the sourceReference property.
    */
    public function setSourceReference(?string $value): void {
        $this->sourceReference = $value;
    }

    /**
     * Sets the text property value. The text property
     * @param string|null $value Value to set for the text property.
    */
    public function setText(?string $value): void {
        $this->text = $value;
    }

    /**
     * Sets the version property value. The version property
     * @param string|null $value Value to set for the version property.
    */
    public function setVersion(?string $value): void {
        $this->version = $value;
    }

}
