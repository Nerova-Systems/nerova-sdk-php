<?php

namespace Nerova\Sdk\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PartnerRuntimeConversationPage implements Parsable 
{
    /**
     * @var string|null $availability The availability property
    */
    private ?string $availability = null;
    
    /**
     * @var array<PartnerRuntimeConversationItem>|null $items The items property
    */
    private ?array $items = null;
    
    /**
     * @var string|null $nextCursor The nextCursor property
    */
    private ?string $nextCursor = null;
    
    /**
     * @var int|null $transcriptRetentionDays The transcriptRetentionDays property
    */
    private ?int $transcriptRetentionDays = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PartnerRuntimeConversationPage
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PartnerRuntimeConversationPage {
        return new PartnerRuntimeConversationPage();
    }

    /**
     * Gets the availability property value. The availability property
     * @return string|null
    */
    public function getAvailability(): ?string {
        return $this->availability;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'availability' => fn(ParseNode $n) => $o->setAvailability($n->getStringValue()),
            'items' => fn(ParseNode $n) => $o->setItems($n->getCollectionOfObjectValues([PartnerRuntimeConversationItem::class, 'createFromDiscriminatorValue'])),
            'nextCursor' => fn(ParseNode $n) => $o->setNextCursor($n->getStringValue()),
            'transcriptRetentionDays' => fn(ParseNode $n) => $o->setTranscriptRetentionDays($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the items property value. The items property
     * @return array<PartnerRuntimeConversationItem>|null
    */
    public function getItems(): ?array {
        return $this->items;
    }

    /**
     * Gets the nextCursor property value. The nextCursor property
     * @return string|null
    */
    public function getNextCursor(): ?string {
        return $this->nextCursor;
    }

    /**
     * Gets the transcriptRetentionDays property value. The transcriptRetentionDays property
     * @return int|null
    */
    public function getTranscriptRetentionDays(): ?int {
        return $this->transcriptRetentionDays;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('availability', $this->getAvailability());
        $writer->writeCollectionOfObjectValues('items', $this->getItems());
        $writer->writeStringValue('nextCursor', $this->getNextCursor());
        $writer->writeIntegerValue('transcriptRetentionDays', $this->getTranscriptRetentionDays());
    }

    /**
     * Sets the availability property value. The availability property
     * @param string|null $value Value to set for the availability property.
    */
    public function setAvailability(?string $value): void {
        $this->availability = $value;
    }

    /**
     * Sets the items property value. The items property
     * @param array<PartnerRuntimeConversationItem>|null $value Value to set for the items property.
    */
    public function setItems(?array $value): void {
        $this->items = $value;
    }

    /**
     * Sets the nextCursor property value. The nextCursor property
     * @param string|null $value Value to set for the nextCursor property.
    */
    public function setNextCursor(?string $value): void {
        $this->nextCursor = $value;
    }

    /**
     * Sets the transcriptRetentionDays property value. The transcriptRetentionDays property
     * @param int|null $value Value to set for the transcriptRetentionDays property.
    */
    public function setTranscriptRetentionDays(?int $value): void {
        $this->transcriptRetentionDays = $value;
    }

}
