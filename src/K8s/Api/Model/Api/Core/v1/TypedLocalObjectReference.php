<?php

/**
 * This file was automatically generated by k8s/api-generator 0.6.0 for API version v1.20.2
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Model\Api\Core\v1;

use K8s\Core\Annotation as Kubernetes;

/**
 * TypedLocalObjectReference contains enough information to let you locate the typed referenced object
 * inside the same namespace.
 */
class TypedLocalObjectReference
{
    /**
     * @Kubernetes\Attribute("apiGroup")
     * @var string|null
     */
    protected $apiGroup = null;

    /**
     * @Kubernetes\Attribute("kind",isRequired=true)
     * @var string
     */
    protected $kind = null;

    /**
     * @Kubernetes\Attribute("name",isRequired=true)
     * @var string
     */
    protected $name = null;

    /**
     * @param string $kind
     * @param string $name
     */
    public function __construct(string $kind, string $name)
    {
        $this->kind = $kind;
        $this->name = $name;
    }

    /**
     * APIGroup is the group for the resource being referenced. If APIGroup is not specified, the specified
     * Kind must be in the core API group. For any other third-party types, APIGroup is required.
     */
    public function getApiGroup(): ?string
    {
        return $this->apiGroup;
    }

    /**
     * APIGroup is the group for the resource being referenced. If APIGroup is not specified, the specified
     * Kind must be in the core API group. For any other third-party types, APIGroup is required.
     *
     * @return static
     */
    public function setApiGroup(string $apiGroup)
    {
        $this->apiGroup = $apiGroup;

        return $this;
    }

    /**
     * Kind is the type of resource being referenced
     */
    public function getKind(): string
    {
        return $this->kind;
    }

    /**
     * Kind is the type of resource being referenced
     *
     * @return static
     */
    public function setKind(string $kind)
    {
        $this->kind = $kind;

        return $this;
    }

    /**
     * Name is the name of resource being referenced
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Name is the name of resource being referenced
     *
     * @return static
     */
    public function setName(string $name)
    {
        $this->name = $name;

        return $this;
    }
}
