<?php

/**
 * This file was automatically generated by k8s/api-generator 0.4.0 for API version v1.11.10
 *
 * (c) Chad Sikorra <Chad.Sikorra@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace K8s\Api\Model\Api\Policy\v1beta1;

use K8s\Core\Annotation as Kubernetes;

/**
 * PodDisruptionBudgetStatus represents information about the status of a PodDisruptionBudget. Status
 * may trail the actual state of a system.
 */
class PodDisruptionBudgetStatus
{
    /**
     * @Kubernetes\Attribute("currentHealthy",isRequired=true)
     * @var int
     */
    protected $currentHealthy;

    /**
     * @Kubernetes\Attribute("desiredHealthy",isRequired=true)
     * @var int
     */
    protected $desiredHealthy;

    /**
     * @Kubernetes\Attribute("disruptedPods",isRequired=true)
     * @var object[]
     */
    protected $disruptedPods;

    /**
     * @Kubernetes\Attribute("disruptionsAllowed",isRequired=true)
     * @var int
     */
    protected $disruptionsAllowed;

    /**
     * @Kubernetes\Attribute("expectedPods",isRequired=true)
     * @var int
     */
    protected $expectedPods;

    /**
     * @Kubernetes\Attribute("observedGeneration")
     * @var int|null
     */
    protected $observedGeneration;

    /**
     * @param int $currentHealthy
     * @param int $desiredHealthy
     * @param object[] $disruptedPods
     * @param int $disruptionsAllowed
     * @param int $expectedPods
     */
    public function __construct(int $currentHealthy, int $desiredHealthy, array $disruptedPods, int $disruptionsAllowed, int $expectedPods)
    {
        $this->currentHealthy = $currentHealthy;
        $this->desiredHealthy = $desiredHealthy;
        $this->disruptedPods = $disruptedPods;
        $this->disruptionsAllowed = $disruptionsAllowed;
        $this->expectedPods = $expectedPods;
    }

    /**
     * current number of healthy pods
     */
    public function getCurrentHealthy(): int
    {
        return $this->currentHealthy;
    }

    /**
     * current number of healthy pods
     *
     * @return static
     */
    public function setCurrentHealthy(int $currentHealthy)
    {
        $this->currentHealthy = $currentHealthy;

        return $this;
    }

    /**
     * minimum desired number of healthy pods
     */
    public function getDesiredHealthy(): int
    {
        return $this->desiredHealthy;
    }

    /**
     * minimum desired number of healthy pods
     *
     * @return static
     */
    public function setDesiredHealthy(int $desiredHealthy)
    {
        $this->desiredHealthy = $desiredHealthy;

        return $this;
    }

    /**
     * DisruptedPods contains information about pods whose eviction was processed by the API server
     * eviction subresource handler but has not yet been observed by the PodDisruptionBudget controller. A
     * pod will be in this map from the time when the API server processed the eviction request to the time
     * when the pod is seen by PDB controller as having been marked for deletion (or after a timeout). The
     * key in the map is the name of the pod and the value is the time when the API server processed the
     * eviction request. If the deletion didn't occur and a pod is still there it will be removed from the
     * list automatically by PodDisruptionBudget controller after some time. If everything goes smooth this
     * map should be empty for the most of the time. Large number of entries in the map may indicate
     * problems with pod deletions.
     */
    public function getDisruptedPods(): array
    {
        return $this->disruptedPods;
    }

    /**
     * DisruptedPods contains information about pods whose eviction was processed by the API server
     * eviction subresource handler but has not yet been observed by the PodDisruptionBudget controller. A
     * pod will be in this map from the time when the API server processed the eviction request to the time
     * when the pod is seen by PDB controller as having been marked for deletion (or after a timeout). The
     * key in the map is the name of the pod and the value is the time when the API server processed the
     * eviction request. If the deletion didn't occur and a pod is still there it will be removed from the
     * list automatically by PodDisruptionBudget controller after some time. If everything goes smooth this
     * map should be empty for the most of the time. Large number of entries in the map may indicate
     * problems with pod deletions.
     *
     * @return static
     */
    public function setDisruptedPods(array $disruptedPods)
    {
        $this->disruptedPods = $disruptedPods;

        return $this;
    }

    /**
     * Number of pod disruptions that are currently allowed.
     */
    public function getDisruptionsAllowed(): int
    {
        return $this->disruptionsAllowed;
    }

    /**
     * Number of pod disruptions that are currently allowed.
     *
     * @return static
     */
    public function setDisruptionsAllowed(int $disruptionsAllowed)
    {
        $this->disruptionsAllowed = $disruptionsAllowed;

        return $this;
    }

    /**
     * total number of pods counted by this disruption budget
     */
    public function getExpectedPods(): int
    {
        return $this->expectedPods;
    }

    /**
     * total number of pods counted by this disruption budget
     *
     * @return static
     */
    public function setExpectedPods(int $expectedPods)
    {
        $this->expectedPods = $expectedPods;

        return $this;
    }

    /**
     * Most recent generation observed when updating this PDB status. PodDisruptionsAllowed and other
     * status informatio is valid only if observedGeneration equals to PDB's object generation.
     */
    public function getObservedGeneration(): ?int
    {
        return $this->observedGeneration;
    }

    /**
     * Most recent generation observed when updating this PDB status. PodDisruptionsAllowed and other
     * status informatio is valid only if observedGeneration equals to PDB's object generation.
     *
     * @return static
     */
    public function setObservedGeneration(int $observedGeneration)
    {
        $this->observedGeneration = $observedGeneration;

        return $this;
    }
}
