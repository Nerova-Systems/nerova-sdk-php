<?php

namespace Nerova\Sdk\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PartnerMachineContextResponse implements Parsable 
{
    /**
     * @var DateTime|null $assertionExpiresAt The assertionExpiresAt property
    */
    private ?DateTime $assertionExpiresAt = null;
    
    /**
     * @var DateTime|null $assertionIssuedAt The assertionIssuedAt property
    */
    private ?DateTime $assertionIssuedAt = null;
    
    /**
     * @var string|null $correlationId The correlationId property
    */
    private ?string $correlationId = null;
    
    /**
     * @var DateTime|null $entitlementExpiry The entitlementExpiry property
    */
    private ?DateTime $entitlementExpiry = null;
    
    /**
     * @var PartnerEntitlementSource|null $entitlementSource The entitlementSource property
    */
    private ?PartnerEntitlementSource $entitlementSource = null;
    
    /**
     * @var PartnerEntitlementState|null $entitlementState The entitlementState property
    */
    private ?PartnerEntitlementState $entitlementState = null;
    
    /**
     * @var int|null $entitlementVersion The entitlementVersion property
    */
    private ?int $entitlementVersion = null;
    
    /**
     * @var PartnerApiEnvironment|null $environment The environment property
    */
    private ?PartnerApiEnvironment $environment = null;
    
    /**
     * @var array<PartnerGrant>|null $grantedScopes The grantedScopes property
    */
    private ?array $grantedScopes = null;
    
    /**
     * @var string|null $keyId The keyId property
    */
    private ?string $keyId = null;
    
    /**
     * @var string|null $organizationId The organizationId property
    */
    private ?string $organizationId = null;
    
    /**
     * @var string|null $permissionCatalogVersion The permissionCatalogVersion property
    */
    private ?string $permissionCatalogVersion = null;
    
    /**
     * @var PartnerProductionDecision|null $productionDecision The productionDecision property
    */
    private ?PartnerProductionDecision $productionDecision = null;
    
    /**
     * @var string|null $subject The subject property
    */
    private ?string $subject = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PartnerMachineContextResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PartnerMachineContextResponse {
        return new PartnerMachineContextResponse();
    }

    /**
     * Gets the assertionExpiresAt property value. The assertionExpiresAt property
     * @return DateTime|null
    */
    public function getAssertionExpiresAt(): ?DateTime {
        return $this->assertionExpiresAt;
    }

    /**
     * Gets the assertionIssuedAt property value. The assertionIssuedAt property
     * @return DateTime|null
    */
    public function getAssertionIssuedAt(): ?DateTime {
        return $this->assertionIssuedAt;
    }

    /**
     * Gets the correlationId property value. The correlationId property
     * @return string|null
    */
    public function getCorrelationId(): ?string {
        return $this->correlationId;
    }

    /**
     * Gets the entitlementExpiry property value. The entitlementExpiry property
     * @return DateTime|null
    */
    public function getEntitlementExpiry(): ?DateTime {
        return $this->entitlementExpiry;
    }

    /**
     * Gets the entitlementSource property value. The entitlementSource property
     * @return PartnerEntitlementSource|null
    */
    public function getEntitlementSource(): ?PartnerEntitlementSource {
        return $this->entitlementSource;
    }

    /**
     * Gets the entitlementState property value. The entitlementState property
     * @return PartnerEntitlementState|null
    */
    public function getEntitlementState(): ?PartnerEntitlementState {
        return $this->entitlementState;
    }

    /**
     * Gets the entitlementVersion property value. The entitlementVersion property
     * @return int|null
    */
    public function getEntitlementVersion(): ?int {
        return $this->entitlementVersion;
    }

    /**
     * Gets the environment property value. The environment property
     * @return PartnerApiEnvironment|null
    */
    public function getEnvironment(): ?PartnerApiEnvironment {
        return $this->environment;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'assertionExpiresAt' => fn(ParseNode $n) => $o->setAssertionExpiresAt($n->getDateTimeValue()),
            'assertionIssuedAt' => fn(ParseNode $n) => $o->setAssertionIssuedAt($n->getDateTimeValue()),
            'correlationId' => fn(ParseNode $n) => $o->setCorrelationId($n->getStringValue()),
            'entitlementExpiry' => fn(ParseNode $n) => $o->setEntitlementExpiry($n->getDateTimeValue()),
            'entitlementSource' => fn(ParseNode $n) => $o->setEntitlementSource($n->getEnumValue(PartnerEntitlementSource::class)),
            'entitlementState' => fn(ParseNode $n) => $o->setEntitlementState($n->getEnumValue(PartnerEntitlementState::class)),
            'entitlementVersion' => fn(ParseNode $n) => $o->setEntitlementVersion($n->getIntegerValue()),
            'environment' => fn(ParseNode $n) => $o->setEnvironment($n->getEnumValue(PartnerApiEnvironment::class)),
            'grantedScopes' => fn(ParseNode $n) => $o->setGrantedScopes($n->getCollectionOfEnumValues(PartnerGrant::class)),
            'keyId' => fn(ParseNode $n) => $o->setKeyId($n->getStringValue()),
            'organizationId' => fn(ParseNode $n) => $o->setOrganizationId($n->getStringValue()),
            'permissionCatalogVersion' => fn(ParseNode $n) => $o->setPermissionCatalogVersion($n->getStringValue()),
            'productionDecision' => fn(ParseNode $n) => $o->setProductionDecision($n->getEnumValue(PartnerProductionDecision::class)),
            'subject' => fn(ParseNode $n) => $o->setSubject($n->getStringValue()),
        ];
    }

    /**
     * Gets the grantedScopes property value. The grantedScopes property
     * @return array<PartnerGrant>|null
    */
    public function getGrantedScopes(): ?array {
        return $this->grantedScopes;
    }

    /**
     * Gets the keyId property value. The keyId property
     * @return string|null
    */
    public function getKeyId(): ?string {
        return $this->keyId;
    }

    /**
     * Gets the organizationId property value. The organizationId property
     * @return string|null
    */
    public function getOrganizationId(): ?string {
        return $this->organizationId;
    }

    /**
     * Gets the permissionCatalogVersion property value. The permissionCatalogVersion property
     * @return string|null
    */
    public function getPermissionCatalogVersion(): ?string {
        return $this->permissionCatalogVersion;
    }

    /**
     * Gets the productionDecision property value. The productionDecision property
     * @return PartnerProductionDecision|null
    */
    public function getProductionDecision(): ?PartnerProductionDecision {
        return $this->productionDecision;
    }

    /**
     * Gets the subject property value. The subject property
     * @return string|null
    */
    public function getSubject(): ?string {
        return $this->subject;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeDateTimeValue('assertionExpiresAt', $this->getAssertionExpiresAt());
        $writer->writeDateTimeValue('assertionIssuedAt', $this->getAssertionIssuedAt());
        $writer->writeStringValue('correlationId', $this->getCorrelationId());
        $writer->writeDateTimeValue('entitlementExpiry', $this->getEntitlementExpiry());
        $writer->writeEnumValue('entitlementSource', $this->getEntitlementSource());
        $writer->writeEnumValue('entitlementState', $this->getEntitlementState());
        $writer->writeIntegerValue('entitlementVersion', $this->getEntitlementVersion());
        $writer->writeEnumValue('environment', $this->getEnvironment());
        $writer->writeCollectionOfEnumValues('grantedScopes', $this->getGrantedScopes());
        $writer->writeStringValue('keyId', $this->getKeyId());
        $writer->writeStringValue('organizationId', $this->getOrganizationId());
        $writer->writeStringValue('permissionCatalogVersion', $this->getPermissionCatalogVersion());
        $writer->writeEnumValue('productionDecision', $this->getProductionDecision());
        $writer->writeStringValue('subject', $this->getSubject());
    }

    /**
     * Sets the assertionExpiresAt property value. The assertionExpiresAt property
     * @param DateTime|null $value Value to set for the assertionExpiresAt property.
    */
    public function setAssertionExpiresAt(?DateTime $value): void {
        $this->assertionExpiresAt = $value;
    }

    /**
     * Sets the assertionIssuedAt property value. The assertionIssuedAt property
     * @param DateTime|null $value Value to set for the assertionIssuedAt property.
    */
    public function setAssertionIssuedAt(?DateTime $value): void {
        $this->assertionIssuedAt = $value;
    }

    /**
     * Sets the correlationId property value. The correlationId property
     * @param string|null $value Value to set for the correlationId property.
    */
    public function setCorrelationId(?string $value): void {
        $this->correlationId = $value;
    }

    /**
     * Sets the entitlementExpiry property value. The entitlementExpiry property
     * @param DateTime|null $value Value to set for the entitlementExpiry property.
    */
    public function setEntitlementExpiry(?DateTime $value): void {
        $this->entitlementExpiry = $value;
    }

    /**
     * Sets the entitlementSource property value. The entitlementSource property
     * @param PartnerEntitlementSource|null $value Value to set for the entitlementSource property.
    */
    public function setEntitlementSource(?PartnerEntitlementSource $value): void {
        $this->entitlementSource = $value;
    }

    /**
     * Sets the entitlementState property value. The entitlementState property
     * @param PartnerEntitlementState|null $value Value to set for the entitlementState property.
    */
    public function setEntitlementState(?PartnerEntitlementState $value): void {
        $this->entitlementState = $value;
    }

    /**
     * Sets the entitlementVersion property value. The entitlementVersion property
     * @param int|null $value Value to set for the entitlementVersion property.
    */
    public function setEntitlementVersion(?int $value): void {
        $this->entitlementVersion = $value;
    }

    /**
     * Sets the environment property value. The environment property
     * @param PartnerApiEnvironment|null $value Value to set for the environment property.
    */
    public function setEnvironment(?PartnerApiEnvironment $value): void {
        $this->environment = $value;
    }

    /**
     * Sets the grantedScopes property value. The grantedScopes property
     * @param array<PartnerGrant>|null $value Value to set for the grantedScopes property.
    */
    public function setGrantedScopes(?array $value): void {
        $this->grantedScopes = $value;
    }

    /**
     * Sets the keyId property value. The keyId property
     * @param string|null $value Value to set for the keyId property.
    */
    public function setKeyId(?string $value): void {
        $this->keyId = $value;
    }

    /**
     * Sets the organizationId property value. The organizationId property
     * @param string|null $value Value to set for the organizationId property.
    */
    public function setOrganizationId(?string $value): void {
        $this->organizationId = $value;
    }

    /**
     * Sets the permissionCatalogVersion property value. The permissionCatalogVersion property
     * @param string|null $value Value to set for the permissionCatalogVersion property.
    */
    public function setPermissionCatalogVersion(?string $value): void {
        $this->permissionCatalogVersion = $value;
    }

    /**
     * Sets the productionDecision property value. The productionDecision property
     * @param PartnerProductionDecision|null $value Value to set for the productionDecision property.
    */
    public function setProductionDecision(?PartnerProductionDecision $value): void {
        $this->productionDecision = $value;
    }

    /**
     * Sets the subject property value. The subject property
     * @param string|null $value Value to set for the subject property.
    */
    public function setSubject(?string $value): void {
        $this->subject = $value;
    }

}
