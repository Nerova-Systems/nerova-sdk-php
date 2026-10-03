<?php

namespace Nerova\Sdk\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class PartnerNotificationCatalogItem implements Parsable 
{
    /**
     * @var string|null $category The category property
    */
    private ?string $category = null;
    
    /**
     * @var string|null $consentPurpose The consentPurpose property
    */
    private ?string $consentPurpose = null;
    
    /**
     * @var string|null $description The description property
    */
    private ?string $description = null;
    
    /**
     * @var bool|null $ready The ready property
    */
    private ?bool $ready = null;
    
    /**
     * @var array<string>|null $requiredFields The requiredFields property
    */
    private ?array $requiredFields = null;
    
    /**
     * @var string|null $templateReason The templateReason property
    */
    private ?string $templateReason = null;
    
    /**
     * @var string|null $templateStatus The templateStatus property
    */
    private ?string $templateStatus = null;
    
    /**
     * @var DateTime|null $templateUpdatedAt The templateUpdatedAt property
    */
    private ?DateTime $templateUpdatedAt = null;
    
    /**
     * @var string|null $type The type property
    */
    private ?string $type = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PartnerNotificationCatalogItem
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PartnerNotificationCatalogItem {
        return new PartnerNotificationCatalogItem();
    }

    /**
     * Gets the category property value. The category property
     * @return string|null
    */
    public function getCategory(): ?string {
        return $this->category;
    }

    /**
     * Gets the consentPurpose property value. The consentPurpose property
     * @return string|null
    */
    public function getConsentPurpose(): ?string {
        return $this->consentPurpose;
    }

    /**
     * Gets the description property value. The description property
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'category' => fn(ParseNode $n) => $o->setCategory($n->getStringValue()),
            'consentPurpose' => fn(ParseNode $n) => $o->setConsentPurpose($n->getStringValue()),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'ready' => fn(ParseNode $n) => $o->setReady($n->getBooleanValue()),
            'requiredFields' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setRequiredFields($val);
            },
            'templateReason' => fn(ParseNode $n) => $o->setTemplateReason($n->getStringValue()),
            'templateStatus' => fn(ParseNode $n) => $o->setTemplateStatus($n->getStringValue()),
            'templateUpdatedAt' => fn(ParseNode $n) => $o->setTemplateUpdatedAt($n->getDateTimeValue()),
            'type' => fn(ParseNode $n) => $o->setType($n->getStringValue()),
        ];
    }

    /**
     * Gets the ready property value. The ready property
     * @return bool|null
    */
    public function getReady(): ?bool {
        return $this->ready;
    }

    /**
     * Gets the requiredFields property value. The requiredFields property
     * @return array<string>|null
    */
    public function getRequiredFields(): ?array {
        return $this->requiredFields;
    }

    /**
     * Gets the templateReason property value. The templateReason property
     * @return string|null
    */
    public function getTemplateReason(): ?string {
        return $this->templateReason;
    }

    /**
     * Gets the templateStatus property value. The templateStatus property
     * @return string|null
    */
    public function getTemplateStatus(): ?string {
        return $this->templateStatus;
    }

    /**
     * Gets the templateUpdatedAt property value. The templateUpdatedAt property
     * @return DateTime|null
    */
    public function getTemplateUpdatedAt(): ?DateTime {
        return $this->templateUpdatedAt;
    }

    /**
     * Gets the type property value. The type property
     * @return string|null
    */
    public function getType(): ?string {
        return $this->type;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('category', $this->getCategory());
        $writer->writeStringValue('consentPurpose', $this->getConsentPurpose());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeBooleanValue('ready', $this->getReady());
        $writer->writeCollectionOfPrimitiveValues('requiredFields', $this->getRequiredFields());
        $writer->writeStringValue('templateReason', $this->getTemplateReason());
        $writer->writeStringValue('templateStatus', $this->getTemplateStatus());
        $writer->writeDateTimeValue('templateUpdatedAt', $this->getTemplateUpdatedAt());
        $writer->writeStringValue('type', $this->getType());
    }

    /**
     * Sets the category property value. The category property
     * @param string|null $value Value to set for the category property.
    */
    public function setCategory(?string $value): void {
        $this->category = $value;
    }

    /**
     * Sets the consentPurpose property value. The consentPurpose property
     * @param string|null $value Value to set for the consentPurpose property.
    */
    public function setConsentPurpose(?string $value): void {
        $this->consentPurpose = $value;
    }

    /**
     * Sets the description property value. The description property
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->description = $value;
    }

    /**
     * Sets the ready property value. The ready property
     * @param bool|null $value Value to set for the ready property.
    */
    public function setReady(?bool $value): void {
        $this->ready = $value;
    }

    /**
     * Sets the requiredFields property value. The requiredFields property
     * @param array<string>|null $value Value to set for the requiredFields property.
    */
    public function setRequiredFields(?array $value): void {
        $this->requiredFields = $value;
    }

    /**
     * Sets the templateReason property value. The templateReason property
     * @param string|null $value Value to set for the templateReason property.
    */
    public function setTemplateReason(?string $value): void {
        $this->templateReason = $value;
    }

    /**
     * Sets the templateStatus property value. The templateStatus property
     * @param string|null $value Value to set for the templateStatus property.
    */
    public function setTemplateStatus(?string $value): void {
        $this->templateStatus = $value;
    }

    /**
     * Sets the templateUpdatedAt property value. The templateUpdatedAt property
     * @param DateTime|null $value Value to set for the templateUpdatedAt property.
    */
    public function setTemplateUpdatedAt(?DateTime $value): void {
        $this->templateUpdatedAt = $value;
    }

    /**
     * Sets the type property value. The type property
     * @param string|null $value Value to set for the type property.
    */
    public function setType(?string $value): void {
        $this->type = $value;
    }

}
