<?php

namespace Nerova\Sdk\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PartnerActivationConnectionSessionRequest implements Parsable 
{
    /**
     * @var PartnerActivationChannel|null $channel The channel property
    */
    private ?PartnerActivationChannel $channel = null;
    
    /**
     * @var string|null $embedOrigin The embedOrigin property
    */
    private ?string $embedOrigin = null;
    
    /**
     * @var int|null $expectedVersion The expectedVersion property
    */
    private ?int $expectedVersion = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PartnerActivationConnectionSessionRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PartnerActivationConnectionSessionRequest {
        return new PartnerActivationConnectionSessionRequest();
    }

    /**
     * Gets the channel property value. The channel property
     * @return PartnerActivationChannel|null
    */
    public function getChannel(): ?PartnerActivationChannel {
        return $this->channel;
    }

    /**
     * Gets the embedOrigin property value. The embedOrigin property
     * @return string|null
    */
    public function getEmbedOrigin(): ?string {
        return $this->embedOrigin;
    }

    /**
     * Gets the expectedVersion property value. The expectedVersion property
     * @return int|null
    */
    public function getExpectedVersion(): ?int {
        return $this->expectedVersion;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'channel' => fn(ParseNode $n) => $o->setChannel($n->getEnumValue(PartnerActivationChannel::class)),
            'embedOrigin' => fn(ParseNode $n) => $o->setEmbedOrigin($n->getStringValue()),
            'expectedVersion' => fn(ParseNode $n) => $o->setExpectedVersion($n->getIntegerValue()),
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('channel', $this->getChannel());
        $writer->writeStringValue('embedOrigin', $this->getEmbedOrigin());
        $writer->writeIntegerValue('expectedVersion', $this->getExpectedVersion());
    }

    /**
     * Sets the channel property value. The channel property
     * @param PartnerActivationChannel|null $value Value to set for the channel property.
    */
    public function setChannel(?PartnerActivationChannel $value): void {
        $this->channel = $value;
    }

    /**
     * Sets the embedOrigin property value. The embedOrigin property
     * @param string|null $value Value to set for the embedOrigin property.
    */
    public function setEmbedOrigin(?string $value): void {
        $this->embedOrigin = $value;
    }

    /**
     * Sets the expectedVersion property value. The expectedVersion property
     * @param int|null $value Value to set for the expectedVersion property.
    */
    public function setExpectedVersion(?int $value): void {
        $this->expectedVersion = $value;
    }

}
