<?php

namespace Nerova\Sdk\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class ProviderConformanceCertificationBlocker implements Parsable 
{
    /**
     * @var array<string>|null $checkIds The checkIds property
    */
    private ?array $checkIds = null;
    
    /**
     * @var string|null $reason The reason property
    */
    private ?string $reason = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ProviderConformanceCertificationBlocker
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ProviderConformanceCertificationBlocker {
        return new ProviderConformanceCertificationBlocker();
    }

    /**
     * Gets the checkIds property value. The checkIds property
     * @return array<string>|null
    */
    public function getCheckIds(): ?array {
        return $this->checkIds;
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
            'reason' => fn(ParseNode $n) => $o->setReason($n->getStringValue()),
        ];
    }

    /**
     * Gets the reason property value. The reason property
     * @return string|null
    */
    public function getReason(): ?string {
        return $this->reason;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfPrimitiveValues('checkIds', $this->getCheckIds());
        $writer->writeStringValue('reason', $this->getReason());
    }

    /**
     * Sets the checkIds property value. The checkIds property
     * @param array<string>|null $value Value to set for the checkIds property.
    */
    public function setCheckIds(?array $value): void {
        $this->checkIds = $value;
    }

    /**
     * Sets the reason property value. The reason property
     * @param string|null $value Value to set for the reason property.
    */
    public function setReason(?string $value): void {
        $this->reason = $value;
    }

}
