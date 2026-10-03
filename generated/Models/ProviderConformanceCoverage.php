<?php

namespace Nerova\Sdk\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ProviderConformanceCoverage implements Parsable 
{
    /**
     * @var array<ProviderConformanceCoverageEntry>|null $errorPaths The errorPaths property
    */
    private ?array $errorPaths = null;
    
    /**
     * @var int|null $errorPathsPassed The errorPathsPassed property
    */
    private ?int $errorPathsPassed = null;
    
    /**
     * @var int|null $errorPathsTotal The errorPathsTotal property
    */
    private ?int $errorPathsTotal = null;
    
    /**
     * @var array<ProviderConformanceCoverageEntry>|null $operations The operations property
    */
    private ?array $operations = null;
    
    /**
     * @var int|null $operationsPassed The operationsPassed property
    */
    private ?int $operationsPassed = null;
    
    /**
     * @var int|null $operationsTotal The operationsTotal property
    */
    private ?int $operationsTotal = null;
    
    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ProviderConformanceCoverage
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ProviderConformanceCoverage {
        return new ProviderConformanceCoverage();
    }

    /**
     * Gets the errorPaths property value. The errorPaths property
     * @return array<ProviderConformanceCoverageEntry>|null
    */
    public function getErrorPaths(): ?array {
        return $this->errorPaths;
    }

    /**
     * Gets the errorPathsPassed property value. The errorPathsPassed property
     * @return int|null
    */
    public function getErrorPathsPassed(): ?int {
        return $this->errorPathsPassed;
    }

    /**
     * Gets the errorPathsTotal property value. The errorPathsTotal property
     * @return int|null
    */
    public function getErrorPathsTotal(): ?int {
        return $this->errorPathsTotal;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'errorPaths' => fn(ParseNode $n) => $o->setErrorPaths($n->getCollectionOfObjectValues([ProviderConformanceCoverageEntry::class, 'createFromDiscriminatorValue'])),
            'errorPathsPassed' => fn(ParseNode $n) => $o->setErrorPathsPassed($n->getIntegerValue()),
            'errorPathsTotal' => fn(ParseNode $n) => $o->setErrorPathsTotal($n->getIntegerValue()),
            'operations' => fn(ParseNode $n) => $o->setOperations($n->getCollectionOfObjectValues([ProviderConformanceCoverageEntry::class, 'createFromDiscriminatorValue'])),
            'operationsPassed' => fn(ParseNode $n) => $o->setOperationsPassed($n->getIntegerValue()),
            'operationsTotal' => fn(ParseNode $n) => $o->setOperationsTotal($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the operations property value. The operations property
     * @return array<ProviderConformanceCoverageEntry>|null
    */
    public function getOperations(): ?array {
        return $this->operations;
    }

    /**
     * Gets the operationsPassed property value. The operationsPassed property
     * @return int|null
    */
    public function getOperationsPassed(): ?int {
        return $this->operationsPassed;
    }

    /**
     * Gets the operationsTotal property value. The operationsTotal property
     * @return int|null
    */
    public function getOperationsTotal(): ?int {
        return $this->operationsTotal;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('errorPaths', $this->getErrorPaths());
        $writer->writeIntegerValue('errorPathsPassed', $this->getErrorPathsPassed());
        $writer->writeIntegerValue('errorPathsTotal', $this->getErrorPathsTotal());
        $writer->writeCollectionOfObjectValues('operations', $this->getOperations());
        $writer->writeIntegerValue('operationsPassed', $this->getOperationsPassed());
        $writer->writeIntegerValue('operationsTotal', $this->getOperationsTotal());
    }

    /**
     * Sets the errorPaths property value. The errorPaths property
     * @param array<ProviderConformanceCoverageEntry>|null $value Value to set for the errorPaths property.
    */
    public function setErrorPaths(?array $value): void {
        $this->errorPaths = $value;
    }

    /**
     * Sets the errorPathsPassed property value. The errorPathsPassed property
     * @param int|null $value Value to set for the errorPathsPassed property.
    */
    public function setErrorPathsPassed(?int $value): void {
        $this->errorPathsPassed = $value;
    }

    /**
     * Sets the errorPathsTotal property value. The errorPathsTotal property
     * @param int|null $value Value to set for the errorPathsTotal property.
    */
    public function setErrorPathsTotal(?int $value): void {
        $this->errorPathsTotal = $value;
    }

    /**
     * Sets the operations property value. The operations property
     * @param array<ProviderConformanceCoverageEntry>|null $value Value to set for the operations property.
    */
    public function setOperations(?array $value): void {
        $this->operations = $value;
    }

    /**
     * Sets the operationsPassed property value. The operationsPassed property
     * @param int|null $value Value to set for the operationsPassed property.
    */
    public function setOperationsPassed(?int $value): void {
        $this->operationsPassed = $value;
    }

    /**
     * Sets the operationsTotal property value. The operationsTotal property
     * @param int|null $value Value to set for the operationsTotal property.
    */
    public function setOperationsTotal(?int $value): void {
        $this->operationsTotal = $value;
    }

}
