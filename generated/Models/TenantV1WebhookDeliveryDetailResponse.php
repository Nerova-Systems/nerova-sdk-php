<?php

namespace Nerova\Sdk\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TenantV1WebhookDeliveryDetailResponse implements Parsable 
{
    /**
     * @var array<TenantV1WebhookDeliveryAttempt>|null $attempts The attempts property
    */
    private ?array $attempts = null;
    
    /**
     * @var TenantV1WebhookDeliveryResponse|null $delivery The delivery property
    */
    private ?TenantV1WebhookDeliveryResponse $delivery = null;
    
    /**
     * @var string|null $payloadJson The payloadJson property
    */
    private ?string $payloadJson = null;
    
    /**
     * @var string|null $responseBody The responseBody property
    */
    private ?string $responseBody = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TenantV1WebhookDeliveryDetailResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TenantV1WebhookDeliveryDetailResponse {
        return new TenantV1WebhookDeliveryDetailResponse();
    }

    /**
     * Gets the attempts property value. The attempts property
     * @return array<TenantV1WebhookDeliveryAttempt>|null
    */
    public function getAttempts(): ?array {
        return $this->attempts;
    }

    /**
     * Gets the delivery property value. The delivery property
     * @return TenantV1WebhookDeliveryResponse|null
    */
    public function getDelivery(): ?TenantV1WebhookDeliveryResponse {
        return $this->delivery;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'attempts' => fn(ParseNode $n) => $o->setAttempts($n->getCollectionOfObjectValues([TenantV1WebhookDeliveryAttempt::class, 'createFromDiscriminatorValue'])),
            'delivery' => fn(ParseNode $n) => $o->setDelivery($n->getObjectValue([TenantV1WebhookDeliveryResponse::class, 'createFromDiscriminatorValue'])),
            'payloadJson' => fn(ParseNode $n) => $o->setPayloadJson($n->getStringValue()),
            'responseBody' => fn(ParseNode $n) => $o->setResponseBody($n->getStringValue()),
        ];
    }

    /**
     * Gets the payloadJson property value. The payloadJson property
     * @return string|null
    */
    public function getPayloadJson(): ?string {
        return $this->payloadJson;
    }

    /**
     * Gets the responseBody property value. The responseBody property
     * @return string|null
    */
    public function getResponseBody(): ?string {
        return $this->responseBody;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('attempts', $this->getAttempts());
        $writer->writeObjectValue('delivery', $this->getDelivery());
        $writer->writeStringValue('payloadJson', $this->getPayloadJson());
        $writer->writeStringValue('responseBody', $this->getResponseBody());
    }

    /**
     * Sets the attempts property value. The attempts property
     * @param array<TenantV1WebhookDeliveryAttempt>|null $value Value to set for the attempts property.
    */
    public function setAttempts(?array $value): void {
        $this->attempts = $value;
    }

    /**
     * Sets the delivery property value. The delivery property
     * @param TenantV1WebhookDeliveryResponse|null $value Value to set for the delivery property.
    */
    public function setDelivery(?TenantV1WebhookDeliveryResponse $value): void {
        $this->delivery = $value;
    }

    /**
     * Sets the payloadJson property value. The payloadJson property
     * @param string|null $value Value to set for the payloadJson property.
    */
    public function setPayloadJson(?string $value): void {
        $this->payloadJson = $value;
    }

    /**
     * Sets the responseBody property value. The responseBody property
     * @param string|null $value Value to set for the responseBody property.
    */
    public function setResponseBody(?string $value): void {
        $this->responseBody = $value;
    }

}
