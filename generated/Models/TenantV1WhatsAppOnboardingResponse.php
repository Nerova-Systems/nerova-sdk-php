<?php

namespace Nerova\Sdk\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TenantV1WhatsAppOnboardingResponse implements Parsable 
{
    /**
     * @var string|null $businessVerificationStatus The businessVerificationStatus property
    */
    private ?string $businessVerificationStatus = null;
    
    /**
     * @var bool|null $isComplete The isComplete property
    */
    private ?bool $isComplete = null;
    
    /**
     * @var TenantWhatsAppOnboardingState|null $state The state property
    */
    private ?TenantWhatsAppOnboardingState $state = null;
    
    /**
     * @var array<WhatsAppOnboardingChecklistStep>|null $steps The steps property
    */
    private ?array $steps = null;
    
    /**
     * @var string|null $tenantId The tenantId property
    */
    private ?string $tenantId = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TenantV1WhatsAppOnboardingResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TenantV1WhatsAppOnboardingResponse {
        return new TenantV1WhatsAppOnboardingResponse();
    }

    /**
     * Gets the businessVerificationStatus property value. The businessVerificationStatus property
     * @return string|null
    */
    public function getBusinessVerificationStatus(): ?string {
        return $this->businessVerificationStatus;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'businessVerificationStatus' => fn(ParseNode $n) => $o->setBusinessVerificationStatus($n->getStringValue()),
            'isComplete' => fn(ParseNode $n) => $o->setIsComplete($n->getBooleanValue()),
            'state' => fn(ParseNode $n) => $o->setState($n->getEnumValue(TenantWhatsAppOnboardingState::class)),
            'steps' => fn(ParseNode $n) => $o->setSteps($n->getCollectionOfObjectValues([WhatsAppOnboardingChecklistStep::class, 'createFromDiscriminatorValue'])),
            'tenantId' => fn(ParseNode $n) => $o->setTenantId($n->getStringValue()),
        ];
    }

    /**
     * Gets the isComplete property value. The isComplete property
     * @return bool|null
    */
    public function getIsComplete(): ?bool {
        return $this->isComplete;
    }

    /**
     * Gets the state property value. The state property
     * @return TenantWhatsAppOnboardingState|null
    */
    public function getState(): ?TenantWhatsAppOnboardingState {
        return $this->state;
    }

    /**
     * Gets the steps property value. The steps property
     * @return array<WhatsAppOnboardingChecklistStep>|null
    */
    public function getSteps(): ?array {
        return $this->steps;
    }

    /**
     * Gets the tenantId property value. The tenantId property
     * @return string|null
    */
    public function getTenantId(): ?string {
        return $this->tenantId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('businessVerificationStatus', $this->getBusinessVerificationStatus());
        $writer->writeBooleanValue('isComplete', $this->getIsComplete());
        $writer->writeEnumValue('state', $this->getState());
        $writer->writeCollectionOfObjectValues('steps', $this->getSteps());
        $writer->writeStringValue('tenantId', $this->getTenantId());
    }

    /**
     * Sets the businessVerificationStatus property value. The businessVerificationStatus property
     * @param string|null $value Value to set for the businessVerificationStatus property.
    */
    public function setBusinessVerificationStatus(?string $value): void {
        $this->businessVerificationStatus = $value;
    }

    /**
     * Sets the isComplete property value. The isComplete property
     * @param bool|null $value Value to set for the isComplete property.
    */
    public function setIsComplete(?bool $value): void {
        $this->isComplete = $value;
    }

    /**
     * Sets the state property value. The state property
     * @param TenantWhatsAppOnboardingState|null $value Value to set for the state property.
    */
    public function setState(?TenantWhatsAppOnboardingState $value): void {
        $this->state = $value;
    }

    /**
     * Sets the steps property value. The steps property
     * @param array<WhatsAppOnboardingChecklistStep>|null $value Value to set for the steps property.
    */
    public function setSteps(?array $value): void {
        $this->steps = $value;
    }

    /**
     * Sets the tenantId property value. The tenantId property
     * @param string|null $value Value to set for the tenantId property.
    */
    public function setTenantId(?string $value): void {
        $this->tenantId = $value;
    }

}
