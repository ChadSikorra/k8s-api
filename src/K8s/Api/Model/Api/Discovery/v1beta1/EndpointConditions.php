<?php

/**
 * This file was automatically generated by k8s/api-generator 0.10.0 for API version v1.17.17
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
 * EndpointConditions represents the current condition of an endpoint.
 */
class EndpointConditions
{
    /**
     * @Kubernetes\Attribute("ready")
     * @var bool|null
     */
    protected $ready = null;

    /**
     * @param bool|null $ready
     */
    public function __construct(?bool $ready = null)
    {
        $this->ready = $ready;
    }

    /**
     * ready indicates that this endpoint is prepared to receive traffic, according to whatever system is
     * managing the endpoint. A nil value indicates an unknown state. In most cases consumers should
     * interpret this unknown state as ready.
     */
    public function isReady(): ?bool
    {
        return $this->ready;
    }

    /**
     * ready indicates that this endpoint is prepared to receive traffic, according to whatever system is
     * managing the endpoint. A nil value indicates an unknown state. In most cases consumers should
     * interpret this unknown state as ready.
     *
     * @return static
     */
    public function setIsReady(bool $ready)
    {
        $this->ready = $ready;

        return $this;
    }
}
