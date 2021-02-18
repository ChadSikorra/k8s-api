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

namespace K8s\Api\Model\Api\Core\v1;

use K8s\Core\Annotation as Kubernetes;

/**
 * ResourceQuotaStatus defines the enforced hard limits and observed use.
 */
class ResourceQuotaStatus
{
    /**
     * @Kubernetes\Attribute("hard")
     * @var object[]|null
     */
    protected $hard = null;

    /**
     * @Kubernetes\Attribute("used")
     * @var object[]|null
     */
    protected $used = null;

    /**
     * @param object[]|null $hard
     * @param object[]|null $used
     */
    public function __construct(?array $hard = null, ?array $used = null)
    {
        $this->hard = $hard;
        $this->used = $used;
    }

    /**
     * Hard is the set of enforced hard limits for each named resource. More info:
     * https://kubernetes.io/docs/concepts/policy/resource-quotas/
     */
    public function getHard(): ?array
    {
        return $this->hard;
    }

    /**
     * Hard is the set of enforced hard limits for each named resource. More info:
     * https://kubernetes.io/docs/concepts/policy/resource-quotas/
     *
     * @return static
     */
    public function setHard(array $hard)
    {
        $this->hard = $hard;

        return $this;
    }

    /**
     * Used is the current observed total usage of the resource in the namespace.
     */
    public function getUsed(): ?array
    {
        return $this->used;
    }

    /**
     * Used is the current observed total usage of the resource in the namespace.
     *
     * @return static
     */
    public function setUsed(array $used)
    {
        $this->used = $used;

        return $this;
    }
}
