<?php

namespace Nerova\Sdk\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TenantV1Response implements Parsable 
{
    /**
     * @var string|null $displayName The displayName property
    */
    private ?string $displayName = null;
    
    /**
     * @var string|null $externalReference The externalReference property
    */
    private ?string $externalReference = null;
    
    /**
     * @var string|null $id The id property
    */
    private ?string $id = null;
    
    /**
     * @var string|null $lastErrorCode The lastErrorCode property
    */
    private ?string $lastErrorCode = null;
    
    /**
     * @var TenantV1LifecycleState|null $lifecycleState The lifecycleState property
    */
    private ?TenantV1LifecycleState $lifecycleState = null;
    
    /**
     * @var string|null $pendingStep The pendingStep property
    */
    private ?string $pendingStep = null;
    
    /**
     * @var TenantV1ProvisioningState|null $provisioningState The provisioningState property
    */
    private ?TenantV1ProvisioningState $provisioningState = null;
    
    /**
     * @var int|null $version The version property
    */
    private ?int $version = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TenantV1Response
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TenantV1Response {
        return new TenantV1Response();
    }

    /**
     * Gets the displayName property value. The displayName property
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * Gets the externalReference property value. The externalReference property
     * @return string|null
    */
    public function getExternalReference(): ?string {
        return $this->externalReference;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'externalReference' => fn(ParseNode $n) => $o->setExternalReference($n->getStringValue()),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'lastErrorCode' => fn(ParseNode $n) => $o->setLastErrorCode($n->getStringValue()),
            'lifecycleState' => fn(ParseNode $n) => $o->setLifecycleState($n->getEnumValue(TenantV1LifecycleState::class)),
            'pendingStep' => fn(ParseNode $n) => $o->setPendingStep($n->getStringValue()),
            'provisioningState' => fn(ParseNode $n) => $o->setProvisioningState($n->getEnumValue(TenantV1ProvisioningState::class)),
            'version' => fn(ParseNode $n) => $o->setVersion($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the id property value. The id property
     * @return string|null
    */
    public function getId(): ?string {
        return $this->id;
    }

    /**
     * Gets the lastErrorCode property value. The lastErrorCode property
     * @return string|null
    */
    public function getLastErrorCode(): ?string {
        return $this->lastErrorCode;
    }

    /**
     * Gets the lifecycleState property value. The lifecycleState property
     * @return TenantV1LifecycleState|null
    */
    public function getLifecycleState(): ?TenantV1LifecycleState {
        return $this->lifecycleState;
    }

    /**
     * Gets the pendingStep property value. The pendingStep property
     * @return string|null
    */
    public function getPendingStep(): ?string {
        return $this->pendingStep;
    }

    /**
     * Gets the provisioningState property value. The provisioningState property
     * @return TenantV1ProvisioningState|null
    */
    public function getProvisioningState(): ?TenantV1ProvisioningState {
        return $this->provisioningState;
    }

    /**
     * Gets the version property value. The version property
     * @return int|null
    */
    public function getVersion(): ?int {
        return $this->version;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeStringValue('externalReference', $this->getExternalReference());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeStringValue('lastErrorCode', $this->getLastErrorCode());
        $writer->writeEnumValue('lifecycleState', $this->getLifecycleState());
        $writer->writeStringValue('pendingStep', $this->getPendingStep());
        $writer->writeEnumValue('provisioningState', $this->getProvisioningState());
        $writer->writeIntegerValue('version', $this->getVersion());
    }

    /**
     * Sets the displayName property value. The displayName property
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->displayName = $value;
    }

    /**
     * Sets the externalReference property value. The externalReference property
     * @param string|null $value Value to set for the externalReference property.
    */
    public function setExternalReference(?string $value): void {
        $this->externalReference = $value;
    }

    /**
     * Sets the id property value. The id property
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->id = $value;
    }

    /**
     * Sets the lastErrorCode property value. The lastErrorCode property
     * @param string|null $value Value to set for the lastErrorCode property.
    */
    public function setLastErrorCode(?string $value): void {
        $this->lastErrorCode = $value;
    }

    /**
     * Sets the lifecycleState property value. The lifecycleState property
     * @param TenantV1LifecycleState|null $value Value to set for the lifecycleState property.
    */
    public function setLifecycleState(?TenantV1LifecycleState $value): void {
        $this->lifecycleState = $value;
    }

    /**
     * Sets the pendingStep property value. The pendingStep property
     * @param string|null $value Value to set for the pendingStep property.
    */
    public function setPendingStep(?string $value): void {
        $this->pendingStep = $value;
    }

    /**
     * Sets the provisioningState property value. The provisioningState property
     * @param TenantV1ProvisioningState|null $value Value to set for the provisioningState property.
    */
    public function setProvisioningState(?TenantV1ProvisioningState $value): void {
        $this->provisioningState = $value;
    }

    /**
     * Sets the version property value. The version property
     * @param int|null $value Value to set for the version property.
    */
    public function setVersion(?int $value): void {
        $this->version = $value;
    }

}
