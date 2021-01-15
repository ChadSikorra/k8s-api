<?php

/**
 * This file was automatically generated by k8s/api-generator 0.4.0 for API version v1.12.10
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
 * CustomResourceDefinitionSpec describes how a user wants their resource to appear
 */
class CustomResourceDefinitionSpec
{
    /**
     * @Kubernetes\Attribute("additionalPrinterColumns",type="collection",model=CustomResourceColumnDefinition::class)
     * @var iterable|CustomResourceColumnDefinition[]|null
     */
    protected $additionalPrinterColumns;

    /**
     * @Kubernetes\Attribute("group",isRequired=true)
     * @var string
     */
    protected $group;

    /**
     * @Kubernetes\Attribute("names",type="model",model=CustomResourceDefinitionNames::class,isRequired=true)
     * @var CustomResourceDefinitionNames
     */
    protected $names;

    /**
     * @Kubernetes\Attribute("scope",isRequired=true)
     * @var string
     */
    protected $scope;

    /**
     * @Kubernetes\Attribute("subresources",type="model",model=CustomResourceSubresources::class)
     * @var CustomResourceSubresources|null
     */
    protected $subresources;

    /**
     * @Kubernetes\Attribute("validation",type="model",model=CustomResourceValidation::class)
     * @var CustomResourceValidation|null
     */
    protected $validation;

    /**
     * @Kubernetes\Attribute("version")
     * @var string|null
     */
    protected $version;

    /**
     * @Kubernetes\Attribute("versions",type="collection",model=CustomResourceDefinitionVersion::class)
     * @var iterable|CustomResourceDefinitionVersion[]|null
     */
    protected $versions;

    /**
     * @param string $group
     * @param CustomResourceDefinitionNames $names
     * @param string $scope
     */
    public function __construct(string $group, CustomResourceDefinitionNames $names, string $scope)
    {
        $this->group = $group;
        $this->names = $names;
        $this->scope = $scope;
    }

    /**
     * AdditionalPrinterColumns are additional columns shown e.g. in kubectl next to the name. Defaults to
     * a created-at column.
     *
     * @return iterable|CustomResourceColumnDefinition[]
     */
    public function getAdditionalPrinterColumns(): ?iterable
    {
        return $this->additionalPrinterColumns;
    }

    /**
     * AdditionalPrinterColumns are additional columns shown e.g. in kubectl next to the name. Defaults to
     * a created-at column.
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
     * Group is the group this resource belongs in
     */
    public function getGroup(): string
    {
        return $this->group;
    }

    /**
     * Group is the group this resource belongs in
     *
     * @return static
     */
    public function setGroup(string $group)
    {
        $this->group = $group;

        return $this;
    }

    /**
     * Names are the names used to describe this custom resource
     */
    public function getNames(): CustomResourceDefinitionNames
    {
        return $this->names;
    }

    /**
     * Names are the names used to describe this custom resource
     *
     * @return static
     */
    public function setNames(CustomResourceDefinitionNames $names)
    {
        $this->names = $names;

        return $this;
    }

    /**
     * Scope indicates whether this resource is cluster or namespace scoped.  Default is namespaced
     */
    public function getScope(): string
    {
        return $this->scope;
    }

    /**
     * Scope indicates whether this resource is cluster or namespace scoped.  Default is namespaced
     *
     * @return static
     */
    public function setScope(string $scope)
    {
        $this->scope = $scope;

        return $this;
    }

    /**
     * Subresources describes the subresources for CustomResources
     */
    public function getSubresources(): ?CustomResourceSubresources
    {
        return $this->subresources;
    }

    /**
     * Subresources describes the subresources for CustomResources
     *
     * @return static
     */
    public function setSubresources(CustomResourceSubresources $subresources)
    {
        $this->subresources = $subresources;

        return $this;
    }

    /**
     * Validation describes the validation methods for CustomResources
     */
    public function getValidation(): ?CustomResourceValidation
    {
        return $this->validation;
    }

    /**
     * Validation describes the validation methods for CustomResources
     *
     * @return static
     */
    public function setValidation(CustomResourceValidation $validation)
    {
        $this->validation = $validation;

        return $this;
    }

    /**
     * Version is the version this resource belongs in Should be always first item in Versions field if
     * provided. Optional, but at least one of Version or Versions must be set. Deprecated: Please use
     * `Versions`.
     */
    public function getVersion(): ?string
    {
        return $this->version;
    }

    /**
     * Version is the version this resource belongs in Should be always first item in Versions field if
     * provided. Optional, but at least one of Version or Versions must be set. Deprecated: Please use
     * `Versions`.
     *
     * @return static
     */
    public function setVersion(string $version)
    {
        $this->version = $version;

        return $this;
    }

    /**
     * Versions is the list of all supported versions for this resource. If Version field is provided, this
     * field is optional. Validation: All versions must use the same validation schema for now. i.e., top
     * level Validation field is applied to all of these versions. Order: The version name will be used to
     * compute the order. If the version string is "kube-like", it will sort above non "kube-like" version
     * strings, which are ordered lexicographically. "Kube-like" versions start with a "v", then are
     * followed by a number (the major version), then optionally the string "alpha" or "beta" and another
     * number (the minor version). These are sorted first by GA > beta > alpha (where GA is a version with
     * no suffix such as beta or alpha), and then by comparing major version, then minor version. An
     * example sorted list of versions: v10, v2, v1, v11beta2, v10beta3, v3beta1, v12alpha1, v11alpha2,
     * foo1, foo10.
     *
     * @return iterable|CustomResourceDefinitionVersion[]
     */
    public function getVersions(): ?iterable
    {
        return $this->versions;
    }

    /**
     * Versions is the list of all supported versions for this resource. If Version field is provided, this
     * field is optional. Validation: All versions must use the same validation schema for now. i.e., top
     * level Validation field is applied to all of these versions. Order: The version name will be used to
     * compute the order. If the version string is "kube-like", it will sort above non "kube-like" version
     * strings, which are ordered lexicographically. "Kube-like" versions start with a "v", then are
     * followed by a number (the major version), then optionally the string "alpha" or "beta" and another
     * number (the minor version). These are sorted first by GA > beta > alpha (where GA is a version with
     * no suffix such as beta or alpha), and then by comparing major version, then minor version. An
     * example sorted list of versions: v10, v2, v1, v11beta2, v10beta3, v3beta1, v12alpha1, v11alpha2,
     * foo1, foo10.
     *
     * @return static
     */
    public function setVersions(iterable $versions)
    {
        $this->versions = $versions;

        return $this;
    }

    /**
     * @return static
     */
    public function addVersions(CustomResourceDefinitionVersion $version)
    {
        if (!$this->versions) {
            $this->versions = new Collection();
        }
        $this->versions[] = $version;

        return $this;
    }
}
