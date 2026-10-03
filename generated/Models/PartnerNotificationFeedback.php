<?php

namespace Nerova\Sdk\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PartnerNotificationFeedback implements Parsable 
{
    /**
     * @var string|null $comment The comment property
    */
    private ?string $comment = null;
    
    /**
     * @var string|null $messageId The messageId property
    */
    private ?string $messageId = null;
    
    /**
     * @var int|null $rating The rating property
    */
    private ?int $rating = null;
    
    /**
     * @var DateTime|null $receivedAt The receivedAt property
    */
    private ?DateTime $receivedAt = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PartnerNotificationFeedback
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PartnerNotificationFeedback {
        return new PartnerNotificationFeedback();
    }

    /**
     * Gets the comment property value. The comment property
     * @return string|null
    */
    public function getComment(): ?string {
        return $this->comment;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'comment' => fn(ParseNode $n) => $o->setComment($n->getStringValue()),
            'messageId' => fn(ParseNode $n) => $o->setMessageId($n->getStringValue()),
            'rating' => fn(ParseNode $n) => $o->setRating($n->getIntegerValue()),
            'receivedAt' => fn(ParseNode $n) => $o->setReceivedAt($n->getDateTimeValue()),
        ];
    }

    /**
     * Gets the messageId property value. The messageId property
     * @return string|null
    */
    public function getMessageId(): ?string {
        return $this->messageId;
    }

    /**
     * Gets the rating property value. The rating property
     * @return int|null
    */
    public function getRating(): ?int {
        return $this->rating;
    }

    /**
     * Gets the receivedAt property value. The receivedAt property
     * @return DateTime|null
    */
    public function getReceivedAt(): ?DateTime {
        return $this->receivedAt;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('comment', $this->getComment());
        $writer->writeStringValue('messageId', $this->getMessageId());
        $writer->writeIntegerValue('rating', $this->getRating());
        $writer->writeDateTimeValue('receivedAt', $this->getReceivedAt());
    }

    /**
     * Sets the comment property value. The comment property
     * @param string|null $value Value to set for the comment property.
    */
    public function setComment(?string $value): void {
        $this->comment = $value;
    }

    /**
     * Sets the messageId property value. The messageId property
     * @param string|null $value Value to set for the messageId property.
    */
    public function setMessageId(?string $value): void {
        $this->messageId = $value;
    }

    /**
     * Sets the rating property value. The rating property
     * @param int|null $value Value to set for the rating property.
    */
    public function setRating(?int $value): void {
        $this->rating = $value;
    }

    /**
     * Sets the receivedAt property value. The receivedAt property
     * @param DateTime|null $value Value to set for the receivedAt property.
    */
    public function setReceivedAt(?DateTime $value): void {
        $this->receivedAt = $value;
    }

}
