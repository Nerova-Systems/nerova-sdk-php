<?php

namespace Nerova\Sdk\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ProviderConformanceReport implements Parsable 
{
    /**
     * @var array<ProviderConformanceCertificationBlocker>|null $certificationBlockers The certificationBlockers property
    */
    private ?array $certificationBlockers = null;
    
    /**
     * @var bool|null $certified The certified property
    */
    private ?bool $certified = null;
    
    /**
     * @var array<ProviderConformanceCheck>|null $checks The checks property
    */
    private ?array $checks = null;
    
    /**
     * @var ProviderConformanceCoverage|null $coverage The coverage property
    */
    private ?ProviderConformanceCoverage $coverage = null;
    
    /**
     * @var string|null $observedContractVersion The observedContractVersion property
    */
    private ?string $observedContractVersion = null;
    
    /**
     * @var string|null $providerName The providerName property
    */
    private ?string $providerName = null;
    
    /**
     * @var DateTime|null $ranAt The ranAt property
    */
    private ?DateTime $ranAt = null;
    
    /**
     * @var array<ExternalBookingCapability>|null $verifiedCapabilities The verifiedCapabilities property
    */
    private ?array $verifiedCapabilities = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ProviderConformanceReport
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ProviderConformanceReport {
        return new ProviderConformanceReport();
    }

    /**
     * Gets the certificationBlockers property value. The certificationBlockers property
     * @return array<ProviderConformanceCertificationBlocker>|null
    */
    public function getCertificationBlockers(): ?array {
        return $this->certificationBlockers;
    }

    /**
     * Gets the certified property value. The certified property
     * @return bool|null
    */
    public function getCertified(): ?bool {
        return $this->certified;
    }

    /**
     * Gets the checks property value. The checks property
     * @return array<ProviderConformanceCheck>|null
    */
    public function getChecks(): ?array {
        return $this->checks;
    }

    /**
     * Gets the coverage property value. The coverage property
     * @return ProviderConformanceCoverage|null
    */
    public function getCoverage(): ?ProviderConformanceCoverage {
        return $this->coverage;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'certificationBlockers' => fn(ParseNode $n) => $o->setCertificationBlockers($n->getCollectionOfObjectValues([ProviderConformanceCertificationBlocker::class, 'createFromDiscriminatorValue'])),
            'certified' => fn(ParseNode $n) => $o->setCertified($n->getBooleanValue()),
            'checks' => fn(ParseNode $n) => $o->setChecks($n->getCollectionOfObjectValues([ProviderConformanceCheck::class, 'createFromDiscriminatorValue'])),
            'coverage' => fn(ParseNode $n) => $o->setCoverage($n->getObjectValue([ProviderConformanceCoverage::class, 'createFromDiscriminatorValue'])),
            'observedContractVersion' => fn(ParseNode $n) => $o->setObservedContractVersion($n->getStringValue()),
            'providerName' => fn(ParseNode $n) => $o->setProviderName($n->getStringValue()),
            'ranAt' => fn(ParseNode $n) => $o->setRanAt($n->getDateTimeValue()),
            'verifiedCapabilities' => fn(ParseNode $n) => $o->setVerifiedCapabilities($n->getCollectionOfEnumValues(ExternalBookingCapability::class)),
        ];
    }

    /**
     * Gets the observedContractVersion property value. The observedContractVersion property
     * @return string|null
    */
    public function getObservedContractVersion(): ?string {
        return $this->observedContractVersion;
    }

    /**
     * Gets the providerName property value. The providerName property
     * @return string|null
    */
    public function getProviderName(): ?string {
        return $this->providerName;
    }

    /**
     * Gets the ranAt property value. The ranAt property
     * @return DateTime|null
    */
    public function getRanAt(): ?DateTime {
        return $this->ranAt;
    }

    /**
     * Gets the verifiedCapabilities property value. The verifiedCapabilities property
     * @return array<ExternalBookingCapability>|null
    */
    public function getVerifiedCapabilities(): ?array {
        return $this->verifiedCapabilities;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('certificationBlockers', $this->getCertificationBlockers());
        $writer->writeBooleanValue('certified', $this->getCertified());
        $writer->writeCollectionOfObjectValues('checks', $this->getChecks());
        $writer->writeObjectValue('coverage', $this->getCoverage());
        $writer->writeStringValue('observedContractVersion', $this->getObservedContractVersion());
        $writer->writeStringValue('providerName', $this->getProviderName());
        $writer->writeDateTimeValue('ranAt', $this->getRanAt());
        $writer->writeCollectionOfEnumValues('verifiedCapabilities', $this->getVerifiedCapabilities());
    }

    /**
     * Sets the certificationBlockers property value. The certificationBlockers property
     * @param array<ProviderConformanceCertificationBlocker>|null $value Value to set for the certificationBlockers property.
    */
    public function setCertificationBlockers(?array $value): void {
        $this->certificationBlockers = $value;
    }

    /**
     * Sets the certified property value. The certified property
     * @param bool|null $value Value to set for the certified property.
    */
    public function setCertified(?bool $value): void {
        $this->certified = $value;
    }

    /**
     * Sets the checks property value. The checks property
     * @param array<ProviderConformanceCheck>|null $value Value to set for the checks property.
    */
    public function setChecks(?array $value): void {
        $this->checks = $value;
    }

    /**
     * Sets the coverage property value. The coverage property
     * @param ProviderConformanceCoverage|null $value Value to set for the coverage property.
    */
    public function setCoverage(?ProviderConformanceCoverage $value): void {
        $this->coverage = $value;
    }

    /**
     * Sets the observedContractVersion property value. The observedContractVersion property
     * @param string|null $value Value to set for the observedContractVersion property.
    */
    public function setObservedContractVersion(?string $value): void {
        $this->observedContractVersion = $value;
    }

    /**
     * Sets the providerName property value. The providerName property
     * @param string|null $value Value to set for the providerName property.
    */
    public function setProviderName(?string $value): void {
        $this->providerName = $value;
    }

    /**
     * Sets the ranAt property value. The ranAt property
     * @param DateTime|null $value Value to set for the ranAt property.
    */
    public function setRanAt(?DateTime $value): void {
        $this->ranAt = $value;
    }

    /**
     * Sets the verifiedCapabilities property value. The verifiedCapabilities property
     * @param array<ExternalBookingCapability>|null $value Value to set for the verifiedCapabilities property.
    */
    public function setVerifiedCapabilities(?array $value): void {
        $this->verifiedCapabilities = $value;
    }

}
