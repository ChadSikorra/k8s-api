<?php

/**
 * This file was automatically generated by k8s/api-generator 0.11.0 for API version v1.16.15
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
 * ServicePort contains information on service's port.
 */
class ServicePort
{
    /**
     * @Kubernetes\Attribute("name")
     * @var string|null
     */
    protected $name = null;

    /**
     * @Kubernetes\Attribute("nodePort")
     * @var int|null
     */
    protected $nodePort = null;

    /**
     * @Kubernetes\Attribute("port",isRequired=true)
     * @var int
     */
    protected $port;

    /**
     * @Kubernetes\Attribute("protocol")
     * @var string|null
     */
    protected $protocol = null;

    /**
     * @Kubernetes\Attribute("targetPort")
     * @var int|string|null
     */
    protected $targetPort = null;

    /**
     * @param int $port
     */
    public function __construct(int $port)
    {
        $this->port = $port;
    }

    /**
     * The name of this port within the service. This must be a DNS_LABEL. All ports within a ServiceSpec
     * must have unique names. When considering the endpoints for a Service, this must match the 'name'
     * field in the EndpointPort. Optional if only one ServicePort is defined on this service.
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * The name of this port within the service. This must be a DNS_LABEL. All ports within a ServiceSpec
     * must have unique names. When considering the endpoints for a Service, this must match the 'name'
     * field in the EndpointPort. Optional if only one ServicePort is defined on this service.
     *
     * @return static
     */
    public function setName(string $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * The port on each node on which this service is exposed when type=NodePort or LoadBalancer. Usually
     * assigned by the system. If specified, it will be allocated to the service if unused or else creation
     * of the service will fail. Default is to auto-allocate a port if the ServiceType of this Service
     * requires one. More info:
     * https://kubernetes.io/docs/concepts/services-networking/service/#type-nodeport
     */
    public function getNodePort(): ?int
    {
        return $this->nodePort;
    }

    /**
     * The port on each node on which this service is exposed when type=NodePort or LoadBalancer. Usually
     * assigned by the system. If specified, it will be allocated to the service if unused or else creation
     * of the service will fail. Default is to auto-allocate a port if the ServiceType of this Service
     * requires one. More info:
     * https://kubernetes.io/docs/concepts/services-networking/service/#type-nodeport
     *
     * @return static
     */
    public function setNodePort(int $nodePort)
    {
        $this->nodePort = $nodePort;

        return $this;
    }

    /**
     * The port that will be exposed by this service.
     */
    public function getPort(): int
    {
        return $this->port;
    }

    /**
     * The port that will be exposed by this service.
     *
     * @return static
     */
    public function setPort(int $port)
    {
        $this->port = $port;

        return $this;
    }

    /**
     * The IP protocol for this port. Supports "TCP", "UDP", and "SCTP". Default is TCP.
     */
    public function getProtocol(): ?string
    {
        return $this->protocol;
    }

    /**
     * The IP protocol for this port. Supports "TCP", "UDP", and "SCTP". Default is TCP.
     *
     * @return static
     */
    public function setProtocol(string $protocol)
    {
        $this->protocol = $protocol;

        return $this;
    }

    /**
     * Number or name of the port to access on the pods targeted by the service. Number must be in the
     * range 1 to 65535. Name must be an IANA_SVC_NAME. If this is a string, it will be looked up as a
     * named port in the target Pod's container ports. If this is not specified, the value of the 'port'
     * field is used (an identity map). This field is ignored for services with clusterIP=None, and should
     * be omitted or set equal to the 'port' field. More info:
     * https://kubernetes.io/docs/concepts/services-networking/service/#defining-a-service
     *
     * @return int|string
     */
    public function getTargetPort()
    {
        return $this->targetPort;
    }

    /**
     * Number or name of the port to access on the pods targeted by the service. Number must be in the
     * range 1 to 65535. Name must be an IANA_SVC_NAME. If this is a string, it will be looked up as a
     * named port in the target Pod's container ports. If this is not specified, the value of the 'port'
     * field is used (an identity map). This field is ignored for services with clusterIP=None, and should
     * be omitted or set equal to the 'port' field. More info:
     * https://kubernetes.io/docs/concepts/services-networking/service/#defining-a-service
     *
     * @param int|string $targetPort
     * @return static
     */
    public function setTargetPort($targetPort)
    {
        $this->targetPort = $targetPort;

        return $this;
    }
}
