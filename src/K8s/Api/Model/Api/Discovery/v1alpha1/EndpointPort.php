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

namespace K8s\Api\Model\Api\Discovery\v1alpha1;

use K8s\Core\Annotation as Kubernetes;

/**
 * EndpointPort represents a Port used by an EndpointSlice
 */
class EndpointPort
{
    /**
     * @Kubernetes\Attribute("name")
     * @var string|null
     */
    protected $name = null;

    /**
     * @Kubernetes\Attribute("port")
     * @var int|null
     */
    protected $port = null;

    /**
     * @Kubernetes\Attribute("protocol")
     * @var string|null
     */
    protected $protocol = null;

    /**
     * @param string|null $name
     * @param int|null $port
     * @param string|null $protocol
     */
    public function __construct(?string $name = null, ?int $port = null, ?string $protocol = null)
    {
        $this->name = $name;
        $this->port = $port;
        $this->protocol = $protocol;
    }

    /**
     * The name of this port. All ports in an EndpointSlice must have a unique name. If the EndpointSlice
     * is dervied from a Kubernetes service, this corresponds to the Service.ports[].name. Name must either
     * be an empty string or pass IANA_SVC_NAME validation: * must be no more than 15 characters long * may
     * contain only [-a-z0-9] * must contain at least one letter [a-z] * it must not start or end with a
     * hyphen, nor contain adjacent hyphens Default is empty string.
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * The name of this port. All ports in an EndpointSlice must have a unique name. If the EndpointSlice
     * is dervied from a Kubernetes service, this corresponds to the Service.ports[].name. Name must either
     * be an empty string or pass IANA_SVC_NAME validation: * must be no more than 15 characters long * may
     * contain only [-a-z0-9] * must contain at least one letter [a-z] * it must not start or end with a
     * hyphen, nor contain adjacent hyphens Default is empty string.
     *
     * @return static
     */
    public function setName(string $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * The port number of the endpoint. If this is not specified, ports are not restricted and must be
     * interpreted in the context of the specific consumer.
     */
    public function getPort(): ?int
    {
        return $this->port;
    }

    /**
     * The port number of the endpoint. If this is not specified, ports are not restricted and must be
     * interpreted in the context of the specific consumer.
     *
     * @return static
     */
    public function setPort(int $port)
    {
        $this->port = $port;

        return $this;
    }

    /**
     * The IP protocol for this port. Must be UDP, TCP, or SCTP. Default is TCP.
     */
    public function getProtocol(): ?string
    {
        return $this->protocol;
    }

    /**
     * The IP protocol for this port. Must be UDP, TCP, or SCTP. Default is TCP.
     *
     * @return static
     */
    public function setProtocol(string $protocol)
    {
        $this->protocol = $protocol;

        return $this;
    }
}
