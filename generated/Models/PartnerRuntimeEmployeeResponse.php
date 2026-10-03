<?php

namespace Nerova\Sdk\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class PartnerRuntimeEmployeeResponse implements Parsable 
{
    /**
     * @var array<string>|null $activeChannels The activeChannels property
    */
    private ?array $activeChannels = null;
    
    /**
     * @var string|null $employeeId The employeeId property
    */
    private ?string $employeeId = null;
    
    /**
     * @var string|null $featureStatus The featureStatus property
    */
    private ?string $featureStatus = null;
    
    /**
     * @var PartnerRuntimeHostReference|null $hostReference The hostReference property
    */
    private ?PartnerRuntimeHostReference $hostReference = null;
    
    /**
     * @var string|null $lifecycle The lifecycle property
    */
    private ?string $lifecycle = null;
    
    /**
     * @var string|null $merchantId The merchantId property
    */
    private ?string $merchantId = null;
    
    /**
     * @var array<string>|null $pausedDuties The pausedDuties property
    */
    private ?array $pausedDuties = null;
    
    /**
     * @var PartnerRuntimeReadiness|null $readiness The readiness property
    */
    private ?PartnerRuntimeReadiness $readiness = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PartnerRuntimeEmployeeResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PartnerRuntimeEmployeeResponse {
        return new PartnerRuntimeEmployeeResponse();
    }

    /**
     * Gets the activeChannels property value. The activeChannels property
     * @return array<string>|null
    */
    public function getActiveChannels(): ?array {
        return $this->activeChannels;
    }

    /**
     * Gets the employeeId property value. The employeeId property
     * @return string|null
    */
    public function getEmployeeId(): ?string {
        return $this->employeeId;
    }

    /**
     * Gets the featureStatus property value. The featureStatus property
     * @return string|null
    */
    public function getFeatureStatus(): ?string {
        return $this->featureStatus;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'activeChannels' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setActiveChannels($val);
            },
            'employeeId' => fn(ParseNode $n) => $o->setEmployeeId($n->getStringValue()),
            'featureStatus' => fn(ParseNode $n) => $o->setFeatureStatus($n->getStringValue()),
            'hostReference' => fn(ParseNode $n) => $o->setHostReference($n->getObjectValue([PartnerRuntimeHostReference::class, 'createFromDiscriminatorValue'])),
            'lifecycle' => fn(ParseNode $n) => $o->setLifecycle($n->getStringValue()),
            'merchantId' => fn(ParseNode $n) => $o->setMerchantId($n->getStringValue()),
            'pausedDuties' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setPausedDuties($val);
            },
            'readiness' => fn(ParseNode $n) => $o->setReadiness($n->getObjectValue([PartnerRuntimeReadiness::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the hostReference property value. The hostReference property
     * @return PartnerRuntimeHostReference|null
    */
    public function getHostReference(): ?PartnerRuntimeHostReference {
        return $this->hostReference;
    }

    /**
     * Gets the lifecycle property value. The lifecycle property
     * @return string|null
    */
    public function getLifecycle(): ?string {
        return $this->lifecycle;
    }

    /**
     * Gets the merchantId property value. The merchantId property
     * @return string|null
    */
    public function getMerchantId(): ?string {
        return $this->merchantId;
    }

    /**
     * Gets the pausedDuties property value. The pausedDuties property
     * @return array<string>|null
    */
    public function getPausedDuties(): ?array {
        return $this->pausedDuties;
    }

    /**
     * Gets the readiness property value. The readiness property
     * @return PartnerRuntimeReadiness|null
    */
    public function getReadiness(): ?PartnerRuntimeReadiness {
        return $this->readiness;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfPrimitiveValues('activeChannels', $this->getActiveChannels());
        $writer->writeStringValue('employeeId', $this->getEmployeeId());
        $writer->writeStringValue('featureStatus', $this->getFeatureStatus());
        $writer->writeObjectValue('hostReference', $this->getHostReference());
        $writer->writeStringValue('lifecycle', $this->getLifecycle());
        $writer->writeStringValue('merchantId', $this->getMerchantId());
        $writer->writeCollectionOfPrimitiveValues('pausedDuties', $this->getPausedDuties());
        $writer->writeObjectValue('readiness', $this->getReadiness());
    }

    /**
     * Sets the activeChannels property value. The activeChannels property
     * @param array<string>|null $value Value to set for the activeChannels property.
    */
    public function setActiveChannels(?array $value): void {
        $this->activeChannels = $value;
    }

    /**
     * Sets the employeeId property value. The employeeId property
     * @param string|null $value Value to set for the employeeId property.
    */
    public function setEmployeeId(?string $value): void {
        $this->employeeId = $value;
    }

    /**
     * Sets the featureStatus property value. The featureStatus property
     * @param string|null $value Value to set for the featureStatus property.
    */
    public function setFeatureStatus(?string $value): void {
        $this->featureStatus = $value;
    }

    /**
     * Sets the hostReference property value. The hostReference property
     * @param PartnerRuntimeHostReference|null $value Value to set for the hostReference property.
    */
    public function setHostReference(?PartnerRuntimeHostReference $value): void {
        $this->hostReference = $value;
    }

    /**
     * Sets the lifecycle property value. The lifecycle property
     * @param string|null $value Value to set for the lifecycle property.
    */
    public function setLifecycle(?string $value): void {
        $this->lifecycle = $value;
    }

    /**
     * Sets the merchantId property value. The merchantId property
     * @param string|null $value Value to set for the merchantId property.
    */
    public function setMerchantId(?string $value): void {
        $this->merchantId = $value;
    }

    /**
     * Sets the pausedDuties property value. The pausedDuties property
     * @param array<string>|null $value Value to set for the pausedDuties property.
    */
    public function setPausedDuties(?array $value): void {
        $this->pausedDuties = $value;
    }

    /**
     * Sets the readiness property value. The readiness property
     * @param PartnerRuntimeReadiness|null $value Value to set for the readiness property.
    */
    public function setReadiness(?PartnerRuntimeReadiness $value): void {
        $this->readiness = $value;
    }

}
