<?php

namespace Nerova\Sdk\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TenantV1ConnectionVerificationResponse implements Parsable 
{
    /**
     * @var TenantV1ConnectionResponse|null $connection The connection property
    */
    private ?TenantV1ConnectionResponse $connection = null;
    
    /**
     * @var ProviderConformanceReport|null $report The report property
    */
    private ?ProviderConformanceReport $report = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TenantV1ConnectionVerificationResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TenantV1ConnectionVerificationResponse {
        return new TenantV1ConnectionVerificationResponse();
    }

    /**
     * Gets the connection property value. The connection property
     * @return TenantV1ConnectionResponse|null
    */
    public function getConnection(): ?TenantV1ConnectionResponse {
        return $this->connection;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'connection' => fn(ParseNode $n) => $o->setConnection($n->getObjectValue([TenantV1ConnectionResponse::class, 'createFromDiscriminatorValue'])),
            'report' => fn(ParseNode $n) => $o->setReport($n->getObjectValue([ProviderConformanceReport::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the report property value. The report property
     * @return ProviderConformanceReport|null
    */
    public function getReport(): ?ProviderConformanceReport {
        return $this->report;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('connection', $this->getConnection());
        $writer->writeObjectValue('report', $this->getReport());
    }

    /**
     * Sets the connection property value. The connection property
     * @param TenantV1ConnectionResponse|null $value Value to set for the connection property.
    */
    public function setConnection(?TenantV1ConnectionResponse $value): void {
        $this->connection = $value;
    }

    /**
     * Sets the report property value. The report property
     * @param ProviderConformanceReport|null $value Value to set for the report property.
    */
    public function setReport(?ProviderConformanceReport $value): void {
        $this->report = $value;
    }

}
