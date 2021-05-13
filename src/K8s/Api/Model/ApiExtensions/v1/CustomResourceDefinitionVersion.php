<?php

/**
 * This file was automatically generated by k8s/api-generator 0.11.0 for API version v1.18.19
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Model\ApiExtensions\v1;

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
     * additionalPrinterColumns specifies additional columns returned in Table output. See
     * https://kubernetes.io/docs/reference/using-api/api-concepts/#receiving-resources-as-tables for
     * details. If no columns are specified, a single column displaying the age of the custom resource is
     * used.
     *
     * @return iterable|CustomResourceColumnDefinition[]
     */
    public function getAdditionalPrinterColumns(): ?iterable
    {
        return $this->additionalPrinterColumns;
    }

    /**
     * additionalPrinterColumns specifies additional columns returned in Table output. See
     * https://kubernetes.io/docs/reference/using-api/api-concepts/#receiving-resources-as-tables for
     * details. If no columns are specified, a single column displaying the age of the custom resource is
     * used.
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
     * name is the version name, e.g. “v1”, “v2beta1”, etc. The custom resources are served under
     * this version at `/apis/<group>/<version>/...` if `served` is true.
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * name is the version name, e.g. “v1”, “v2beta1”, etc. The custom resources are served under
     * this version at `/apis/<group>/<version>/...` if `served` is true.
     *
     * @return static
     */
    public function setName(string $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * schema describes the schema used for validation, pruning, and defaulting of this version of the
     * custom resource.
     */
    public function getSchema(): ?CustomResourceValidation
    {
        return $this->schema;
    }

    /**
     * schema describes the schema used for validation, pruning, and defaulting of this version of the
     * custom resource.
     *
     * @return static
     */
    public function setSchema(CustomResourceValidation $schema)
    {
        $this->schema = $schema;

        return $this;
    }

    /**
     * served is a flag enabling/disabling this version from being served via REST APIs
     */
    public function isServed(): bool
    {
        return $this->served;
    }

    /**
     * served is a flag enabling/disabling this version from being served via REST APIs
     *
     * @return static
     */
    public function setIsServed(bool $served)
    {
        $this->served = $served;

        return $this;
    }

    /**
     * storage indicates this version should be used when persisting custom resources to storage. There
     * must be exactly one version with storage=true.
     */
    public function isStorage(): bool
    {
        return $this->storage;
    }

    /**
     * storage indicates this version should be used when persisting custom resources to storage. There
     * must be exactly one version with storage=true.
     *
     * @return static
     */
    public function setIsStorage(bool $storage)
    {
        $this->storage = $storage;

        return $this;
    }

    /**
     * subresources specify what subresources this version of the defined custom resource have.
     */
    public function getSubresources(): ?CustomResourceSubresources
    {
        return $this->subresources;
    }

    /**
     * subresources specify what subresources this version of the defined custom resource have.
     *
     * @return static
     */
    public function setSubresources(CustomResourceSubresources $subresources)
    {
        $this->subresources = $subresources;

        return $this;
    }
}
