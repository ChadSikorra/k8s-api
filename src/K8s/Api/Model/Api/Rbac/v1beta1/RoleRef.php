<?php

/**
 * This file was automatically generated by k8s/api-generator 0.8.1 for API version v1.16.15
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Model\Api\Rbac\v1beta1;

use K8s\Core\Annotation as Kubernetes;

/**
 * RoleRef contains information that points to the role being used
 */
class RoleRef
{
    /**
     * @Kubernetes\Attribute("apiGroup",isRequired=true)
     * @var string
     */
    protected $apiGroup;

    /**
     * @Kubernetes\Attribute("kind",isRequired=true)
     * @var string
     */
    protected $kind;

    /**
     * @Kubernetes\Attribute("name",isRequired=true)
     * @var string
     */
    protected $name;

    /**
     * @param string $apiGroup
     * @param string $kind
     * @param string $name
     */
    public function __construct(string $apiGroup, string $kind, string $name)
    {
        $this->apiGroup = $apiGroup;
        $this->kind = $kind;
        $this->name = $name;
    }

    /**
     * APIGroup is the group for the resource being referenced
     */
    public function getApiGroup(): string
    {
        return $this->apiGroup;
    }

    /**
     * APIGroup is the group for the resource being referenced
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
