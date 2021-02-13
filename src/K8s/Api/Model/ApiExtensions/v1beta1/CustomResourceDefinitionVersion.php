<?php

/**
 * This file was automatically generated by k8s/api-generator 0.8.1 for API version v1.15.12
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Model\ApiExtensions\v1beta1;

use K8s\Core\Annotation as Kubernetes;
use K8s\Core\Collection;

/**
 * CustomResourceDefinitionVersion describes a version for CRD.
 */
class CustomResourceDefinitionVersion
{
    /**
     * @Kubernetes\Attribute("additionalPrinterColumns",type="collection",model=CustomResourceColumnDefinition::class)
     * @var iterable|CustomResourceColumnDefinition[]|null
     */
    protected $additionalPrinterColumns = null;

    /**
     * @Kubernetes\Attribute("name",isRequired=true)
     * @var string
     */
    protected $name;

    /**
     * @Kubernetes\Attribute("schema",type="model",model=CustomResourceValidation::class)
     * @var CustomResourceValidation|null
     */
    protected $schema = null;

    /**
     * @Kubernetes\Attribute("served",isRequired=true)
     * @var bool
     */
    protected $served;

    /**
     * @Kubernetes\Attribute("storage",isRequired=true)
     * @var bool
     */
    protected $storage;

    /**
     * @Kubernetes\Attribute("subresources",type="model",model=CustomResourceSubresources::class)
     * @var CustomResourceSubresources|null
     */
    protected $subresources = null;

    /**
     * @param string $name
     * @param bool $served
     * @param bool $storage
     */
    public function __construct(string $name, bool $served, bool $storage)
    {
        $this->name = $name;
        $this->served = $served;
        $this->storage = $storage;
    }

    /**
     * AdditionalPrinterColumns are additional columns shown e.g. in kubectl next to the name. Defaults to
     * a created-at column. Top-level and per-version columns are mutually exclusive. Per-version columns
     * must not all be set to identical values (top-level columns should be used instead) This field is
     * alpha-level and is only honored by servers that enable the CustomResourceWebhookConversion feature.
     * NOTE: CRDs created prior to 1.13 populated the top-level additionalPrinterColumns field by default.
     * To apply an update that changes to per-version additionalPrinterColumns, the top-level
     * additionalPrinterColumns field must be explicitly set to null
     *
     * @return iterable|CustomResourceColumnDefinition[]
     */
    public function getAdditionalPrinterColumns(): ?iterable
    {
        return $this->additionalPrinterColumns;
    }

    /**
     * AdditionalPrinterColumns are additional columns shown e.g. in kubectl next to the name. Defaults to
     * a created-at column. Top-level and per-version columns are mutually exclusive. Per-version columns
     * must not all be set to identical values (top-level columns should be used instead) This field is
     * alpha-level and is only honored by servers that enable the CustomResourceWebhookConversion feature.
     * NOTE: CRDs created prior to 1.13 populated the top-level additionalPrinterColumns field by default.
     * To apply an update that changes to per-version additionalPrinterColumns, the top-level
     * additionalPrinterColumns field must be explicitly set to null
     *
     * @return static
     */
    public function setAdditionalPrinterColumns(iterable $additionalPrinterColumns)
    {
        $this->additionalPrinterColumns = $additionalPrinterColumns;

        return $this;
    }

    /**
     * @return static
     */
    public function addAdditionalPrinterColumns(CustomResourceColumnDefinition $additionalPrinterColumn)
    {
        if (!$this->additionalPrinterColumns) {
            $this->additionalPrinterColumns = new Collection();
        }
        $this->additionalPrinterColumns[] = $additionalPrinterColumn;

        return $this;
    }

    /**
     * Name is the version name, e.g. “v1”, “v2beta1”, etc.
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Name is the version name, e.g. “v1”, “v2beta1”, etc.
     *
     * @return static
     */
    public function setName(string $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Schema describes the schema for CustomResource used in validation, pruning, and defaulting.
     * Top-level and per-version schemas are mutually exclusive. Per-version schemas must not all be set to
     * identical values (top-level validation schema should be used instead) This field is alpha-level and
     * is only honored by servers that enable the CustomResourceWebhookConversion feature.
     */
    public function getSchema(): ?CustomResourceValidation
    {
        return $this->schema;
    }

    /**
     * Schema describes the schema for CustomResource used in validation, pruning, and defaulting.
     * Top-level and per-version schemas are mutually exclusive. Per-version schemas must not all be set to
     * identical values (top-level validation schema should be used instead) This field is alpha-level and
     * is only honored by servers that enable the CustomResourceWebhookConversion feature.
     *
     * @return static
     */
    public function setSchema(CustomResourceValidation $schema)
    {
        $this->schema = $schema;

        return $this;
    }

    /**
     * Served is a flag enabling/disabling this version from being served via REST APIs
     */
    public function isServed(): bool
    {
        return $this->served;
    }

    /**
     * Served is a flag enabling/disabling this version from being served via REST APIs
     *
     * @return static
     */
    public function setIsServed(bool $served)
    {
        $this->served = $served;

        return $this;
    }

    /**
     * Storage flags the version as storage version. There must be exactly one flagged as storage version.
     */
    public function isStorage(): bool
    {
        return $this->storage;
    }

    /**
     * Storage flags the version as storage version. There must be exactly one flagged as storage version.
     *
     * @return static
     */
    public function setIsStorage(bool $storage)
    {
        $this->storage = $storage;

        return $this;
    }

    /**
     * Subresources describes the subresources for CustomResource Top-level and per-version subresources
     * are mutually exclusive. Per-version subresources must not all be set to identical values (top-level
     * subresources should be used instead) This field is alpha-level and is only honored by servers that
     * enable the CustomResourceWebhookConversion feature.
     */
    public function getSubresources(): ?CustomResourceSubresources
    {
        return $this->subresources;
    }

    /**
     * Subresources describes the subresources for CustomResource Top-level and per-version subresources
     * are mutually exclusive. Per-version subresources must not all be set to identical values (top-level
     * subresources should be used instead) This field is alpha-level and is only honored by servers that
     * enable the CustomResourceWebhookConversion feature.
     *
     * @return static
     */
    public function setSubresources(CustomResourceSubresources $subresources)
    {
        $this->subresources = $subresources;

        return $this;
    }
}
