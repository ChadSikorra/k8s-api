<?php

/**
 * This file was automatically generated by k8s/api-generator 0.7.1 for API version v1.17.17
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Model\Api\FlowControl\v1alpha1;

use K8s\Core\Annotation as Kubernetes;

/**
 * ServiceAccountSubject holds detailed information for service-account-kind subject.
 */
class ServiceAccountSubject
{
    /**
     * @Kubernetes\Attribute("name",isRequired=true)
     * @var string
     */
    protected $name;

    /**
     * @Kubernetes\Attribute("namespace",isRequired=true)
     * @var string
     */
    protected $namespace;

    /**
     * @param string $name
     * @param string $namespace
     */
    public function __construct(string $name, string $namespace)
    {
        $this->name = $name;
        $this->namespace = $namespace;
    }

    /**
     * `name` is the name of matching ServiceAccount objects, or "*" to match regardless of name. Required.
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * `name` is the name of matching ServiceAccount objects, or "*" to match regardless of name. Required.
     *
     * @return static
     */
    public function setName(string $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * `namespace` is the namespace of matching ServiceAccount objects. Required.
     */
    public function getNamespace(): string
    {
        return $this->namespace;
    }

    /**
     * `namespace` is the namespace of matching ServiceAccount objects. Required.
     *
     * @return static
     */
    public function setNamespace(string $namespace)
    {
        $this->namespace = $namespace;

        return $this;
    }
}
