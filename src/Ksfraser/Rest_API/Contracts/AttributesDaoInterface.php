<?php

namespace Ksfraser\Rest_API\Contracts;

/**
 * Minimal DAO contract for the REST API controllers.
 *
 * A concrete implementation should be injected by the host application.
 */
interface AttributesDaoInterface
{
    /** @return array<int, array<string, mixed>> */
    public function listCategories(): array;

    public function upsertCategory(string $code, string $label, string $description, int $sortOrder, bool $active): void;

    /** @return array<int, array<string, mixed>> */
    public function listValues(int $categoryId): array;

    public function upsertValue(int $categoryId, string $value, string $slug, int $sortOrder, bool $active): void;

    /** @return array<int, array<string, mixed>> */
    public function listAssignments(string $stockId): array;

    public function addAssignment(string $stockId, int $categoryId, int $valueId, int $sortOrder): void;

    public function deleteAssignment(int $id): void;
}