<?php

namespace Nerova\Sdk\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class ProviderConformanceCoverageEntry implements Parsable 
{
    /**
     * @var array<string>|null $checkIds The checkIds property
    */
    private ?array $checkIds = null;
    
    /**
     * @var string|null $exclusionReason The exclusionReason property
    */
    private ?string $exclusionReason = null;
    
    /**
     * @var ProviderConformanceCoverageStatus|null $status The status property
    */
    private ?ProviderConformanceCoverageStatus $status = null;
    
    /**
     * @var string|null $target The target property
    */
    private ?string $target = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ProviderConformanceCoverageEntry
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ProviderConformanceCoverageEntry {
        return new ProviderConformanceCoverageEntry();
    }

    /**
     * Gets the checkIds property value. The checkIds property
     * @return array<string>|null
    */
    public function getCheckIds(): ?array {
        return $this->checkIds;
    }

    /**
     * Gets the exclusionReason property value. The exclusionReason property
     * @return string|null
    */
    public function getExclusionReason(): ?string {
        return $this->exclusionReason;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'checkIds' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setCheckIds($val);
            },
            'exclusionReason' => fn(ParseNode $n) => $o->setExclusionReason($n->getStringValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(ProviderConformanceCoverageStatus::class)),
            'target' => fn(ParseNode $n) => $o->setTarget($n->getStringValue()),
        ];
    }

    /**
     * Gets the status property value. The status property
     * @return ProviderConformanceCoverageStatus|null
    */
    public function getStatus(): ?ProviderConformanceCoverageStatus {
        return $this->status;
    }

    /**
     * Gets the target property value. The target property
     * @return string|null
    */
    public function getTarget(): ?string {
        return $this->target;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfPrimitiveValues('checkIds', $this->getCheckIds());
        $writer->writeStringValue('exclusionReason', $this->getExclusionReason());
        $writer->writeEnumValue('status', $this->getStatus());
        $writer->writeStringValue('target', $this->getTarget());
    }

    /**
     * Sets the checkIds property value. The checkIds property
     * @param array<string>|null $value Value to set for the checkIds property.
    */
    public function setCheckIds(?array $value): void {
        $this->checkIds = $value;
    }

    /**
     * Sets the exclusionReason property value. The exclusionReason property
     * @param string|null $value Value to set for the exclusionReason property.
    */
    public function setExclusionReason(?string $value): void {
        $this->exclusionReason = $value;
    }

    /**
     * Sets the status property value. The status property
     * @param ProviderConformanceCoverageStatus|null $value Value to set for the status property.
    */
    public function setStatus(?ProviderConformanceCoverageStatus $value): void {
        $this->status = $value;
    }

    /**
     * Sets the target property value. The target property
     * @param string|null $value Value to set for the target property.
    */
    public function setTarget(?string $value): void {
        $this->target = $value;
    }

}
