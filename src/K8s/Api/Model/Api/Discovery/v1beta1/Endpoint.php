<?php

/**
 * This file was automatically generated by k8s/api-generator 0.10.0 for API version v1.20.2
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Model\Api\Discovery\v1beta1;

use K8s\Api\Model\Api\Core\v1\ObjectReference;
use K8s\Core\Annotation as Kubernetes;

/**
 * Endpoint represents a single logical "backend" implementing a service.
 */
class Endpoint
{
    /**
     * @Kubernetes\Attribute("addresses",isRequired=true)
     * @var string[]
     */
    protected $addresses;

    /**
     * @Kubernetes\Attribute("conditions",type="model",model=EndpointConditions::class)
     * @var EndpointConditions|null
     */
    protected $conditions = null;

    /**
     * @Kubernetes\Attribute("hostname")
     * @var string|null
     */
    protected $hostname = null;

    /**
     * @Kubernetes\Attribute("nodeName")
     * @var string|null
     */
    protected $nodeName = null;

    /**
     * @Kubernetes\Attribute("targetRef",type="model",model=ObjectReference::class)
     * @var ObjectReference|null
     */
    protected $targetRef = null;

    /**
     * @Kubernetes\Attribute("topology")
     * @var string[]|null
     */
    protected $topology = null;

    /**
     * @param string[] $addresses
     */
    public function __construct(array $addresses)
    {
        $this->addresses = $addresses;
    }

    /**
     * addresses of this endpoint. The contents of this field are interpreted according to the
     * corresponding EndpointSlice addressType field. Consumers must handle different types of addresses in
     * the context of their own capabilities. This must contain at least one address but no more than 100.
     */
    public function getAddresses(): array
    {
        return $this->addresses;
    }

    /**
     * addresses of this endpoint. The contents of this field are interpreted according to the
     * corresponding EndpointSlice addressType field. Consumers must handle different types of addresses in
     * the context of their own capabilities. This must contain at least one address but no more than 100.
     *
     * @return static
     */
    public function setAddresses(array $addresses)
    {
        $this->addresses = $addresses;

        return $this;
    }

    /**
     * conditions contains information about the current status of the endpoint.
     */
    public function getConditions(): ?EndpointConditions
    {
        return $this->conditions;
    }

    /**
     * conditions contains information about the current status of the endpoint.
     *
     * @return static
     */
    public function setConditions(EndpointConditions $conditions)
    {
        $this->conditions = $conditions;

        return $this;
    }

    /**
     * hostname of this endpoint. This field may be used by consumers of endpoints to distinguish endpoints
     * from each other (e.g. in DNS names). Multiple endpoints which use the same hostname should be
     * considered fungible (e.g. multiple A values in DNS). Must be lowercase and pass DNS Label (RFC 1123)
     * validation.
     */
    public function getHostname(): ?string
    {
        return $this->hostname;
    }

    /**
     * hostname of this endpoint. This field may be used by consumers of endpoints to distinguish endpoints
     * from each other (e.g. in DNS names). Multiple endpoints which use the same hostname should be
     * considered fungible (e.g. multiple A values in DNS). Must be lowercase and pass DNS Label (RFC 1123)
     * validation.
     *
     * @return static
     */
    public function setHostname(string $hostname)
    {
        $this->hostname = $hostname;

        return $this;
    }

    /**
     * nodeName represents the name of the Node hosting this endpoint. This can be used to determine
     * endpoints local to a Node. This field can be enabled with the EndpointSliceNodeName feature gate.
     */
    public function getNodeName(): ?string
    {
        return $this->nodeName;
    }

    /**
     * nodeName represents the name of the Node hosting this endpoint. This can be used to determine
     * endpoints local to a Node. This field can be enabled with the EndpointSliceNodeName feature gate.
     *
     * @return static
     */
    public function setNodeName(string $nodeName)
    {
        $this->nodeName = $nodeName;

        return $this;
    }

    /**
     * targetRef is a reference to a Kubernetes object that represents this endpoint.
     */
    public function getTargetRef(): ?ObjectReference
    {
        return $this->targetRef;
    }

    /**
     * targetRef is a reference to a Kubernetes object that represents this endpoint.
     *
     * @return static
     */
    public function setTargetRef(ObjectReference $targetRef)
    {
        $this->targetRef = $targetRef;

        return $this;
    }

    /**
     * topology contains arbitrary topology information associated with the endpoint. These key/value pairs
     * must conform with the label format.
     * https://kubernetes.io/docs/concepts/overview/working-with-objects/labels Topology may include a
     * maximum of 16 key/value pairs. This includes, but is not limited to the following well known keys: *
     * kubernetes.io/hostname: the value indicates the hostname of the node
     *   where the endpoint is located. This should match the corresponding
     *   node label.
     * * topology.kubernetes.io/zone: the value indicates the zone where the
     *   endpoint is located. This should match the corresponding node label.
     * * topology.kubernetes.io/region: the value indicates the region where the
     *   endpoint is located. This should match the corresponding node label.
     * This field is deprecated and will be removed in future api versions.
     */
    public function getTopology(): ?array
    {
        return $this->topology;
    }

    /**
     * topology contains arbitrary topology information associated with the endpoint. These key/value pairs
     * must conform with the label format.
     * https://kubernetes.io/docs/concepts/overview/working-with-objects/labels Topology may include a
     * maximum of 16 key/value pairs. This includes, but is not limited to the following well known keys: *
     * kubernetes.io/hostname: the value indicates the hostname of the node
     *   where the endpoint is located. This should match the corresponding
     *   node label.
     * * topology.kubernetes.io/zone: the value indicates the zone where the
     *   endpoint is located. This should match the corresponding node label.
     * * topology.kubernetes.io/region: the value indicates the region where the
     *   endpoint is located. This should match the corresponding node label.
     * This field is deprecated and will be removed in future api versions.
     *
     * @return static
     */
    public function setTopology(array $topology)
    {
        $this->topology = $topology;

        return $this;
    }
}
