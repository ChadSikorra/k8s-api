<?php

/**
 * This file was automatically generated by k8s/api-generator 0.9.0 for API version v1.15.12
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Model\Api\Auditregistration\v1alpha1;

use K8s\Core\Annotation as Kubernetes;

/**
 * WebhookThrottleConfig holds the configuration for throttling events
 */
class WebhookThrottleConfig
{
    /**
     * @Kubernetes\Attribute("burst")
     * @var int|null
     */
    protected $burst = null;

    /**
     * @Kubernetes\Attribute("qps")
     * @var int|null
     */
    protected $qps = null;

    /**
     * @param int|null $burst
     * @param int|null $qps
     */
    public function __construct(?int $burst = null, ?int $qps = null)
    {
        $this->burst = $burst;
        $this->qps = $qps;
    }

    /**
     * ThrottleBurst is the maximum number of events sent at the same moment default 15 QPS
     */
    public function getBurst(): ?int
    {
        return $this->burst;
    }

    /**
     * ThrottleBurst is the maximum number of events sent at the same moment default 15 QPS
     *
     * @return static
     */
    public function setBurst(int $burst)
    {
        $this->burst = $burst;

        return $this;
    }

    /**
     * ThrottleQPS maximum number of batches per second default 10 QPS
     */
    public function getQps(): ?int
    {
        return $this->qps;
    }

    /**
     * ThrottleQPS maximum number of batches per second default 10 QPS
     *
     * @return static
     */
    public function setQps(int $qps)
    {
        $this->qps = $qps;

        return $this;
    }
}
