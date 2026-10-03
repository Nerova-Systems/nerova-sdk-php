<?php

namespace Nerova\Sdk\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ReplaceTenantV1ConnectionCredentialRequest implements Parsable 
{
    /**
     * @var TenantV1SalonBridgeCredential|null $credential The credential property
    */
    private ?TenantV1SalonBridgeCredential $credential = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ReplaceTenantV1ConnectionCredentialRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ReplaceTenantV1ConnectionCredentialRequest {
        return new ReplaceTenantV1ConnectionCredentialRequest();
    }

    /**
     * Gets the credential property value. The credential property
     * @return TenantV1SalonBridgeCredential|null
    */
    public function getCredential(): ?TenantV1SalonBridgeCredential {
        return $this->credential;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'credential' => fn(ParseNode $n) => $o->setCredential($n->getObjectValue([TenantV1SalonBridgeCredential::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('credential', $this->getCredential());
    }

    /**
     * Sets the credential property value. The credential property
     * @param TenantV1SalonBridgeCredential|null $value Value to set for the credential property.
    */
    public function setCredential(?TenantV1SalonBridgeCredential $value): void {
        $this->credential = $value;
    }

}
