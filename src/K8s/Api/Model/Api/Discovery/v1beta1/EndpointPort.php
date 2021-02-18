<?php

/**
 * This file was automatically generated by k8s/api-generator 0.10.0 for API version v1.20.3
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Model\Api\Discovery\v1beta1;

use K8s\Core\Annotation as Kubernetes;

/**
 * EndpointPort represents a Port used by an EndpointSlice
 */
class EndpointPort
{
    /**
     * @Kubernetes\Attribute("appProtocol")
     * @var string|null
     */
    protected $appProtocol = null;

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
     * @param string|null $appProtocol
     * @param string|null $name
     * @param int|null $port
     * @param string|null $protocol
     */
    public function __construct(?string $appProtocol = null, ?string $name = null, ?int $port = null, ?string $protocol = null)
    {
        $this->appProtocol = $appProtocol;
        $this->name = $name;
        $this->port = $port;
        $this->protocol = $protocol;
    }

    /**
     * The application protocol for this port. This field follows standard Kubernetes label syntax.
     * Un-prefixed names are reserved for IANA standard service names (as per RFC-6335 and
     * http://www.iana.org/assignments/service-names). Non-standard protocols should use prefixed names
     * such as mycompany.com/my-custom-protocol.
     */
    public function getAppProtocol(): ?string
    {
        return $this->appProtocol;
    }

    /**
     * The application protocol for this port. This field follows standard Kubernetes label syntax.
     * Un-prefixed names are reserved for IANA standard service names (as per RFC-6335 and
     * http://www.iana.org/assignments/service-names). Non-standard protocols should use prefixed names
     * such as mycompany.com/my-custom-protocol.
     *
     * @return static
     */
    public function setAppProtocol(string $appProtocol)
    {
        $this->appProtocol = $appProtocol;

        return $this;
    }

    /**
     * The name of this port. All ports in an EndpointSlice must have a unique name. If the EndpointSlice
     * is dervied from a Kubernetes service, this corresponds to the Service.ports[].name. Name must either
     * be an empty string or pass DNS_LABEL validation: * must be no more than 63 characters long. * must
     * consist of lower case alphanumeric characters or '-'. * must start and end with an alphanumeric
     * character. Default is empty string.
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * The name of this port. All ports in an EndpointSlice must have a unique name. If the EndpointSlice
     * is dervied from a Kubernetes service, this corresponds to the Service.ports[].name. Name must either
     * be an empty string or pass DNS_LABEL validation: * must be no more than 63 characters long. * must
     * consist of lower case alphanumeric characters or '-'. * must start and end with an alphanumeric
     * character. Default is empty string.
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
