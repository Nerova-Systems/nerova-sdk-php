<?php

namespace Nerova\Sdk\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SendPartnerNotificationCommand implements Parsable 
{
    /**
     * @var PartnerRuntimeActorRequest|null $actor The actor property
    */
    private ?PartnerRuntimeActorRequest $actor = null;
    
    /**
     * @var string|null $businessName The businessName property
    */
    private ?string $businessName = null;
    
    /**
     * @var string|null $clientName The clientName property
    */
    private ?string $clientName = null;
    
    /**
     * @var string|null $externalReference The externalReference property
    */
    private ?string $externalReference = null;
    
    /**
     * @var string|null $message The message property
    */
    private ?string $message = null;
    
    /**
     * @var string|null $newWhen The newWhen property
    */
    private ?string $newWhen = null;
    
    /**
     * @var string|null $serviceName The serviceName property
    */
    private ?string $serviceName = null;
    
    /**
     * @var string|null $to The to property
    */
    private ?string $to = null;
    
    /**
     * @var string|null $type The type property
    */
    private ?string $type = null;
    
    /**
     * @var string|null $when The when property
    */
    private ?string $when = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SendPartnerNotificationCommand
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SendPartnerNotificationCommand {
        return new SendPartnerNotificationCommand();
    }

    /**
     * Gets the actor property value. The actor property
     * @return PartnerRuntimeActorRequest|null
    */
    public function getActor(): ?PartnerRuntimeActorRequest {
        return $this->actor;
    }

    /**
     * Gets the businessName property value. The businessName property
     * @return string|null
    */
    public function getBusinessName(): ?string {
        return $this->businessName;
    }

    /**
     * Gets the clientName property value. The clientName property
     * @return string|null
    */
    public function getClientName(): ?string {
        return $this->clientName;
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
            'actor' => fn(ParseNode $n) => $o->setActor($n->getObjectValue([PartnerRuntimeActorRequest::class, 'createFromDiscriminatorValue'])),
            'businessName' => fn(ParseNode $n) => $o->setBusinessName($n->getStringValue()),
            'clientName' => fn(ParseNode $n) => $o->setClientName($n->getStringValue()),
            'externalReference' => fn(ParseNode $n) => $o->setExternalReference($n->getStringValue()),
            'message' => fn(ParseNode $n) => $o->setMessage($n->getStringValue()),
            'newWhen' => fn(ParseNode $n) => $o->setNewWhen($n->getStringValue()),
            'serviceName' => fn(ParseNode $n) => $o->setServiceName($n->getStringValue()),
            'to' => fn(ParseNode $n) => $o->setTo($n->getStringValue()),
            'type' => fn(ParseNode $n) => $o->setType($n->getStringValue()),
            'when' => fn(ParseNode $n) => $o->setWhen($n->getStringValue()),
        ];
    }

    /**
     * Gets the message property value. The message property
     * @return string|null
    */
    public function getMessage(): ?string {
        return $this->message;
    }

    /**
     * Gets the newWhen property value. The newWhen property
     * @return string|null
    */
    public function getNewWhen(): ?string {
        return $this->newWhen;
    }

    /**
     * Gets the serviceName property value. The serviceName property
     * @return string|null
    */
    public function getServiceName(): ?string {
        return $this->serviceName;
    }

    /**
     * Gets the to property value. The to property
     * @return string|null
    */
    public function getTo(): ?string {
        return $this->to;
    }

    /**
     * Gets the type property value. The type property
     * @return string|null
    */
    public function getType(): ?string {
        return $this->type;
    }

    /**
     * Gets the when property value. The when property
     * @return string|null
    */
    public function getWhen(): ?string {
        return $this->when;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('actor', $this->getActor());
        $writer->writeStringValue('businessName', $this->getBusinessName());
        $writer->writeStringValue('clientName', $this->getClientName());
        $writer->writeStringValue('externalReference', $this->getExternalReference());
        $writer->writeStringValue('message', $this->getMessage());
        $writer->writeStringValue('newWhen', $this->getNewWhen());
        $writer->writeStringValue('serviceName', $this->getServiceName());
        $writer->writeStringValue('to', $this->getTo());
        $writer->writeStringValue('type', $this->getType());
        $writer->writeStringValue('when', $this->getWhen());
    }

    /**
     * Sets the actor property value. The actor property
     * @param PartnerRuntimeActorRequest|null $value Value to set for the actor property.
    */
    public function setActor(?PartnerRuntimeActorRequest $value): void {
        $this->actor = $value;
    }

    /**
     * Sets the businessName property value. The businessName property
     * @param string|null $value Value to set for the businessName property.
    */
    public function setBusinessName(?string $value): void {
        $this->businessName = $value;
    }

    /**
     * Sets the clientName property value. The clientName property
     * @param string|null $value Value to set for the clientName property.
    */
    public function setClientName(?string $value): void {
        $this->clientName = $value;
    }

    /**
     * Sets the externalReference property value. The externalReference property
     * @param string|null $value Value to set for the externalReference property.
    */
    public function setExternalReference(?string $value): void {
        $this->externalReference = $value;
    }

    /**
     * Sets the message property value. The message property
     * @param string|null $value Value to set for the message property.
    */
    public function setMessage(?string $value): void {
        $this->message = $value;
    }

    /**
     * Sets the newWhen property value. The newWhen property
     * @param string|null $value Value to set for the newWhen property.
    */
    public function setNewWhen(?string $value): void {
        $this->newWhen = $value;
    }

    /**
     * Sets the serviceName property value. The serviceName property
     * @param string|null $value Value to set for the serviceName property.
    */
    public function setServiceName(?string $value): void {
        $this->serviceName = $value;
    }

    /**
     * Sets the to property value. The to property
     * @param string|null $value Value to set for the to property.
    */
    public function setTo(?string $value): void {
        $this->to = $value;
    }

    /**
     * Sets the type property value. The type property
     * @param string|null $value Value to set for the type property.
    */
    public function setType(?string $value): void {
        $this->type = $value;
    }

    /**
     * Sets the when property value. The when property
     * @param string|null $value Value to set for the when property.
    */
    public function setWhen(?string $value): void {
        $this->when = $value;
    }

}
