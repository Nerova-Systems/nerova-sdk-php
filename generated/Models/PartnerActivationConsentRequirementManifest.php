<?php

namespace Nerova\Sdk\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PartnerActivationConsentRequirementManifest implements Parsable 
{
    /**
     * @var bool|null $accepted The accepted property
    */
    private ?bool $accepted = null;
    
    /**
     * @var DateTime|null $capturedAt The capturedAt property
    */
    private ?DateTime $capturedAt = null;
    
    /**
     * @var string|null $capturedVersion The capturedVersion property
    */
    private ?string $capturedVersion = null;
    
    /**
     * @var string|null $currentVersion The currentVersion property
    */
    private ?string $currentVersion = null;
    
    /**
     * @var PartnerActivationConsentRequirement|null $requirement The requirement property
    */
    private ?PartnerActivationConsentRequirement $requirement = null;
    
    /**
     * @var bool|null $satisfied The satisfied property
    */
    private ?bool $satisfied = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PartnerActivationConsentRequirementManifest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PartnerActivationConsentRequirementManifest {
        return new PartnerActivationConsentRequirementManifest();
    }

    /**
     * Gets the accepted property value. The accepted property
     * @return bool|null
    */
    public function getAccepted(): ?bool {
        return $this->accepted;
    }

    /**
     * Gets the capturedAt property value. The capturedAt property
     * @return DateTime|null
    */
    public function getCapturedAt(): ?DateTime {
        return $this->capturedAt;
    }

    /**
     * Gets the capturedVersion property value. The capturedVersion property
     * @return string|null
    */
    public function getCapturedVersion(): ?string {
        return $this->capturedVersion;
    }

    /**
     * Gets the currentVersion property value. The currentVersion property
     * @return string|null
    */
    public function getCurrentVersion(): ?string {
        return $this->currentVersion;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'accepted' => fn(ParseNode $n) => $o->setAccepted($n->getBooleanValue()),
            'capturedAt' => fn(ParseNode $n) => $o->setCapturedAt($n->getDateTimeValue()),
            'capturedVersion' => fn(ParseNode $n) => $o->setCapturedVersion($n->getStringValue()),
            'currentVersion' => fn(ParseNode $n) => $o->setCurrentVersion($n->getStringValue()),
            'requirement' => fn(ParseNode $n) => $o->setRequirement($n->getEnumValue(PartnerActivationConsentRequirement::class)),
            'satisfied' => fn(ParseNode $n) => $o->setSatisfied($n->getBooleanValue()),
        ];
    }

    /**
     * Gets the requirement property value. The requirement property
     * @return PartnerActivationConsentRequirement|null
    */
    public function getRequirement(): ?PartnerActivationConsentRequirement {
        return $this->requirement;
    }

    /**
     * Gets the satisfied property value. The satisfied property
     * @return bool|null
    */
    public function getSatisfied(): ?bool {
        return $this->satisfied;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('accepted', $this->getAccepted());
        $writer->writeDateTimeValue('capturedAt', $this->getCapturedAt());
        $writer->writeStringValue('capturedVersion', $this->getCapturedVersion());
        $writer->writeStringValue('currentVersion', $this->getCurrentVersion());
        $writer->writeEnumValue('requirement', $this->getRequirement());
        $writer->writeBooleanValue('satisfied', $this->getSatisfied());
    }

    /**
     * Sets the accepted property value. The accepted property
     * @param bool|null $value Value to set for the accepted property.
    */
    public function setAccepted(?bool $value): void {
        $this->accepted = $value;
    }

    /**
     * Sets the capturedAt property value. The capturedAt property
     * @param DateTime|null $value Value to set for the capturedAt property.
    */
    public function setCapturedAt(?DateTime $value): void {
        $this->capturedAt = $value;
    }

    /**
     * Sets the capturedVersion property value. The capturedVersion property
     * @param string|null $value Value to set for the capturedVersion property.
    */
    public function setCapturedVersion(?string $value): void {
        $this->capturedVersion = $value;
    }

    /**
     * Sets the currentVersion property value. The currentVersion property
     * @param string|null $value Value to set for the currentVersion property.
    */
    public function setCurrentVersion(?string $value): void {
        $this->currentVersion = $value;
    }

    /**
     * Sets the requirement property value. The requirement property
     * @param PartnerActivationConsentRequirement|null $value Value to set for the requirement property.
    */
    public function setRequirement(?PartnerActivationConsentRequirement $value): void {
        $this->requirement = $value;
    }

    /**
     * Sets the satisfied property value. The satisfied property
     * @param bool|null $value Value to set for the satisfied property.
    */
    public function setSatisfied(?bool $value): void {
        $this->satisfied = $value;
    }

}
