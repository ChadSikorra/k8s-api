<?php

/**
 * This file was automatically generated by k8s/api-generator 0.7.0 for API version v1.11.10
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Model\KubeAggregator\Apis\ApiRegistration\v1;

use K8s\Core\Annotation as Kubernetes;

/**
 * ServiceReference holds a reference to Service.legacy.k8s.io
 */
class ServiceReference
{
    /**
     * @Kubernetes\Attribute("name")
     * @var string|null
     */
    protected $name = null;

    /**
     * @Kubernetes\Attribute("namespace")
     * @var string|null
     */
    protected $namespace = null;

    /**
     * @param string|null $name
     * @param string|null $namespace
     */
    public function __construct(?string $name = null, ?string $namespace = null)
    {
        $this->name = $name;
        $this->namespace = $namespace;
    }

    /**
     * Name is the name of the service
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Name is the name of the service
     *
     * @return static
     */
    public function setName(string $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Namespace is the namespace of the service
     */
    public function getNamespace(): ?string
    {
        return $this->namespace;
    }

    /**
     * Namespace is the namespace of the service
     *
     * @return static
     */
    public function setNamespace(string $namespace)
    {
        $this->namespace = $namespace;

        return $this;
    }
}
