<?php

/**
 * This file was automatically generated by k8s/api-generator 0.7.0 for API version v1.16.15
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Model\Api\Extensions\v1beta1;

use K8s\Core\Annotation as Kubernetes;

/**
 * IngressBackend describes all endpoints for a given service and port.
 */
class IngressBackend
{
    /**
     * @Kubernetes\Attribute("serviceName",isRequired=true)
     * @var string
     */
    protected $serviceName;

    /**
     * @Kubernetes\Attribute("servicePort",isRequired=true)
     * @var int|string
     */
    protected $servicePort;

    /**
     * @param string $serviceName
     * @param int|string $servicePort
     */
    public function __construct(string $serviceName, $servicePort)
    {
        $this->serviceName = $serviceName;
        $this->servicePort = $servicePort;
    }

    /**
     * Specifies the name of the referenced service.
     */
    public function getServiceName(): string
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
