<?php

/**
 * This file was automatically generated by k8s/api-generator 0.7.0 for API version v1.15.12
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
 * ContainerPort represents a network port in a single container.
 */
class ContainerPort
{
    /**
     * @Kubernetes\Attribute("containerPort",isRequired=true)
     * @var int
     */
    protected $containerPort;

    /**
     * @Kubernetes\Attribute("hostIP")
     * @var string|null
     */
    protected $hostIP = null;

    /**
     * @Kubernetes\Attribute("hostPort")
     * @var int|null
     */
    protected $hostPort = null;

    /**
     * @Kubernetes\Attribute("name")
     * @var string|null
     */
    protected $name = null;

    /**
     * @Kubernetes\Attribute("protocol")
     * @var string|null
     */
    protected $protocol = null;

    /**
     * @param int $containerPort
     */
    public function __construct(int $containerPort)
    {
        $this->containerPort = $containerPort;
    }

    /**
     * Number of port to expose on the pod's IP address. This must be a valid port number, 0 < x < 65536.
     */
    public function getContainerPort(): int
    {
        return $this->containerPort;
    }

    /**
     * Number of port to expose on the pod's IP address. This must be a valid port number, 0 < x < 65536.
     *
     * @return static
     */
    public function setContainerPort(int $containerPort)
    {
        $this->containerPort = $containerPort;

        return $this;
    }

    /**
     * What host IP to bind the external port to.
     */
    public function getHostIP(): ?string
    {
        return $this->hostIP;
    }

    /**
     * What host IP to bind the external port to.
     *
     * @return static
     */
    public function setHostIP(string $hostIP)
    {
        $this->hostIP = $hostIP;

        return $this;
    }

    /**
     * Number of port to expose on the host. If specified, this must be a valid port number, 0 < x < 65536.
     * If HostNetwork is specified, this must match ContainerPort. Most containers do not need this.
     */
    public function getHostPort(): ?int
    {
        return $this->hostPort;
    }

    /**
     * Number of port to expose on the host. If specified, this must be a valid port number, 0 < x < 65536.
     * If HostNetwork is specified, this must match ContainerPort. Most containers do not need this.
     *
     * @return static
     */
    public function setHostPort(int $hostPort)
    {
        $this->hostPort = $hostPort;

        return $this;
    }

    /**
     * If specified, this must be an IANA_SVC_NAME and unique within the pod. Each named port in a pod must
     * have a unique name. Name for the port that can be referred to by services.
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * If specified, this must be an IANA_SVC_NAME and unique within the pod. Each named port in a pod must
     * have a unique name. Name for the port that can be referred to by services.
     *
     * @return static
     */
    public function setName(string $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Protocol for port. Must be UDP, TCP, or SCTP. Defaults to "TCP".
     */
    public function getProtocol(): ?string
    {
        return $this->protocol;
    }

    /**
     * Protocol for port. Must be UDP, TCP, or SCTP. Defaults to "TCP".
     *
     * @return static
     */
    public function setProtocol(string $protocol)
    {
        $this->protocol = $protocol;

        return $this;
    }
}
