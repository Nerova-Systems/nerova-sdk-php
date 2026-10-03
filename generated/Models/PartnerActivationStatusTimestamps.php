<?php

namespace Nerova\Sdk\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PartnerActivationStatusTimestamps implements Parsable 
{
    /**
     * @var DateTime|null $activatedAt The activatedAt property
    */
    private ?DateTime $activatedAt = null;
    
    /**
     * @var DateTime|null $deactivatedAt The deactivatedAt property
    */
    private ?DateTime $deactivatedAt = null;
    
    /**
     * @var DateTime|null $identityConfirmedAt The identityConfirmedAt property
    */
    private ?DateTime $identityConfirmedAt = null;
    
    /**
     * @var DateTime|null $lastConnectionSessionAt The lastConnectionSessionAt property
    */
    private ?DateTime $lastConnectionSessionAt = null;
    
    /**
     * @var DateTime|null $lastReconciledAt The lastReconciledAt property
    */
    private ?DateTime $lastReconciledAt = null;
    
    /**
     * @var DateTime|null $pausedAt The pausedAt property
    */
    private ?DateTime $pausedAt = null;
    
    /**
     * @var DateTime|null $provisionedAt The provisionedAt property
    */
    private ?DateTime $provisionedAt = null;
    
    /**
     * @var DateTime|null $suspendedAt The suspendedAt property
    */
    private ?DateTime $suspendedAt = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PartnerActivationStatusTimestamps
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PartnerActivationStatusTimestamps {
        return new PartnerActivationStatusTimestamps();
    }

    /**
     * Gets the activatedAt property value. The activatedAt property
     * @return DateTime|null
    */
    public function getActivatedAt(): ?DateTime {
        return $this->activatedAt;
    }

    /**
     * Gets the deactivatedAt property value. The deactivatedAt property
     * @return DateTime|null
    */
    public function getDeactivatedAt(): ?DateTime {
        return $this->deactivatedAt;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'activatedAt' => fn(ParseNode $n) => $o->setActivatedAt($n->getDateTimeValue()),
            'deactivatedAt' => fn(ParseNode $n) => $o->setDeactivatedAt($n->getDateTimeValue()),
            'identityConfirmedAt' => fn(ParseNode $n) => $o->setIdentityConfirmedAt($n->getDateTimeValue()),
            'lastConnectionSessionAt' => fn(ParseNode $n) => $o->setLastConnectionSessionAt($n->getDateTimeValue()),
            'lastReconciledAt' => fn(ParseNode $n) => $o->setLastReconciledAt($n->getDateTimeValue()),
            'pausedAt' => fn(ParseNode $n) => $o->setPausedAt($n->getDateTimeValue()),
            'provisionedAt' => fn(ParseNode $n) => $o->setProvisionedAt($n->getDateTimeValue()),
            'suspendedAt' => fn(ParseNode $n) => $o->setSuspendedAt($n->getDateTimeValue()),
        ];
    }

    /**
     * Gets the identityConfirmedAt property value. The identityConfirmedAt property
     * @return DateTime|null
    */
    public function getIdentityConfirmedAt(): ?DateTime {
        return $this->identityConfirmedAt;
    }

    /**
     * Gets the lastConnectionSessionAt property value. The lastConnectionSessionAt property
     * @return DateTime|null
    */
    public function getLastConnectionSessionAt(): ?DateTime {
        return $this->lastConnectionSessionAt;
    }

    /**
     * Gets the lastReconciledAt property value. The lastReconciledAt property
     * @return DateTime|null
    */
    public function getLastReconciledAt(): ?DateTime {
        return $this->lastReconciledAt;
    }

    /**
     * Gets the pausedAt property value. The pausedAt property
     * @return DateTime|null
    */
    public function getPausedAt(): ?DateTime {
        return $this->pausedAt;
    }

    /**
     * Gets the provisionedAt property value. The provisionedAt property
     * @return DateTime|null
    */
    public function getProvisionedAt(): ?DateTime {
        return $this->provisionedAt;
    }

    /**
     * Gets the suspendedAt property value. The suspendedAt property
     * @return DateTime|null
    */
    public function getSuspendedAt(): ?DateTime {
        return $this->suspendedAt;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeDateTimeValue('activatedAt', $this->getActivatedAt());
        $writer->writeDateTimeValue('deactivatedAt', $this->getDeactivatedAt());
        $writer->writeDateTimeValue('identityConfirmedAt', $this->getIdentityConfirmedAt());
        $writer->writeDateTimeValue('lastConnectionSessionAt', $this->getLastConnectionSessionAt());
        $writer->writeDateTimeValue('lastReconciledAt', $this->getLastReconciledAt());
        $writer->writeDateTimeValue('pausedAt', $this->getPausedAt());
        $writer->writeDateTimeValue('provisionedAt', $this->getProvisionedAt());
        $writer->writeDateTimeValue('suspendedAt', $this->getSuspendedAt());
    }

    /**
     * Sets the activatedAt property value. The activatedAt property
     * @param DateTime|null $value Value to set for the activatedAt property.
    */
    public function setActivatedAt(?DateTime $value): void {
        $this->activatedAt = $value;
    }

    /**
     * Sets the deactivatedAt property value. The deactivatedAt property
     * @param DateTime|null $value Value to set for the deactivatedAt property.
    */
    public function setDeactivatedAt(?DateTime $value): void {
        $this->deactivatedAt = $value;
    }

    /**
     * Sets the identityConfirmedAt property value. The identityConfirmedAt property
     * @param DateTime|null $value Value to set for the identityConfirmedAt property.
    */
    public function setIdentityConfirmedAt(?DateTime $value): void {
        $this->identityConfirmedAt = $value;
    }

    /**
     * Sets the lastConnectionSessionAt property value. The lastConnectionSessionAt property
     * @param DateTime|null $value Value to set for the lastConnectionSessionAt property.
    */
    public function setLastConnectionSessionAt(?DateTime $value): void {
        $this->lastConnectionSessionAt = $value;
    }

    /**
     * Sets the lastReconciledAt property value. The lastReconciledAt property
     * @param DateTime|null $value Value to set for the lastReconciledAt property.
    */
    public function setLastReconciledAt(?DateTime $value): void {
        $this->lastReconciledAt = $value;
    }

    /**
     * Sets the pausedAt property value. The pausedAt property
     * @param DateTime|null $value Value to set for the pausedAt property.
    */
    public function setPausedAt(?DateTime $value): void {
        $this->pausedAt = $value;
    }

    /**
     * Sets the provisionedAt property value. The provisionedAt property
     * @param DateTime|null $value Value to set for the provisionedAt property.
    */
    public function setProvisionedAt(?DateTime $value): void {
        $this->provisionedAt = $value;
    }

    /**
     * Sets the suspendedAt property value. The suspendedAt property
     * @param DateTime|null $value Value to set for the suspendedAt property.
    */
    public function setSuspendedAt(?DateTime $value): void {
        $this->suspendedAt = $value;
    }

}
