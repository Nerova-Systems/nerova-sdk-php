<?php

namespace Nerova\Sdk\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class PartnerActivationDutyReadiness implements Parsable 
{
    /**
     * @var array<string>|null $blockingCodes The blockingCodes property
    */
    private ?array $blockingCodes = null;
    
    /**
     * @var PartnerActivationMandateLevel|null $ceiling The ceiling property
    */
    private ?PartnerActivationMandateLevel $ceiling = null;
    
    /**
     * @var PartnerActivationDuty|null $duty The duty property
    */
    private ?PartnerActivationDuty $duty = null;
    
    /**
     * @var PartnerActivationMandateLevel|null $effectiveLevel The effectiveLevel property
    */
    private ?PartnerActivationMandateLevel $effectiveLevel = null;
    
    /**
     * @var bool|null $ready The ready property
    */
    private ?bool $ready = null;
    
    /**
     * @var PartnerActivationMandateLevel|null $requestedLevel The requestedLevel property
    */
    private ?PartnerActivationMandateLevel $requestedLevel = null;
    
    /**
     * @var string|null $requiredCapability The requiredCapability property
    */
    private ?string $requiredCapability = null;
    
    /**
     * @var PartnerActivationDutyRequirement|null $requirement The requirement property
    */
    private ?PartnerActivationDutyRequirement $requirement = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PartnerActivationDutyReadiness
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PartnerActivationDutyReadiness {
        return new PartnerActivationDutyReadiness();
    }

    /**
     * Gets the blockingCodes property value. The blockingCodes property
     * @return array<string>|null
    */
    public function getBlockingCodes(): ?array {
        return $this->blockingCodes;
    }

    /**
     * Gets the ceiling property value. The ceiling property
     * @return PartnerActivationMandateLevel|null
    */
    public function getCeiling(): ?PartnerActivationMandateLevel {
        return $this->ceiling;
    }

    /**
     * Gets the duty property value. The duty property
     * @return PartnerActivationDuty|null
    */
    public function getDuty(): ?PartnerActivationDuty {
        return $this->duty;
    }

    /**
     * Gets the effectiveLevel property value. The effectiveLevel property
     * @return PartnerActivationMandateLevel|null
    */
    public function getEffectiveLevel(): ?PartnerActivationMandateLevel {
        return $this->effectiveLevel;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'blockingCodes' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setBlockingCodes($val);
            },
            'ceiling' => fn(ParseNode $n) => $o->setCeiling($n->getEnumValue(PartnerActivationMandateLevel::class)),
            'duty' => fn(ParseNode $n) => $o->setDuty($n->getEnumValue(PartnerActivationDuty::class)),
            'effectiveLevel' => fn(ParseNode $n) => $o->setEffectiveLevel($n->getEnumValue(PartnerActivationMandateLevel::class)),
            'ready' => fn(ParseNode $n) => $o->setReady($n->getBooleanValue()),
            'requestedLevel' => fn(ParseNode $n) => $o->setRequestedLevel($n->getEnumValue(PartnerActivationMandateLevel::class)),
            'requiredCapability' => fn(ParseNode $n) => $o->setRequiredCapability($n->getStringValue()),
            'requirement' => fn(ParseNode $n) => $o->setRequirement($n->getEnumValue(PartnerActivationDutyRequirement::class)),
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
     * Gets the requestedLevel property value. The requestedLevel property
     * @return PartnerActivationMandateLevel|null
    */
    public function getRequestedLevel(): ?PartnerActivationMandateLevel {
        return $this->requestedLevel;
    }

    /**
     * Gets the requiredCapability property value. The requiredCapability property
     * @return string|null
    */
    public function getRequiredCapability(): ?string {
        return $this->requiredCapability;
    }

    /**
     * Gets the requirement property value. The requirement property
     * @return PartnerActivationDutyRequirement|null
    */
    public function getRequirement(): ?PartnerActivationDutyRequirement {
        return $this->requirement;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfPrimitiveValues('blockingCodes', $this->getBlockingCodes());
        $writer->writeEnumValue('ceiling', $this->getCeiling());
        $writer->writeEnumValue('duty', $this->getDuty());
        $writer->writeEnumValue('effectiveLevel', $this->getEffectiveLevel());
        $writer->writeBooleanValue('ready', $this->getReady());
        $writer->writeEnumValue('requestedLevel', $this->getRequestedLevel());
        $writer->writeStringValue('requiredCapability', $this->getRequiredCapability());
        $writer->writeEnumValue('requirement', $this->getRequirement());
    }

    /**
     * Sets the blockingCodes property value. The blockingCodes property
     * @param array<string>|null $value Value to set for the blockingCodes property.
    */
    public function setBlockingCodes(?array $value): void {
        $this->blockingCodes = $value;
    }

    /**
     * Sets the ceiling property value. The ceiling property
     * @param PartnerActivationMandateLevel|null $value Value to set for the ceiling property.
    */
    public function setCeiling(?PartnerActivationMandateLevel $value): void {
        $this->ceiling = $value;
    }

    /**
     * Sets the duty property value. The duty property
     * @param PartnerActivationDuty|null $value Value to set for the duty property.
    */
    public function setDuty(?PartnerActivationDuty $value): void {
        $this->duty = $value;
    }

    /**
     * Sets the effectiveLevel property value. The effectiveLevel property
     * @param PartnerActivationMandateLevel|null $value Value to set for the effectiveLevel property.
    */
    public function setEffectiveLevel(?PartnerActivationMandateLevel $value): void {
        $this->effectiveLevel = $value;
    }

    /**
     * Sets the ready property value. The ready property
     * @param bool|null $value Value to set for the ready property.
    */
    public function setReady(?bool $value): void {
        $this->ready = $value;
    }

    /**
     * Sets the requestedLevel property value. The requestedLevel property
     * @param PartnerActivationMandateLevel|null $value Value to set for the requestedLevel property.
    */
    public function setRequestedLevel(?PartnerActivationMandateLevel $value): void {
        $this->requestedLevel = $value;
    }

    /**
     * Sets the requiredCapability property value. The requiredCapability property
     * @param string|null $value Value to set for the requiredCapability property.
    */
    public function setRequiredCapability(?string $value): void {
        $this->requiredCapability = $value;
    }

    /**
     * Sets the requirement property value. The requirement property
     * @param PartnerActivationDutyRequirement|null $value Value to set for the requirement property.
    */
    public function setRequirement(?PartnerActivationDutyRequirement $value): void {
        $this->requirement = $value;
    }

}
