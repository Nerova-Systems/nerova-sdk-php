<?php

namespace Nerova\Sdk\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UpdatePartnerNotificationSettingsCommand implements Parsable 
{
    /**
     * @var PartnerRuntimeActorRequest|null $actor The actor property
    */
    private ?PartnerRuntimeActorRequest $actor = null;
    
    /**
     * @var bool|null $feedbackEnabled The feedbackEnabled property
    */
    private ?bool $feedbackEnabled = null;
    
    /**
     * @var int|null $reviewCooldownDays The reviewCooldownDays property
    */
    private ?int $reviewCooldownDays = null;
    
    /**
     * @var string|null $reviewDestinationLabel The reviewDestinationLabel property
    */
    private ?string $reviewDestinationLabel = null;
    
    /**
     * @var string|null $reviewDestinationUrl The reviewDestinationUrl property
    */
    private ?string $reviewDestinationUrl = null;
    
    /**
     * @var bool|null $reviewEnabled The reviewEnabled property
    */
    private ?bool $reviewEnabled = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UpdatePartnerNotificationSettingsCommand
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UpdatePartnerNotificationSettingsCommand {
        return new UpdatePartnerNotificationSettingsCommand();
    }

    /**
     * Gets the actor property value. The actor property
     * @return PartnerRuntimeActorRequest|null
    */
    public function getActor(): ?PartnerRuntimeActorRequest {
        return $this->actor;
    }

    /**
     * Gets the feedbackEnabled property value. The feedbackEnabled property
     * @return bool|null
    */
    public function getFeedbackEnabled(): ?bool {
        return $this->feedbackEnabled;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'actor' => fn(ParseNode $n) => $o->setActor($n->getObjectValue([PartnerRuntimeActorRequest::class, 'createFromDiscriminatorValue'])),
            'feedbackEnabled' => fn(ParseNode $n) => $o->setFeedbackEnabled($n->getBooleanValue()),
            'reviewCooldownDays' => fn(ParseNode $n) => $o->setReviewCooldownDays($n->getIntegerValue()),
            'reviewDestinationLabel' => fn(ParseNode $n) => $o->setReviewDestinationLabel($n->getStringValue()),
            'reviewDestinationUrl' => fn(ParseNode $n) => $o->setReviewDestinationUrl($n->getStringValue()),
            'reviewEnabled' => fn(ParseNode $n) => $o->setReviewEnabled($n->getBooleanValue()),
        ];
    }

    /**
     * Gets the reviewCooldownDays property value. The reviewCooldownDays property
     * @return int|null
    */
    public function getReviewCooldownDays(): ?int {
        return $this->reviewCooldownDays;
    }

    /**
     * Gets the reviewDestinationLabel property value. The reviewDestinationLabel property
     * @return string|null
    */
    public function getReviewDestinationLabel(): ?string {
        return $this->reviewDestinationLabel;
    }

    /**
     * Gets the reviewDestinationUrl property value. The reviewDestinationUrl property
     * @return string|null
    */
    public function getReviewDestinationUrl(): ?string {
        return $this->reviewDestinationUrl;
    }

    /**
     * Gets the reviewEnabled property value. The reviewEnabled property
     * @return bool|null
    */
    public function getReviewEnabled(): ?bool {
        return $this->reviewEnabled;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('actor', $this->getActor());
        $writer->writeBooleanValue('feedbackEnabled', $this->getFeedbackEnabled());
        $writer->writeIntegerValue('reviewCooldownDays', $this->getReviewCooldownDays());
        $writer->writeStringValue('reviewDestinationLabel', $this->getReviewDestinationLabel());
        $writer->writeStringValue('reviewDestinationUrl', $this->getReviewDestinationUrl());
        $writer->writeBooleanValue('reviewEnabled', $this->getReviewEnabled());
    }

    /**
     * Sets the actor property value. The actor property
     * @param PartnerRuntimeActorRequest|null $value Value to set for the actor property.
    */
    public function setActor(?PartnerRuntimeActorRequest $value): void {
        $this->actor = $value;
    }

    /**
     * Sets the feedbackEnabled property value. The feedbackEnabled property
     * @param bool|null $value Value to set for the feedbackEnabled property.
    */
    public function setFeedbackEnabled(?bool $value): void {
        $this->feedbackEnabled = $value;
    }

    /**
     * Sets the reviewCooldownDays property value. The reviewCooldownDays property
     * @param int|null $value Value to set for the reviewCooldownDays property.
    */
    public function setReviewCooldownDays(?int $value): void {
        $this->reviewCooldownDays = $value;
    }

    /**
     * Sets the reviewDestinationLabel property value. The reviewDestinationLabel property
     * @param string|null $value Value to set for the reviewDestinationLabel property.
    */
    public function setReviewDestinationLabel(?string $value): void {
        $this->reviewDestinationLabel = $value;
    }

    /**
     * Sets the reviewDestinationUrl property value. The reviewDestinationUrl property
     * @param string|null $value Value to set for the reviewDestinationUrl property.
    */
    public function setReviewDestinationUrl(?string $value): void {
        $this->reviewDestinationUrl = $value;
    }

    /**
     * Sets the reviewEnabled property value. The reviewEnabled property
     * @param bool|null $value Value to set for the reviewEnabled property.
    */
    public function setReviewEnabled(?bool $value): void {
        $this->reviewEnabled = $value;
    }

}
