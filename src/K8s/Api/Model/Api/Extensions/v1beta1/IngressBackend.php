<?php

/**
 * This file was automatically generated by k8s/api-generator 0.10.0 for API version v1.18.16
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Model\Api\Extensions\v1beta1;

use K8s\Api\Model\Api\Core\v1\TypedLocalObjectReference;
use K8s\Core\Annotation as Kubernetes;

/**
 * IngressBackend describes all endpoints for a given service and port.
 */
class IngressBackend
{
    /**
     * @Kubernetes\Attribute("resource",type="model",model=TypedLocalObjectReference::class)
     * @var TypedLocalObjectReference|null
     */
    protected $resource = null;

    /**
     * @Kubernetes\Attribute("serviceName")
     * @var string|null
     */
    protected $serviceName = null;

    /**
     * @Kubernetes\Attribute("servicePort")
     * @var int|string|null
     */
    protected $servicePort = null;

    /**
     * @param TypedLocalObjectReference|null $resource
     * @param string|null $serviceName
     * @param int|string|null $servicePort
     */
    public function __construct(?TypedLocalObjectReference $resource = null, ?string $serviceName = null, $servicePort = null)
    {
        $this->resource = $resource;
        $this->serviceName = $serviceName;
        $this->servicePort = $servicePort;
    }

    /**
     * Resource is an ObjectRef to another Kubernetes resource in the namespace of the Ingress object. If
     * resource is specified, serviceName and servicePort must not be specified.
     */
    public function getResource(): ?TypedLocalObjectReference
    {
        return $this->resource;
    }

    /**
     * Resource is an ObjectRef to another Kubernetes resource in the namespace of the Ingress object. If
     * resource is specified, serviceName and servicePort must not be specified.
     *
     * @return static
     */
    public function setResource(TypedLocalObjectReference $resource)
    {
        $this->resource = $resource;

        return $this;
    }

    /**
     * Specifies the name of the referenced service.
     */
    public function getServiceName(): ?string
    {
        return $this->serviceName;
    }

    /**
     * Specifies the name of the referenced service.
     *
     * @return static
     */
    public function setServiceName(string $serviceName)
    {
        $this->serviceName = $serviceName;

        return $this;
    }

    /**
     * Specifies the port of the referenced service.
     *
     * @return int|string
     */
    public function getServicePort()
    {
        return $this->servicePort;
    }

    /**
     * Specifies the port of the referenced service.
     *
     * @param int|string $servicePort
     * @return static
     */
    public function setServicePort($servicePort)
    {
        $this->servicePort = $servicePort;

        return $this;
    }
}
