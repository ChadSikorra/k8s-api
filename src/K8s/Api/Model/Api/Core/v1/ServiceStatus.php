<?php

/**
 * This file was automatically generated by k8s/api-generator 0.7.1 for API version v1.12.10
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
 * ServiceStatus represents the current status of a service.
 */
class ServiceStatus
{
    /**
     * @Kubernetes\Attribute("loadBalancer",type="model",model=LoadBalancerStatus::class)
     * @var LoadBalancerStatus|null
     */
    protected $loadBalancer = null;

    /**
     * @param LoadBalancerStatus|null $loadBalancer
     */
    public function __construct(?LoadBalancerStatus $loadBalancer = null)
    {
        $this->loadBalancer = $loadBalancer;
    }

    /**
     * LoadBalancer contains the current status of the load-balancer, if one is present.
     */
    public function getLoadBalancer(): ?LoadBalancerStatus
    {
        return $this->loadBalancer;
    }

    /**
     * LoadBalancer contains the current status of the load-balancer, if one is present.
     *
     * @return static
     */
    public function setLoadBalancer(LoadBalancerStatus $loadBalancer)
    {
        $this->loadBalancer = $loadBalancer;

        return $this;
    }
}
